<?php

class adminController{
    public $adminModel;
    public function __construct(){
        $this->adminModel = new adminModel;
    }

        public function login(){
                $title = "Home | Login";
                ob_start();
                include_once '../app/views/pages/login.php';
                $content = ob_get_clean();
                include_once '../app/views/home.php';
        }
        public function verifylogin($email,$password){
                 $emailRegex = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
                if (preg_match($emailRegex, $email)) {
                echo "Email is valid.";
                
                } else {
                echo "Email is invalid.";
        
                }
                if (strlen($password) >=5 && strlen($password) <=17) {
                        // Password is valid
                        echo "Password is valid.";
                } else {
                        // Password is invalid
                        echo "Password should be between 5 and 17 characters.";
                }
                $admin = $this->adminModel->login($email,$password);
                if($admin){
                $_SESSION["id"] = $admin->id;
                $_SESSION["name"] = $admin->name;
                $_SESSION["email"] = $admin->email;
                header("location:admin");
        }
        else{
                header("location:login/error");
        }
        }
        public function logout(){
                session_destroy();
                session_unset();
                header("location:../login");
        }
        
}