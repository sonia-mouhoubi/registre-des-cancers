<?php 
require_once('models/Admin.class.php');
session_start();


if(isset($_SESSION['admin'])) 
{
    // Récupération des infos du user connecté (par son ID).
    $admin = new Admin;
    $infosAdmin = $admin->getInfosAdmin($_SESSION['admin']['id']);
    var_dump($infosAdmin['email']);

}
else
{
    header("Location: accueil"); 
}
?>