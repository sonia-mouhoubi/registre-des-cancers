<?php 
require_once ('treatments/treatments-back/treatment-admin-actualities.php'); 
$title = 'Page d\'actualité - administration - Registre des cancers de Limoge'; 

require_once ('views/require/header.php'); ?>       

<main class="main">
    <?php require_once ('views/require/nav-admin.php'); ?>         

    <section class="actuality">
        <h1>Actualités</h1>

    <?php //var_dump($allActualities);
        foreach ($allActualities as $value): ?>
        <div>
            <h2><?= $security->validData($utility->ucfirst($value['title']));?></h2> 

            <span><?= $security->validData($utility->ucfirst($value['date_article']));?></span>

            <p><?= $security->validData($utility->ucfirst($value['description']));?></p>

            <a href="./admin-actualite/<?= $value['id_article'] ?>">En savoir plus</a></br>
        </div>
        <?php endforeach ?>

    </section>  
</main>

<?php require_once ('views/require/footer.php'); ?>         
