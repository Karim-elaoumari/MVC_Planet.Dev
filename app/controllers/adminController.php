<?php

class adminController extends userController{
    public $adminModel;
    public $articleModel;
    public function __construct(){
        $this->adminModel = new user;
        $this->articleModel = new article;
    }
    public function showDashboard(){
            $this->checkAuth();
            $title = "Admin | Dashboard";
            ob_start();
            $dashStatus ="text-white-50";$artiStatus ="fw-bold" ;$userStatus="fw-bold" ;$autorStatus="fw-bold";
            include_once '../app/views/includes/sidebar.php';
            $this->includes1();
            $res = $this->articleModel->getNewArt();
            $categories = $this->articleModel->getCategories();
            include '../app/views/includes/forms/editArticle.php';
            include_once '../app/views/includes/dashboard.php';
            $this->includes2();
            $content = ob_get_clean();
            include_once '../app/views/home.php';
    }
    public function showArticals(){
            $this->checkAuth();
            $title = "Admin | Articals";
            ob_start();
            $dashStatus ="fw-bold" ;$artiStatus ="text-white-50" ;$userStatus="fw-bold" ;$autorStatus="fw-bold";
            include_once '../app/views/includes/sidebar.php';
            $this->includes1();
            $res = $this->articleModel->getAll();
            include_once '../app/views/includes/articles.php';
            $categories = $this->articleModel->getCategories();
            include '../app/views/includes/forms/editArticle.php';
            $this->includes2();
            $content = ob_get_clean();
            include_once '../app/views/home.php';
    }
    public function showUsers(){
            $this->checkAuth();
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
            $this->checkAuth();
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
            $this->checkAuth();
            $title = "Admin | Add Articals";
            ob_start();
            $categories = $this->articleModel->getCategories();
            $dashStatus ="fw-bold" ;$artiStatus ="text-white-50" ;$userStatus="fw-bold" ;$autorStatus="fw-bold";
            include '../app/views/includes/sidebar.php';
            $this->includes1();
            include '../app/views/includes/addArticles.php';
            $this->includes2();
            $content = ob_get_clean();
            include_once '../app/views/home.php';
    }
    public function includes1(){
        include '../app/views/includes/alert.php';
        include '../app/views/includes/navbar.php';
    }
    public function includes2(){
        include '../app/views/includes/forms/view_article.php';
        include '../app/views/includes/forms/remove_doctor.php';
      
    }
}