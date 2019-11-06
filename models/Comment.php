<?php

require_once 'Model.php';

require_once 'CommentManager.php';

class Comment extends Model
{

    public function show()
    {
        $req = $this->database->prepare("SELECT * FROM comments WHERE article_id = :article_id ORDER BY date DESC");
  
        $req->execute(['article_id' => $_GET['id']]);
       
        $item = $req->fetchAll(); 
        
        return $item;
    }

    public function showAll()
    {
        $req = $this->database->prepare("SELECT * FROM comments ORDER BY date DESC LIMIT 5");
  
        $req->execute();
       
        $item = $req->fetchAll(); 
        
        return $item;
    }

    public function insert()
    {
        $model = new Model;
        
        $req = $this->database->prepare("INSERT INTO comments(name,message,article_id) VALUES(:name,:message,:article_id)");
        
        $req->execute(array(
        'name'        => $model->getPost("name"),
        'message'     => $model->getPost("message"),
        'article_id'     => $_GET['id']
	));
    }

    public function validateComment($id)
    {        
        $req = $this->database->prepare("UPDATE comments SET validate = :validate WHERE id = :id LIMIT 1");
        $req->execute(
            [
                'validate' => isset($_POST["validate"]) ? $_POST["validate"] : NULL,
                'id'       => isset($_GET["id"]) ? $_GET["id"] : NULL,
            ]);  
    }
}

    $classModel = new Model;
  $classComment = new Comment;
 $classCommentManager = new CommentManager;

/*$a =  $classComment->show();

foreach($a as $s)
{
    echo $s['name'] . ' ';
} */

?>
