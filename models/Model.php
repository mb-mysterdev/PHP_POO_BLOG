<?php

require_once 'Database.php';


class Model
{
    protected $database;

    public function __construct()
    {
        $this->database = \Database::getPdo();
    }

    public function input(string $name,string $placeholder = NULL,string $type = "text",string $value = NULL,$text = NULL,string $option = NULL,string $class = NULL)
    {
        return "<input type='$type' name='$name' class='form-control' placeholder='$placeholder' value='$value' class='$class' required $option>$text";
    }

    public function submit($class = '',$value = 'Envoyer',string $name = NULL)
    {
        return "<input name='$name' type='submit' value='$value' class='$class'>";
    }


    public function getPost(string $name)
    {
        return $name = isset($_POST["$name"]) ? $_POST["$name"] : NULL; 
    }

    public function findAll(string $table, $orderBy = NULL) : array
    {
        $this->table = $table;
        
        $this->orderBy = $orderBy;

        $resultats = $this->database->prepare("SELECT * FROM {$this->table} {$this->orderBy}"); 
        
        $resultats->execute();

        $all = $resultats->fetchAll();

        return $all;
    } 

    public function find(string $table, int $id)  
    {
        $this->table = $table;

        $query = $this->database->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        
        $query->execute(['id' => $id]);
       
        $item = $query->fetch();

        return $item;
    }

    public function validateForm($table,$ligne,$name1,$name2)
    {
        $this->table = $table;

        $model = new Model;

        $req = $this->database->prepare("SELECT * FROM {$this->table} WHERE id =" .  $_GET['id']);
       
        $req->execute();

        $item = $req->fetch();

        if($item[$ligne] == 0 )
        {
            echo $model->input($ligne,'','radio','1',$name1);
            
            echo $model->input($ligne,'','radio','0',$name2, 'checked');    
        }
        else 
        {
            echo $model->input($ligne,'','radio','1',$name1,'checked');
            
            echo $model->input($ligne,'','radio','0',$name2);    
        }

        echo $model->submit();
    }

    public function count($table, $options = NULL)
    {        
        $this->table = $table;

        $this->options = $options;

        $req = $this->database->prepare("SELECT count(*) as Number FROM {$this->table} $options");
       
        $req->execute();

        $resultats = $req->fetch();

        return $resultats['Number'];
        
    }

    public function session($link)
    {
        if(!isset($_SESSION['id']) || !isset($_SESSION['pseudo'])){
            //l'utilisateur n'est pas connecté on le redirige sur la page de connexion
            header("location:$link");
        }
    }

    public function sessionAdmin()
    {
        if($_SESSION['role'] == 1 && $_SESSION['validate'] == 1){ 
            header("location:admin/index.php");
        }else
        {
            header("location:index.php");
        }
    }


    
}
$classModel = new Model;
//var_dump($class->findAll('comments', 'ORDER BY date DESC'));