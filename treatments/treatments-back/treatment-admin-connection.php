<?php 
require_once('../../models/User.class.php');
require_once('../../models/Security.class.php');
require_once('../../models/Utility.class.php');
session_start();

if(isset($_POST['connection'])) 
{
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $security = new Security; 
        $utility = new Utility; 

        $email = $security->validData($utility->strtolower($_POST['email'])); // Permet de nettoyer le POST
        $password = $security->validData($_POST['password']); // Permet de verifier le format attendu

        if(!empty($email) && !empty($password)) 
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $connectionUser = new User;
                $res = $connectionUser->getUser($email);

                if(!empty($res) && password_verify($password, $res['password']))
                {
                    $_SESSION['user']['id'] = $res['id_user']; 
                    $_SESSION['user']['mail'] = $res['email'];
                    $_SESSION['user']['firstName'] = $res['firstname'];
                    
                    $_SESSION['message'] = 'Connexion réussie.';
                    header("Location: ../../admin-profil"); 
                }
                else 
                {
                    $_SESSION['message'] = 'Erreur de login ou de mot de passe.';
                    header("Location: ../../admin-connexion"); 
                }
            }
            else {
                $_SESSION['message'] = 'Le format de l\'email n\'est pas correct.';
                header("Location: ../../admin-connexion"); 
            }   
        }
        else 
        {
            $_SESSION['message'] = 'Tous les champs doivent être remplis.';
            header("Location: ../../admin-connexion"); 
        }
    }
}
?>