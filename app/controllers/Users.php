<?php 
    class Users extends Controller{
        public function __construct(){
            $this->userModel = $this->model('M_Users');
        }

        public function registerorganization(){
            $data = [];

            $this->view('users/v_registerorganization', $data);
        }

        public function registerindividual(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //form is submitting
                //Validate the data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                //Input data
                $data = [
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),

                    'name_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => '',
                ];

                //Validata each inputs
                //Validate name
                if(empty($data['name'])){
                    $data['name_err'] = 'Please enter name';
                }

                //Validate email
                if(empty($data['email'])){
                    $data['name_err'] = 'Please enter name';
                } else {
                    //Check email is registered or not
                    if($this->userModel->findUserByEmail($data['email'])){
                        $data['email_err'] = 'Email is already taken';
                    }
                }

                //Validate password
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter password';
                } else if(empty($data['confirm_password'])){
                    $data['confirm_password_err'] = 'Please enter confirm password';
                } else{
                    if($data['password'] != $data['confirm_password']){
                            $data['confirm_password_err'] = 'Passwords do not match';
                    }
                }

                //Validation is completed and no error then register the user
                if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                    //Hash password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);


                    //Register the user
                    if($this->userModel->register($data)){
                        die('User is registered');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load form with errors
                    $this->view('users/v_registerindividual', $data);
                }
            
            } else {
                //load form
                $data = [
                    'name' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',

                    'name_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => '',
                ];

                $this->view('users/v_registerindividual', $data);
            }
        }

        public function loginindividual(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //form is submitting
                //Validate the data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                //Input data
                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),

                    'email_err' => '',
                    'password_err' => '',
                ];

                //Validata each inputs
                //Validate email
                if(empty($data['email'])){
                    $data['email_err'] = 'Please enter email';
                }

                //Validate password
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter password';
                }

                //Check for user/email
                if($this->userModel->findUserByEmail($data['email'])){
                    //User found
                } else {
                    //User not found
                    $data['email_err'] = 'No user found';
                }

                //Validation is completed and no error then login the user
                if(empty($data['email_err']) && empty($data['password_err'])){
                    //Check and set logged in user
                    $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                    if($loggedInUser){
                        //Create session
                        die('User is logged in');
                    } else {
                        $data['password_err'] = 'Password is incorrect';
                        $this->view('users/v_loginindividual', $data);
                    }
                } else {
                    //load form with errors
                    $this->view('users/v_loginindividual', $data);
                }
            } else {
                //load form
                $data = [
                    'email' => '',
                    'password' => '',

                    'email_err' => '',
                    'password_err' => '',
                ];

                $this->view('users/v_loginindividual', $data);
            }   
        }

        public function loginorganization(){
            $data = [];

            $this->view('users/v_loginorganization', $data);
        }

        public function createUserSession($user){
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_email'] = $user->email;
            $_SESSION['user_name'] = $user->name;
            redirect('Pages/index');
        }

        public function logout(){
            unset($_SESSION['user_id']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_name']);
            session_destroy();
            redirect('Users/login');
        }

        public function isLoggedIn(){
            if(isset($_SESSION['user_id'])){
                return true;
            } else {
                return false;
            }
        }
    }
?>