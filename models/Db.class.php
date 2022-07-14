<?php

abstract class Db {
    
    protected $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=registre_cancers;charset=utf8', 'root', '');

            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Connexion réussie';
        }
        catch (PDOException $e)
        {
            die('Erreur : ' . $e->getMessage());
        } 
        
        // // Fermeture de la connexion
        // $this->db = null;
    }  
}

?>

