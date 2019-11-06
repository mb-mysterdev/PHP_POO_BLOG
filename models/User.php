<?php

require_once 'Model.php';

require_once 'UserManager.php';

class User extends UserManager
{
    public function registration()
    {
        $userManager = new UserManager;
        $req = $this->database->prepare("INSERT INTO users(last_name,first_name, pseudo, email,password_user) VALUES(:last_name,:first_name,:pseudo,:email,:password_user)");
        
        $req->execute(array(
        'last_name'     => $userManager->getPost("last_name"),
        'first_name'    => $userManager->getPost("first_name"),
        'pseudo'        => $userManager->getPost("pseudo"),
        'email'         => $userManager->getPost("email"),
        'password_user' => $userManager->getPost("password_user")

    ));

    }

    public function login()
    {
        $classModel = new Model;
        if(isset($_POST['submit'])){
            //la variable erreur vaut null par défaut
            $erreur = null;
            //on convertit chaque champ en variable avec la fonction extract()
            extract($_POST);
            
            //on verifie les champs vides
            if(empty($pseudo) || empty($password = $_POST['password_user'])){
                $erreur = '<p class = "alert alert-danger">Veuillez remplir tous les champs</p>';
            }
            
            //on verifie si le pseudo existe déja
            $sql = $this->database->query("SELECT * FROM users WHERE pseudo = '$pseudo'") or die('Erreur de la requête SQL');
            $total = $sql->rowCount();
            if($total != 1){
                //ce membre n'existe pas
                $erreur = '<p class = "alert">Ce pseudo n\'existe pas dans notre base de données !</p>';
            }
            else{
                /*
                    on verifie si le mot de passe est correct
                    tout d'abord pour comparer le mot de passe avec celui dans la table 
                    il faut le crypter avant en utilisant la fonction md5() 
                */
                $password = ($password);
                //recuperation des données dans la table de l'utilisateur
                //ca remplace mysql_feetch_array 
                while ($resultat = $sql->fetch()){
                    
                if($resultat['password_user'] !== $password){
                    //le mot de passe est incorrect
                    $erreur = '<p class = "alert">Votre mot de passe est incorrect !</p>';
                }
                else{
                    //tout est bon on enregistre les données de l'utilisateur en session
                    $_SESSION['pseudo']     = $pseudo;
                    $_SESSION['id']         = $resultat['id'];
                    $_SESSION['role']       = $resultat['role'];
                    $_SESSION['validate']   = $resultat['validate'];

                    //on le redirige sur la page d'accueil
                     //$classModel->session('admin/index.php');
                    }  
                 }
            }
        }   

    }

    public function validateUser()
    {        
        $req = $this->database->prepare("UPDATE users SET validate = :validate WHERE id = :id");
        $reqResult = $req->execute(
            [
                'validate'=> isset($_POST["validate"]) ? $_POST["validate"] : NULL,
                'id'        => $_GET['id']
            ]);  
        if($reqResult == 1)
        {
            header('location: show_membres.php');
        }
    }

    public function validateAdmin()
    {        
        $req = $this->database->prepare("UPDATE users SET role = :role WHERE id = :id");
        $reqResult = $req->execute(
            [
                'role'=> isset($_POST["role"]) ? $_POST["role"] : NULL,
                'id'        => $_GET['id']
            ]);  
        if($reqResult == 1)
        {
            header('location: show_membres.php');
        }
    }


}
$user = new User;
$classModel = new Model;
$userManager = new UserManager;
$membres = $userManager->findAll('users', 'ORDER BY date DESC');

?>