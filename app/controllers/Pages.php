<?php 
    class Pages extends Controller{
        public function __construct(){
            $this->pagesModel = $this->model('M_Pages');
        }

        public function index(){
            // echo 'Index function loaded';
        }
        
        public function about(){
            $users = $this->pagesModel->getUsers();

            $data = [
                'users' => $users,
            ];
            
            $this->view('v_about', $data);
        }
    }

    //
 
?>