<?php

class Rooter {
    private $nameFile;

    public function routes($nameFile) {

        // Pages front
    
        $dirFront = 'views/front-end/'; // Chemin où se trouve le dossier.
        $arrayFilesFront = scandir($dirFront); // Permet de lire le dossier sous forme de tableau.
        $newArrayFront = []; // Array qui va contenir les noms de fichiers modifiés.
    
        foreach($arrayFilesFront as $key=> $value) {
            if($key != 0 && $key != 1){
                $file = substr($value,6, -4);
                array_push($newArrayFront, $file);
            }
        }

        // Pages back

        $dirBack = 'views/back-end/'; // Chemin où se trouve le dossier.
        $arrayFilesBack = scandir($dirBack); // Permet de lire le dossier sous forme de tableau.
        $newArrayBack = []; // Array qui va contenir les noms de fichiers modifiés.
    
        foreach($arrayFilesBack as $key=> $value) {
            if($key != 0 && $key != 1){
                $file = substr($value,0, -4);
                array_push($newArrayBack, $file);
            }
        }

        if(in_array($nameFile, $newArrayFront)) {
            require_once("views/front-end/views-$nameFile.php");
        } 
        elseif(in_array($nameFile, $newArrayBack)) {
            require_once("views/back-end/$nameFile.php"); 
        }
        else {
            require_once("views/front-end/views-error404.php");
        }   
    }
}

?>