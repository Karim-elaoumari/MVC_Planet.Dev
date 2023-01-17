
<?php
class user extends DBconnection{
  
    public function login($email,$password){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT * FROM users where email=:email and password=:password');
        $stmt->execute(array(":email"=>$email,":password"=>$password));
        $res=   $stmt->fetch();
        return $res;
    }
    public function signup(){
    }
}