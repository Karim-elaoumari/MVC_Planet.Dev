
<?php
class articleModel extends DBconnection{
    public function update($article){
        $db = self::getConnection();
        $stmt = $db->prepare('UPDATE articles SET title=?,content=?,categorie_id=?,cover=? WHERE id=?');
        $res = $stmt->execute([$article->title,$article->content,$article->categorie->id,$article->cover,$article->id]);
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
        $stmt = $db->prepare('INSERT INTO articles (title, content, categorie_id, cover) VALUES (:title,:content,:categorie_id,:cover)');
        $stmt->bindParam(":title",$title);
        $stmt->bindParam(":content",$content, PDO::PARAM_STR);
        $stmt->bindParam(":categorie_id",$categorie);
        $stmt->bindParam(":cover",$cover);
        if($stmt->execute()){
            return true;
        }
    }
    public  function getAll(){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT a.id as article_id,a.title as article_title,a.content as article_content,a.cover as article_cover,cat.name as categorie ,cat.id as categorie_id  FROM articles a inner join categories cat ON a.categorie_id =cat.id');
        $stmt->execute();
        $articles = array();
        while( $res=   $stmt->fetch(PDO::FETCH_OBJ)){
            $categorie = new categorie($res->categorie_id,$res->categorie);
            $article = new article($res->article_id,$res->article_title,$res->article_content,$categorie,$res->article_cover);
            $articles[]= $article;
        }
        return $articles;
    }
    public  function getOneArt($id){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT a.id as article_id,a.title as article_title,a.content as article_content,a.cover as article_cover,cat.name as categorie, cat.id as categorie_id  FROM articles a  inner join categories cat ON a.categorie_id =cat.id where a.id =?');
        $stmt->execute([$id]);
        $res = $stmt->fetch();
        return $res;
    }
    public function searchArt($value){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT a.id as article_id,a.title as article_title,a.content as article_content,cat.name as categorie FROM articles a  inner join categories cat ON a.categorie_id =cat.id where a.title LIKE :value OR  a.content LIKE :value');
        $stmt->execute(array(":value"=>'%'.$value.'%'));
        $res = $stmt->fetchAll();
        return $res;
    }
    public function filterArt($value){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT a.id as article_id,a.title as article_title,a.content as article_content,cat.name as categorie FROM articles a  inner join categories cat ON a.categorie_id =cat.id where cat.name like :value');
        $stmt->execute(array(":value"=>$value));
        $res = $stmt->fetchAll();
        return $res;
    }
    public  function getNewArt(){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT a.id as article_id,a.title as article_title,a.content as article_content,a.cover as article_cover,cat.name as categorie ,cat.id as categorie_id  FROM articles a  inner join categories cat ON a.categorie_id =cat.id ORDER BY a.id DESC LIMIT 5');
        $stmt->execute();
        $articles = array();
        while( $res=   $stmt->fetch(PDO::FETCH_OBJ)){
            $categorie = new categorie($res->categorie_id,$res->categorie);
            $article = new article($res->article_id,$res->article_title,$res->article_content,$categorie,$res->article_cover);
            $articles[]= $article;
        }
        return $articles;
    }
    public function getCategories(){
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT * from categories');
        $stmt->execute();
        $categories= array();
        while( $res=   $stmt->fetch(PDO::FETCH_OBJ)){
            $categorie = new categorie($res->id,$res->name);
            $categories[]= $categorie;
        }
        return $categories;

    }
}