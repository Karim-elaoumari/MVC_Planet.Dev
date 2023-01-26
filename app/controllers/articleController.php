<?php
class articleController{
    public $articleModel;
    public function __construct(){
        $this->articleModel = new articleModel;
    }
    public function addArt($title,$content,$categorie,$cover){
                for ($i = 0; $i <count($title); $i++){
                        $filename   = uniqid() . "-" . time();
                        $extension  = pathinfo( $cover['name'][$i], PATHINFO_EXTENSION); // jpg
                        $basename   = "article-".$filename . "." . $extension;
                        $target             = "../public/assets/img/".$basename;
                        $allowed='png,jpg,PNG,JPG,jpeg,JPEG';
                        $extension_allowed=  explode(',', $allowed);
                        if(!in_array($extension, $extension_allowed)){
                               
                                $_SESSION['danger'] = 'File type is not allowed (png, jpg) !';
                        }else{  
                                $sourcePath         = $cover['tmp_name'][$i];
                                move_uploaded_file($sourcePath,$target);
                        }
                        $author=$_SESSION["id"];
                        $res = $this->articleModel->add($title[$i],$content[$i],$author,$categorie[$i],$basename);
                        if($res)  $_SESSION['seccess'] = "article Added  seccessfuly";
                        else     $_SESSION['seccess'] = "article Not Added";
                  }
    }
    public function deleteArticles($id){
         $res = $this->articleModel->delete($id);
         if($res){
                $_SESSION['seccess'] = "article Deleted seccessfuly";
         }
         else{
                $_SESSION['error'] = "article Not Deleted Try again";
         }
    }
    public function updateArt($id,$title,$content,$cat_id,$cover,$oldCover){
        if($cover["full_path"]==''){
                $basename  = $oldCover;
        }
        
        else{
                $filename   = uniqid() ."-" .time();
                $extension  = pathinfo($cover["full_path"], PATHINFO_EXTENSION);
                $basename   = "article-".$filename .".".$extension;
                $target             = "../public/assets/img/".$basename;
                $allowed='png,jpg,PNG,JPG,jpeg,JPEG';
                $extension_allowed=  explode(',', $allowed);
                if(!in_array($extension, $extension_allowed)){
                        $_SESSION['danger'] = 'File type is not allowed (png, jpg) !';
                }else{  
                        $sourcePath         = $cover['tmp_name'];
                        move_uploaded_file($sourcePath,$target);
                }
        }
        $categorie = new categorie($cat_id,null);
        $article = new article($id,$title,$content,$categorie,$basename);
        $res = $this->articleModel->update($article);
        if($res){
                $_SESSION['seccess'] = "article updated seccessfuly";
        }
        else{
                $_SESSION['error'] = "article not updated";
        }
        
    }
}