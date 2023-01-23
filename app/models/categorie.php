

<?php

class categorie extends DBconnection{

    public function getCategories(){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT * from categories');
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;

       
    }

}