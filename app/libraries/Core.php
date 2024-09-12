<!-- The Core class is responsible for routing the URL to the appropriate controller 
and method. It parses the URL and determines which controller and method to cal -->

<?php 
    class Core {
        //URL format: /controller/method/params
        //Declare protected variable to store controller, method and variable
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';//initial method
        protected $params = [];

        public function __construct(){
            $url = $this->getURL();

            if(file_exists('../app/controllers/' . ucwords($this->currentController) . '.php')){
                //If the controller exists, then load it
                $this->currentController = ucwords($url[0]);

                //Unset the controller in the URL
                unset($url[0]);

                //Call the controller
                require_once '../app/controllers/' . $this->currentController . '.php';

                //Instantiate the controller
                $this->currentController = new $this->currentController;

                //Check whether the method exists in the controller or not
                if(isset($url[1])){
                    if(method_exists($this->currentController, $url[1])){
                        $this->currentMethod = $url[1];
                        unset($url[1]);
                    }
                }

                //Get parameter list
                // array_values($url) ensures that the array keys are re-indexed starting from 0, 
                // which is important for passing them as a parameter list to the method.
                $this->params = $url ? array_values($url) : [];

                //Call method and pass in the parameter list
                // This will execute the following method call: Home->index('123', '456');.
                call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

            }
        }

        public function getURL(){

            // $_GET: An array that holds the query string parameters passed via the URL.
            // isset(): A function that checks if a variable or an array key is set and not null.
            if(isset($_GET['url'])){
                //To remove any trailing slashes from the URL. Example home/about/ will be home/about
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                //splits the URL into an array based on the slashes / in the URL
                //Each part of the URL will be an element in the array
                $url = explode('/', $url);

                return $url;
            }  
        }
    }
?>