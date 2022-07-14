<?php 
// session_start();
$title = 'Page de connexion - Registre des cancers de Limoge'; 
require ('views/require/views-header.php'); 
?>  

<main>
    <section>
        <h1>Connexion à l'administration du site.</h1>

        <img src="" alt="Image connexion, registre des cancers">

        <form class="form" action="treatments/treatments-front/treatment-admin.php" method="post">

            <label for="email">Adresse Mail <span>*</span></label>
            <input type="email" id="email" name="email">

            <label for="password">Mot de passe <span>*</span></label>
            <input type="password" id="password" name="password">

            <!-- Message d'erreur -->
            <?php 
            if(isset($_SESSION['message'])) {
                echo $_SESSION['message'];
            }
                $_SESSION['message'] = "";
            ?>

            <input type="submit" id="connection" name="connection" value="Valider">
            <span>* Informations obligatoires</span>

        </form>
    </section>
</main>

<?php require ('views/require/views-footer.php'); ?>         
