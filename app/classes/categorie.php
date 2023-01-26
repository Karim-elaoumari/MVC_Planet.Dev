<?php

class categorie{
    private $id;
    private $name;
    public function __construct($id=null,$name=null){
        $this->id       = $id;
        $this->name     = $name;
    }
    public function __get($var){
        return $this->$var;
    }
    public function __set($var,$val){
        $this->$var = $val;
    }
    public function __destruct(){
        unset($this->id);
        unset($this->name);
    }
}