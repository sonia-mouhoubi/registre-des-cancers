<?php 
require_once('../../models/Admin.class.php');
require_once('../../models/Security.class.php');
require_once('../../models/Utility.class.php');
session_start();

if(isset($_SESSION['admin'])) 
{
    // Récupération des infos du user connecté (par son ID).
    // $admin = new Admin;
    // $infosAdmin = $admin->getInfosAdmin($_SESSION['admin']['id']);

    if(isset($_POST['updateInfosProfil'])) 
    {
        if(isset($_POST['surname']) && isset($_POST['firstname']) && isset($_POST['email']))
        {
            $security = new Security; // Permet de nettoyer le POST
            $utility = new Utility; // Permet de verifier le format attendu

            $surname = $security->validData($utility->strtolower($_POST['surname']));
            $firstname = $security->validData($utility->strtolower($_POST['firstname']));
            $email = $security->validData($utility->strtolower($_POST['email'])); 

            $admin = new Admin;
            $resMail = $admin->getAdminByEmail($mail);


        if(!empty($_POST['surname']) && !empty($_POST['firstname']) && !empty($_POST['email']))
        {
            if(!empty($surname) AND $surname != $infosAdmin['surname']) 
            {
                $admin->updateSurnameAdmin($surname, $_SESSION['admin']['id']);
                $_SESSION['message'] = "Votre compte a bien étè modifié !";
                header("Location: ../../admin-profil");
            }

            if(!empty($firstname) AND $firstname != $firstname['firstname']) 
            {
                $admin->updateFirstnameAdmin($firstname, $_SESSION['admin']['id']);
                $_SESSION['message'] = "Votre compte a bien étè modifié !";
                header("Location: ../../admin-profil");
            }

            if(!empty($email) AND $email != $email['email']) 
            {
                $admin->updateEmailAdmin($email, $_SESSION['admin']['id']);
                $_SESSION['message'] = "Votre compte a bien étè modifié !";
                header("Location: ../../admin-profil");
            }
        }
        else
        {
            $_SESSION['message'] = 'Tous les champs doivent être remplis.';
            header("Location: ../../admin-profil");
        } 

        }
    }

    // if(isset($_POST['updatePassword'])) 
    // {
    //     if(isset($_POST['password']))
    //     {
    //         $password = $_POST['password'];

    //         if(!empty($password)) {

    //             $updatePassword = new Admin;
    //             $updatePassword->updatePasswordAdmin($password);
    //             echo 'modif reussie';

    //         }
    //     }
    // }
}
?>