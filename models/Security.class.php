<?php 

class Security {
    private $data;

    public function validData($data) 
    {
        $this->data = $data;

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlentities($data);
        $data = strip_tags($data);

        return $data;
    }

}

?>