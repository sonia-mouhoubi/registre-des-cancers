<?php
require_once('Db.class.php');

class User extends Db {
    private $id;
    private $email;
    private $password;
    private $firstname;
    private $surname;


    public function getUser($email) 
    {
        $this->email = $email;

        $query = $this->db->prepare('SELECT * FROM user WHERE email = ?');
        $query->execute([$email]);

        $res = $query->fetch(PDO::FETCH_ASSOC);

        return $res;
    }

    public function updatePasswordUser($password) {  
        $this->password = $password;

        // Hachage du mot de passe
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); 
        $req = $this->db->prepare("UPDATE user SET password=? WHERE id_user = 1");
        $req->execute([$hashed_password]);
    }
}
