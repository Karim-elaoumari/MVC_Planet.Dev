<?php
include_once '../autoload.php';
$admin1 = new adminController;
$home1 = new homeController;
$ajax1 = new ajaxController;
$article1 = new articleController;
$pages1 = new  pagesController;



$pages = ['home',"admin","login","error"];
$admin_pages = ['dashboard','articals','users',"autors","addArticles"];

if(isset($_POST["searchArt"])){
    $ajax1->searchArt($_POST["searchArt"]);
    die;
}  
if(isset($_POST["filterArt"])){
    $ajax1->filterArt($_POST["filterArt"]);
    die;
}
if(isset($_POST['getOneArt'])){
    $ajax1->getOneArt($_POST["getOneArt"]);
    die;

}
if(isset($_POST["login"]))           $admin1->verifylogin($_POST["email"],$_POST["password"]);
if(isset($_POST["updateArt"]))       $article1->updateArt($_POST["idOfEdit"],$_POST['title'],$_POST['content'],$_POST["categorie"],$_FILES["coverEdittt"],$_POST["oldCover"]);
if(isset($_POST["addArt"]))          $article1->addArt($_POST['title'],$_POST['content'],$_POST["speciality"],$_FILES["cover"]);
if(isset($_POST["deleteArt"]))       $article1->deleteArticles($_POST["id_Art"]);
if(isset($_POST["showUpdateArt"]))   showUpdateArt();
if(isset($_POST["logout"]))          $admin1->logout();





if(isset($_GET['page'])){ 

    if($_GET['page']==$pages[1]){
            if(isset($_GET['action'])){
                        if($_GET['action']==$admin_pages[1]){
                            $pages1->showArticals();
                        }
                        else if($_GET['action']==$admin_pages[2]){
                            $pages1->showUsers();
                        } 
                        else if($_GET['action']==$admin_pages[3]){
                            $pages1->showAutors();
                        }
                        else if($_GET['action']==$admin_pages[4]){
                            $pages1->showAddArticals();
                        }
                        else if($_GET['action']==$admin_pages[0]){
                            $pages1->showDashboard();
                        }
                        
                        else{
                            $home1->error404();
                        }
            }
            else{
                header('location:admin/dashboard');
            }
    }
    else if($_GET['page']==$pages[2]){
            $admin1->login(); 
    }   
    else if($_GET['page']==$pages[1]){
        $home1->index();
    }
    else if($_GET['page']==$pages[3]){
        $home1->error403();
    }
    else{
        $home1->error404();
    }
}else{
    $home1->index();
}


function loginn($user1){
    
}
function updateArt(){
    
}
function addArt(){
    
}
function deleteArt(){
    
}
function showUpdateArt(){
    
}
function logout($user1){
    
}
























?>
