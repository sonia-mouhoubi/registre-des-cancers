<?php
require_once('models/Rooter.class.php');
$routes = new Rooter;

if (isset($_GET['url'])) {

    $nameFile = explode("/",$_GET['url']);
    $routes->routes($nameFile[0]);
}
else {

    $nameFile = "accueil";
    $routes->routes($nameFile);
}


