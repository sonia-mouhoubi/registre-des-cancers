<?php 

class Utility {
    private $data;

    // Lettres en minuscule
    public function strtolower($data) 
    {
        $this->data = $data;

        $data = strtolower($data);

        return $data;
    }

    // Lettre en majuscule
    public function strtoupper($data) 
    {
        $this->data = $data;

        $data = strtoupper($data);

        return $data;
    }
}

?>