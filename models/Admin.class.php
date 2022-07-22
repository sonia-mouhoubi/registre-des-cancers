<?php
require_once('Db.class.php');

class Admin extends Db {
    private $id;
    private $email;
    private $password;
    private $firstname;
    private $surname;

// READ
    public function getAdminByEmail($email) 
    {
        $this->email = $email;

        $query = $this->db->prepare('SELECT * FROM admin WHERE email = ?');
        $query->execute([$email]);
        $res = $query->fetch(PDO::FETCH_ASSOC);

        return $res;
    }

    public function getInfosAdmin($id)
    {
        $this->id = $id;

        $req = $this->db->prepare("SELECT * FROM admin WHERE id_admin = ?");
        $req->execute([$id]);
        $res = $req->fetch(PDO::FETCH_ASSOC);

        return $res;
    }

    
// UPDATE
    public function updateSurnameAdmin($surname, $id) { 
        $this->surname = $surname; 
        $this->id = $id;

        $req = $this->db->prepare("UPDATE admin SET surname=? WHERE id_admin = ?");
        $req->execute([$surname, $id]);
    }

    public function updateFirstnameAdmin($firstname, $id) { 
        $this->firstname = $firstname;
        $this->id = $id;

        $req = $this->db->prepare("UPDATE admin SET firstname=? WHERE id_admin = ?");
        $req->execute([$firstname, $id]);
    }

    public function updateEmailAdmin($email, $id) { 
        $this->email = $email;
        $this->id = $id;

        $req = $this->db->prepare("UPDATE admin SET email=? WHERE id_admin = ?");
        $req->execute([$email, $id]);
    }

    public function updatePasswordAdmin($password, $id) {  
        $this->password = $password;
        $this->id = $id;

        // Hachage du mot de passe
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); 
        $req = $this->db->prepare("UPDATE admin SET password=? WHERE id_admin = 1");
        $req->execute([$hashed_password]);
    }

}
