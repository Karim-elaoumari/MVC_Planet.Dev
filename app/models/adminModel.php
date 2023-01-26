
<?php
class adminModel extends DBconnection{
    public function login($email,$password){
        $db = self::getConnection();
       
        $stmt = $db->prepare('SELECT * FROM admins where email=:email and password=:password');
        $stmt->execute(array(":email"=>$email,":password"=>$password));
        $res=   $stmt->fetch(PDO::FETCH_OBJ);
        
        $admin1 = new admin($res->id,$res->name,$res->email,$res->password);
        return $admin1;
    }
    public function signup(){
    }
    public function getAdmins(){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT * from admins');
        $stmt->execute();
        $admins = array();
        while( $res=   $stmt->fetch(PDO::FETCH_OBJ)){
            $admin = new admin($res->id,$res->name,$res->email,$res->password);
            $admins[]= $admin;
        }
        return $admins;

    }

}