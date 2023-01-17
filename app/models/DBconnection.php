<?php
class DBconnection{
    public static function getConnection(){
        $db = new PDO('mysql:host=localhost;dbname=planet.dev','root','');
        return $db;
    }
}
?>