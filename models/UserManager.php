<?php

require_once 'Model.php';

class UserManager extends Model
{

    public function loginFormUser()
    {   
        $model = new Model;

        echo $model->input('pseudo','Pseudo');

        echo $model->input('password_user','Mot de passe');

        echo $model->submit("btn btn-lg btn-primary btn-block",'Connexion','submit');

    }

    

    public function registrationFormUser()
    {
        $model = new Model;

        echo $model->input("last_name", 'Nom de Famille');

        echo $model->input("first_name", 'Prénom');

        echo $model->input("pseudo",'Pseudo');

        echo $model->input("email",'Email');

        echo $model->input("password_user",'Mot de passe','password');

        echo $model->submit("btn btn-lg btn-primary btn-block",'Crée un compte');
    }

    public function roleOfUser()
    {
        $user = new User;
    
            $model = new Model;
    
            $req = $this->database->prepare("SELECT * FROM users WHERE id =" .  $_GET['id']);
           
            $req->execute();
    
            $item = $req->fetch();
    
            if($item['role'] == 0 )
            {
                echo $model->input("role",'','radio','1','Administrateur');
                
                echo $model->input("role",'','radio','0','Utilisateur', 'checked');    
            }
            else 
            {
                echo $model->input("role",'','radio','1','Administrateur','checked');
                
                echo $model->input("role",'','radio','0','Utilisateur');    
            }
    
            echo $model->submit();        
    }

}

