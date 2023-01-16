<?php

class userController{
    public $user;
    public function __construct(){
        $this->user = new user;
    }
    public function login(){
        $title = "Home | Login";
        ob_start();
        include_once '../app/views/login.php';
        $content = ob_get_clean();
        include_once '../app/views/home.php';
    }
    public function verifylogin($email,$pass){


    }
}