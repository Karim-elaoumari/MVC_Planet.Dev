
<?php
class article extends categorie{
    public function update($id,$title,$content,$cat_id,$cover){
        $db = self::getConnection();
        $stmt = $db->prepare('UPDATE articles SET title=:title,content=:content,categorie_id=:cat_id,cover=:cover WHERE id=:id');
        $stmt->bindParam(":title",$title);
        $stmt->bindParam(":content",$content);
        $stmt->bindParam(":cat_id",$cat_id);
        $stmt->bindParam(":cover",$cover);
        $stmt->bindParam(":id",$id);
        $res = $stmt->execute();
        if($res==true){
            return true;
        }
    }
    public function delete($id){
        $db = self::getConnection();
        $stmt = $db->prepare('DELETE FROM articles WHERE id=:id');
        $stmt->bindParam(":id",$id);
        $res  =$stmt->execute();
        if($res){
            return true;
        }
    }
    public function add($title,$content,$author_id,$categorie,$cover){
        $db = self::getConnection();
        $stmt = $db->prepare('INSERT INTO articles (title, content, author_id, categorie_id, cover) VALUES (:title,:content,:author_id,:categorie_id,:cover)');
        $stmt->bindParam(":title",$title);
        $stmt->bindParam(":content",$content, PDO::PARAM_STR);
        $stmt->bindParam(":author_id",$author_id);
        $stmt->bindParam(":categorie_id",$categorie);
        $stmt->bindParam(":cover",$cover);
        if($stmt->execute()){
            return true;
        }
    }
    public  function getAll(){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT a.id as article_id,a.title as article_title,a.content as article_content,a.cover as article_cover,cat.name as categorie ,cat.id as categorie_id , au.name as author_name FROM articles a inner join users au ON au.id=a.author_id inner join categories cat ON a.categorie_id =cat.id');
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }
    public  function getOneArt($id){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT a.id as article_id,a.title as article_title,a.content as article_content,a.cover as article_cover,cat.name as categorie, cat.id as categorie_id, au.name as author_name FROM articles a inner join users au ON au.id=a.author_id inner join categories cat ON a.categorie_id =cat.id where a.id =?');
        $stmt->execute([$id]);
        $res = $stmt->fetch();
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
    public  function getNewArt(){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT a.id as article_id,a.title as article_title,a.content as article_content,a.cover as article_cover,cat.name as categorie ,cat.id as categorie_id , au.name as author_name FROM articles a inner join users au ON au.id=a.author_id inner join categories cat ON a.categorie_id =cat.id ORDER BY a.id DESC LIMIT 5');
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }
}