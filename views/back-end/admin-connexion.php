<?php 
require ('treatments/treatments-front/treatment-errors.php'); 
$title = 'Page de connexion - Registre des cancers de Limoge'; 
require ('views/require/header.php'); 
?>  

<main>
    <section>
        <h1>Connexion à l'administration du site.</h1>

        <img src="" alt="Image connexion, registre des cancers">

        <form id="form-connexion-admin" class="form" action="treatments/treatments-back/treatment-admin-connection.php" method="post">

            <label for="email">Adresse Mail <span>*</span></label>
            <input type="text" id="email" name="email">

            <label for="password">Mot de passe <span>*</span></label>
            <input type="password" id="password" name="password">

            <!-- Message d'erreur -->
            <?php messages();?>

            <input type="submit" id="connection" name="connection" value="Valider">
            <span>* Informations obligatoires</span>

        </form>
    </section>
</main>

<?php require ('views/require/footer.php'); ?>         
