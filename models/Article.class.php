<?php
require_once('Db.class.php');

class Article extends Db {
    private $id;
    private $email;
    private $password;
    private $firstname;
    private $surname;

    
    public function getUser()
    {
        // $this->email = $email;

        $query = $this->db->prepare('SELECT * FROM user');
        $query->execute();

        $resEmail = $query->fetchAll(PDO::FETCH_ASSOC);

        return $resEmail;
        ;
    }
}
