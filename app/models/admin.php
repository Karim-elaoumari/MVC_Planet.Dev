
<?php
class admin extends user{
    public function update($data,$date,$id){
        $db = self::getConnection();
        $stmt = $db->prepare('UPDATE jokes SET value=:value,datetime=:datetime WHERE id=:id');
        $stmt->bindParam(":value",$data);
        $stmt->bindParam(":datetime",$date);
        $stmt->bindParam(":id",$id);
        $res = $stmt->execute();
        if($res==true){qdsdq
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
    public  function viewArticles(){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT * FROM jokes ORDER BY datetime DESC ');
        $stmt->execute();
        return $stmt->fetchAll();
    }

  
    
}