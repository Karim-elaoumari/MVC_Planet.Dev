<?php
class homeController{
    public function index(){
        $title = "Home";
        ob_start();
        include_once '../app/views/pages/mainHome.php';
        $content = ob_get_clean();
        include_once '../app/views/home.php';
    }
    public function error404(){
        $title = "Page Not Found";
        ob_start();
        include_once '../app/views/pages/404.php';
        $content = ob_get_clean();
        include_once '../app/views/home.php';
    }
    public function error403(){
        $title = "Page Not Accessible";
        ob_start();
        include_once '../app/views/pages/403.php';
        $content = ob_get_clean();
        include_once '../app/views/home.php';
    }
}