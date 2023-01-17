<?php

class adminController extends userController{
    public $user;
    public $articles;
    public function __construct(){
        $this->user = new user;
        $this->articles = new article;
        session_start();
        
    }
    public function showDashboard(){
        if(isset($_SESSION["id"])){
            $title = "Admin | Dashboard";
            ob_start();
            $dashStatus ="text-white-50";$artiStatus ="fw-bold" ;$userStatus="fw-bold" ;$autorStatus="fw-bold";
            include_once '../app/views/includes/sidebar.php';
            $this->includes1();
            include_once '../app/views/includes/dashboard.php';
            $this->includes2();
            $content = ob_get_clean();
            include_once '../app/views/home.php';
        }
        else{
            header("location:../login");
        }

    }
    public function showArticals(){
        $title = "Admin | Articals";
        ob_start();
        $dashStatus ="fw-bold" ;$artiStatus ="text-white-50" ;$userStatus="fw-bold" ;$autorStatus="fw-bold";
        include_once '../app/views/includes/sidebar.php';
        $this->includes1();
        include_once '../app/views/includes/articles.php';
        $this->includes2();
        $content = ob_get_clean();
        include_once '../app/views/home.php';
    }
    public function showUsers(){
        $title = "Admin | Users";
        ob_start();
       
       
        $dashStatus ="fw-bold" ;$artiStatus ="fw-bold" ;$userStatus="text-white-50" ;$autorStatus="fw-bold";
        include_once '../app/views/includes/sidebar.php';
        $this->includes1();
        include_once '../app/views/includes/users.php';
        $this->includes2();
        $content = ob_get_clean();
        include_once '../app/views/home.php';
    }
    public function showAutors(){
        $title = "Admin | Autors";
        ob_start();
        $dashStatus ="fw-bold" ;$artiStatus ="fw-bold" ;$userStatus="fw-bold" ;$autorStatus="text-white-50";
        include_once '../app/views/includes/sidebar.php';
        $this->includes1();
        include_once '../app/views/includes/autors.php';
        $this->includes2();
        $content = ob_get_clean();
        include_once '../app/views/home.php';
    }
    public function showAddArticals(){
        $title = "Admin | Add Articals";
        ob_start();
        $dashStatus ="fw-bold" ;$artiStatus ="text-white-50" ;$userStatus="fw-bold" ;$autorStatus="fw-bold";
        include_once '../app/views/includes/sidebar.php';
        $this->includes1();
        include_once '../app/views/includes/addArticles.php';
        $this->includes2();
        $content = ob_get_clean();
        include_once '../app/views/home.php';
    }
    public function includes1(){
       
        include_once '../app/views/includes/alert.php';
        include_once '../app/views/includes/navbar.php';
    }
    public function includes2(){
        include '../app/views/includes/forms/session_modal.php';
        include '../app/views/includes/forms/view_doctor.php';
        include '../app/views/includes/forms/remove_doctor.php';
        include '../app/views/includes/forms/session.php';
        include '../app/views/includes/forms/remove_session.php';
        include_once '../app/views/includes/forms/add_edit_doctor.php';
    }
}