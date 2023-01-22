
<?php
class article extends DBconnection{
 
    public function update($data,$date,$id){
        $db = self::getConnection();
        $stmt = $db->prepare('UPDATE jokes SET value=:value,datetime=:datetime WHERE id=:id');
        $stmt->bindParam(":value",$data);
        $stmt->bindParam(":datetime",$date);
        $stmt->bindParam(":id",$id);
        $res = $stmt->execute();
        if($res==true){
            return true;
        }
    }
    public function getOne($id){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT * FROM jokes where id=:id');
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function delete($id){
        $db = self::getConnection();
        $stmt = $db->prepare('DELETE FROM jokes WHERE id=:id');
        $stmt->bindParam(":id",$id);
        $res  =$stmt->execute();
        if($res){
            return true;
        }
    }
    public function add($value,$datetime){
        $db = self::getConnection();
        $stmt = $db->prepare('INSERT INTO jokes (value, datetime) VALUES (:value,:datetime)');
        $stmt->bindParam(":value",$value);
        $stmt->bindParam(":datetime",$datetime);
        
        if($stmt->execute()){
            return true;
        }
    }
    public  function getAll(){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT a.id as article_id,a.title as article_title,a.content as article_content,cat.name as categorie, au.name as author_name FROM articles a inner join users au ON au.id=a.author_id inner join categories cat ON a.categorie_id =cat.id');
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }
    public function searchArt($value){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT a.id as article_id,a.title as article_title,a.content as article_content,cat.name as categorie, au.name as author_name FROM articles a inner join users au ON au.id=a.author_id inner join categories cat ON a.categorie_id =cat.id where a.title LIKE :value OR  a.content LIKE :value');
        $stmt->execute(array(":value"=>'%'.$value.'%'));
        $res = $stmt->fetchAll();
        return $res;
    }
    public function filterArt($value){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT a.id as article_id,a.title as article_title,a.content as article_content,cat.name as categorie, au.name as author_name FROM articles a inner join users au ON au.id=a.author_id inner join categories cat ON a.categorie_id =cat.id where cat.name like :value');
        $stmt->execute(array(":value"=>$value));
        $res = $stmt->fetchAll();
        return $res;
    }
}