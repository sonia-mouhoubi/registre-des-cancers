<?php
require_once('models/Rooter.class.php');

if (isset($_GET['url'])) {
    $nameFile = explode("/",$_GET['url']);
    $nameFile = end($nameFile);    
} 
else {
    $nameFile = "accueil";
}

$routes = new Rooter;
$routes->routes($nameFile);