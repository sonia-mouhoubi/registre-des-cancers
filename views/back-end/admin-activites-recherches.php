<?php 
require_once ('treatments/treatments-back/treatment-admin-activites-recherche.php'); 
$title = 'Page d\'activité de recherche - administration - Registre des cancers de Limoge'; 
// session_start();
require_once ('views/require/header.php'); ?>  

        <main class="mainy">
            <?php require_once ('views/require/nav-admin.php'); ?>         

            <h1>Activité de recherche</h1>

            <section>
                <h2>Projets à venir</h2>

                <?php foreach ($allArticles as $value): ?>
                <div>
                    <h2><?= $security->validData($utility->ucfirst($value['title']));?></h2>

                    <p><?= $security->validData($utility->ucfirst($value['description']));?></p>

                    <?php if(!is_null($value['image'])):?>

                    <figure>
                        <img src="assets/img/upload-img/<?= htmlspecialchars($value['image'])?>" alt="Nom du produit">                    
                    </figure>

                    <?php endif?>
                    <p><a href="assets/img/note-information-registre-des-cancers-limoges.pdf"><img src="./public/img/<?= htmlspecialchars($value['image'])?>" alt="Nom du produit"></a></p>	
                </div>
                <?php endforeach ?>
            </section>
        </main>

        <?php require_once ('views/require/footer.php'); ?>         
