
<?php
class user extends DBconnection{
  
    public function login(){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT * FROM jokes ORDER BY datetime DESC ');
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function signup(){
    }
}