<?php 
require_once('../../models/User.class.php');
session_start();

if(isset($_POST['updatePassword'])) 
{
    if(isset($_POST['password']))
    {
        $password = $_POST['password'];

        if(!empty($password)) {

            $updatePassword = new User;
            $updatePassword->updatePasswordUser($password);
            echo 'modif reussie';

        }
    }
}

?>