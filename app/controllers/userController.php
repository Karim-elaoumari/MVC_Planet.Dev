<?php

class userController{
    public $user;
    public function __construct(){
        $this->user = new user;
      
    }
    public function checkAuth(){
        if(!isset($_SESSION["id"])) header("location:../login");
    }
    public function login($err){
            $error="";
            if($err){
                $error = "Error: Email Or Password Not Correct !";
            }
            $title = "Home | Login";
            ob_start();
            include_once '../app/views/login.php';
            $content = ob_get_clean();
            include_once '../app/views/home.php';

        
        
    }
    public function verifylogin($email,$password){
        $res = $this->user->login($email,$password);
        if($res){
         
          $_SESSION["id"] = $res["id"];
          $_SESSION["name"] = $res["name"];
          $_SESSION["email"] = $res["email"];
          $_SESSION["password"] = $res["password"];
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