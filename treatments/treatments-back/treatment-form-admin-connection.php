<?php 
require_once('../../models/Admin.class.php');
require_once('../../models/Security.class.php');
require_once('../../models/Utility.class.php');
session_start();

if(isset($_POST['connection'])) 
{
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $security = new Security; // Permet de nettoyer le POST
        $utility = new Utility; // Permet de verifier le format attendu

        $email = $security->validData($utility->strtolower($_POST['email'])); 
        $password = $security->validData($_POST['password']); 

        if(!empty($email) && !empty($password)) 
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $connectionAdmin = new Admin;
                $res = $connectionAdmin->getAdminByEmail($email);

                if(!empty($res) && password_verify($password, $res['password']))
                {
                    $_SESSION['admin']['id'] = $res['id_admin']; 
                    $_SESSION['admin']['email'] = $res['email'];
                    $_SESSION['admin']['firstName'] = $res['firstname'];
                    
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