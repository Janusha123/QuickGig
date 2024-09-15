<?php 
    class Admin extends Controller{
        public function __construct(){
            $this->pagesModel = $this->model('M_Pages');
        }

        public function index(){
            // echo 'Index function loaded';
        }
        
        public function adminannouncement(){
            $data = [];
            
            $this->view('admin/v_admin_announcement', $data);
        }

        public function admincreateannouncement(){
            $data = [];
            
            $this->view('admin/v_admin_createannouncement', $data);
        }
    }

    //
 
?>