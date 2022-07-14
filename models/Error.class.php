<?php 

class Erreur
{
    private $message;

    public function erreur()
    {
        $_SESSION['message'] = "";

        if(isset($_SESSION['message']))
        {
            $_SESSION['message'] = '';
        }
        else {
            unset($_SESSION['message']);
        }
    }
}

?>