<?php

require_once 'Model.php';


class CommentManager extends Model
{
    public function insertFormComment()
    {
        $model = new Model;
        echo $model->input('name');
        echo $model->input('message');
        echo $model->input('article_id',NULL,'hidden',$_GET['id']);
        echo $model->submit();
    }


    public function validateFormComment($id)
    {
        $model = new Model;

        $req = $this->database->prepare("SELECT * FROM comments WHERE id = :id");
       
        $req->execute([
            'id' => $id
        ]);

        $item = $req->fetch();

        if($item['validate'] == 0 )
        {
            echo $model->input("validate",'','radio','1','Valider');
            
            echo $model->input("validate",'','radio','0','En attente', 'checked');    
        }
        else 
        {
            echo $model->input("validate",'','radio','1','Valider','checked');
            
            echo $model->input("validate",'','radio','0','En attente');    
        }

        echo $model->submit();
    }
}

?>

