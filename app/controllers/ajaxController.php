<?php

class ajaxController{
    public $articleModel;
    public function __construct(){
        $this->articleModel = new articleModel;
    }
    public function searchArt($value){
        $res = $this->articleModel->searchArt($value);
        $json = json_encode($res);
        echo $json;
    }
    public function filterArt($value){
        if($value=="default"){
            $res =  $this->articleModel->searchArt("");
        }
        else{
            $res = $this->articleModel->filterArt($value);
        }
        $json = json_encode($res);
        echo $json;
       
    }
    public function getOneArt($id){
        $res = $this->articleModel->getOneArt($id);
        $json = json_encode($res);
        echo $json;

    }
}