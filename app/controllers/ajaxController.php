<?php
class ajaxController{
    public $article;
    public function __construct(){
        $this->article = new article;
    }
    public function searchArt($value){
        $res = $this->article->searchArt($value);
        $json = json_encode($res);
        echo $json;
    }
}