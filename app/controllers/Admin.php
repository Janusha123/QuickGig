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

        public function admincomplaints(){
            $data = [];
            
            $this->view('admin/v_admin_complaints', $data);
        }

        public function adminreviewcomplaints(){
            $data = [];
            
            $this->view('admin/v_admin_reviewcomplaint', $data);
        }

        public function adminmanageusers(){
            $data = [];
            
            $this->view('admin/v_admin_users', $data);
        }

        public function adminsettings(){
            $data = [];
            
            $this->view('admin/v_admin_settings', $data);
        }

        public function adminlogindetails(){
            $data = [];
            
            $this->view('admin/v_admin_logindetails', $data);
        }

        public function admindeleteaccount(){
            $data = [];
            
            $this->view('admin/v_admin_deleteaccount', $data);
        }
    }

    //
 
?>