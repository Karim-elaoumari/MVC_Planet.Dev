<?php

class homeController{
 
    
    public function index(){
        $title = "Home";
        ob_start();
        include_once '../app/views/mainHome.php';
        $content = ob_get_clean();
        include_once '../app/views/home.php';
    }
   
}