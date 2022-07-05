<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <meta name="description" content="Le Registe des cancers de Limoges esr (description)">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <link href="assets/css/styles.css" rel="stylesheet"/> 
        <script src="assets/js/scripts.js"></script>
    </head>
        
    <body>
        <header>
            <div class="logo">
                <a href="accueil"><img src="assets/img/logo-registre-des-cancers.png" alt="Logo du registre des cancers"></a> 
            </div>

            <input type="checkbox" id="burger" hidden>
            <label class="menu-burger" for="burger">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
            </label>

            <nav class="nav">
                <a href="accueil"><img src="assets/img/logo-registre-des-cancers.png" alt="Logo du registre des cancers"></a>

                <ul>
                    <li>
                        <a href="presentation">Présentation</a>
                    </li>
                    <li>
                        <a href="chiffres-cancers">Chiffres du cancer en Haute-Vienne</a>
                    </li>
                    <li>
                        <a href="activites-recherches">Activité de recherche</a>
                    </li>
                    <li>
                        <a href="actualites">Actualités</a>
                    </li>
                    <li>
                        <a href="contact">Contact</a>
                    </li>
                </ul>
            </nav>     
        </header>