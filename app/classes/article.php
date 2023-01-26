<?php

class article{
    private $id;
    private $title;
    private $content;
    private $categorie;
    private $cover;
    public function __construct($id,$title,$content,$categorie,$cover){
        $this->id       = $id;
        $this->title     = $title;
        $this->content    = $content;
        $this->categorie = $categorie;
        $this->cover = $cover;
    }
    public function __get($var){
        return $this->$var;
    }
    public function __set($var,$val){
        $this->$var = $val;
    }
    public function __destruct(){
        unset($this->id);
        unset($this->title);
        unset($this->content);
        unset($this->categorie);
        unset($this->cover);
    }
}