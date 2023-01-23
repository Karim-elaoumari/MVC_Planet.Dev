<?php
class homeController{
    public function index(){
        $title = "Home";
        ob_start();
        include_once '../app/views/mainHome.php';
        $content = ob_get_clean();
        include_once '../app/views/home.php';
    }
    public function error404(){
        $title = "Page Not Found";
        ob_start();
        include_once '../app/views/404.php';
        $content = ob_get_clean();
        include_once '../app/views/home.php';
    }
}