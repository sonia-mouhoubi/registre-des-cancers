<?php
if (isset($_GET['url'])) {

    $name_file = explode("/",$_GET['url']);
    $name_file = end($name_file);

} 
else {

    $name_file = "accueil";

}

function render($name_file) {
    
    $front_pages = ['accueil', 'actualites', 'chiffres-cancers', 'connexion', 'contact', 'activites-recherches', 'presentation', 'actualite-unique'];

    if(in_array($name_file, $front_pages)) {

        require("views/front-end/views-$name_file.php");

    } else {

        require("views/front-end/views-error404.php");

    }
}

render($name_file);


    
    


