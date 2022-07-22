<?php 
require_once('../../models/Admin.class.php');
require_once('../../models/Security.class.php');
require_once('../../models/Utility.class.php');
session_start();

if(isset($_POST['logout'])) 
{
    unset($_SESSION['admin']);
    unset($_SESSION['message']);

    header("Location: ../../accueil"); 
}
?>