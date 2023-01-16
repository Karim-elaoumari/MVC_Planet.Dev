<?php
include_once '../autoload.php';
$admin1 = new adminController;
$home1 = new homeController;
$user1 = new userController;
$errorpages = new errorpagesController;


$pages = ['home',"admin","login"];
$admin_pages = ['dashboard','articals','users',"autors","addArticles"];


if(isset($_POST["login"]))           loginn();
if(isset($_POST["updateArt"]))       updateArt();
if(isset($_POST["addArt"]))          addArt();
if(isset($_POST["deleteArt"]))       deleteArt();
if(isset($_POST["showUpdateArt"]))   showUpdateArt();
if(isset($_POST["logout"]))          logout();



if(isset($_GET['page'])){ 

    if($_GET['page']==$pages[1]){
            if(isset($_GET['action'])){
                        if($_GET['action']==$admin_pages[1]){
                            $admin1->showArticals();
                        } 
                        else if($_GET['action']==$admin_pages[2]){
                            $admin1->showUsers();
                        } 
                        else if($_GET['action']==$admin_pages[3]){
                            $admin1->showAutors();
                        }
                        else if($_GET['action']==$admin_pages[4]){
                            $admin1->showAddArticals();
                        }
                        else if($_GET['action']==$admin_pages[0]){
                            $admin1->showDashboard();
                        }
                        else{
                            $errorpages->error404();
                        }
            }
            else{
                header('location:admin/dashboard');
            }
    }
    else if($_GET['page']==$pages[2]){
        $user1->login();
    }
    else if($_GET['page']==$pages[1]){
        $home1->index();
    }
    else{
        $errorpages->error404();
    }
}else{
    $home1->index();
}


function loginn(){

}
function updateArt(){
    
}
function addArt(){
    
}
function deleteArt(){
    
}
function showUpdateArt(){
    
}
function logout(){
    
}























if (isset($_POST['title']) && isset($_POST['content'])) {
    
    $titles = $_POST['title'];
    $contents = $_POST['content'];
    $speciality = $_POST["speciality"];
    $articles = array();
        for ($i = 0; $i <count($titles); $i++){
            $articles[] = array(
              "title" => $titles[$i],
              "content" => $contents[$i],
              "speciality" => $speciality[$i]
            );
          }
    echo '<pre>';
    var_dump($articles);
    echo '</pre>';
  }
?>
