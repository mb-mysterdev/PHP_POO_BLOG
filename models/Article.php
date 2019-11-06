<?php

require_once 'Model.php';

require_once 'ArticleManager.php';

require_once 'Comment.php';

class Article extends Model
{

    public function insert(Model $model)
    {
        // Pour l'ajout d'un article
        
        $req = $this->database->prepare("INSERT INTO articles(title,chapo, content, author) VALUES(:title,:chapo,:content,:author)");
        
        $req->execute(array(
        'title'     => $model->getPost("title"),
        'chapo'     => $model->getPost("chapo"),
        'content'   => $model->getPost("content"),
        'author'    => $model->getPost("author")
        ));
    }


    public function update()
    {
        $req = $this->database->prepare("UPDATE articles SET title = :title, chapo = :chapo , content = :content, author = :author, modifiedAt = :modifiedAt  WHERE id= :id LIMIT 1");
        $reqResult = $req->execute(
            [
                'title'     => isset($_POST["title"]) ? $_POST["title"] : NULL,
                'chapo'     => isset($_POST["chapo"]) ? $_POST["chapo"] : NULL,
                'content'   => isset($_POST["content"]) ? $_POST["content"] : NULL,
                'author'    => isset($_POST["author"]) ? $_POST["author"] : NULL,
                'modifiedAt'=> isset($_POST["modifiedAt"]) ? $_POST["modifiedAt"] : NULL,
                'id'        => $_GET['id']
            ]);    
            if ($reqResult == 1)
            {
                header('location: show_articles.php');
            }
    }

    public function delete(int $id)
    {
        return $req = $this->database->exec("DELETE FROM articles WHERE id = $id LIMIT 1");
    }

}

$classArticle = new Article;
$classModel = new Model;
$classArticleManager = new ArticleManager;

// Appeler l'article selon son id
// $article = $class->find($_GET['id']);

// Faut appeler insertForm dans des balises form
// echo ((new ArticleManager)->insertForm());
// echo $class->insert(new ArticleManager);

// Faut appeler l'execution avant le form sinon ca renvoi les anciennes valeurs 
// echo $class->update();
// echo $articleManager->updateForm();

// Il ne faut pas hesiter a utiliser errorInfo sur les requetes sql pour comprendre d'ou viens le probleme 

