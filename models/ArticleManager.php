<?php

require_once 'Model.php';


class ArticleManager extends Model
{

    public function insertFormArticle()
    {
        $model = new Model;

        echo $model->input("title");

        echo $model->input("content");

        echo $model->input("chapo");

        echo $model->input("author");

        echo $model->submit();
    }

    public function findUpdate(string $table, int $id)  
    {
        
        $query = $this->database->prepare("SELECT * FROM $table WHERE id = :id");
        
        $query->execute(['id' => $id]);
       
        $item = $query->fetch();

        return $item;
    }

    public function getValue($name,$type = 'text',$class = NULL)
    {
        $articleManager = new ArticleManager;
        
        $value = $articleManager->findUpdate('articles',$_GET['id']);
        
        return "<input type='$type' name='$name' class='$class' value='$value[$name]' required>";
    }

    public function updateForm()
    {
        $articleManager = new ArticleManager;
        echo "<label>Titre : </label>";
        echo $articleManager->getValue("title",NULL,'form-control');
        echo "<br />";

        echo "<label>Chapo : </label>";
        echo $articleManager->getValue("chapo",NULL,'form-control');
        echo "<br />";

        echo "<label>Auteur : </label>";
        echo $articleManager->getValue("author",NULL,'form-control');
        echo "<br />";

        echo "<label>Contenu : </label>";
        echo $articleManager->getValue("content",NULL,'form-control');
        echo "<br />";

        echo $articleManager->submit('btn btn-primary','Sauvegarder');
    }
}
?>
