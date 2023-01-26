<?php
class admin{
    private $id;
    private $email;
    private $name;
    private $password;
    public function __construct($id=null,$name=null,$email,$password){
        $this->id       = $id;
        $this->name     = $name;
        $this->email    = $email;
        $this->password = $password;
    }
    public function __get($var){
        return $this->$var;
    }
    public function __set($var,$val){
        $this->$var = $val;
    }
    public function __destruct(){
        unset($this->id);
        unset($this->email);
        unset($this->name);
        unset($this->password);
    }
}