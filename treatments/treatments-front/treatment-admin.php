<?php 
require_once('../../models/User.class.php');
session_start();

if(isset($_POST['connection'])) 
{
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if(!empty($email) && !empty($password)) 
        {
            $connectionUser = new User;
            $res = $connectionUser->getUser($email);

            if(!empty($res) && password_verify($password, $res['password']))
            {
                $_SESSION['user']['id'] = $res['id_user'];
                    
                $_SESSION['user']['mail'] = $res['email']
                ;
                $_SESSION['user']['firstName'] = $res['firstname'];

                $_SESSION['message'] = 'Connexion réussie.';

                header("Location: ../../admin"); 
            }
            else 
            {
                $_SESSION['message'] = 'Erreur de login ou de mot de passe.';
                header("Location: ../../admin"); 
            }
        }
        else 
        {
            $_SESSION['message'] = 'Tous les champs doivent être remplis.';
            header("Location: ../../admin"); 
        }
    }
}
?>