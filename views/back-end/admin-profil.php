<?php 
require ('treatments/treatments-back/treatment-admin-profile.php'); 
require ('treatments/treatments-back/treatment-errors.php'); 
$title = 'Page mon profil - Registre des cancers de Limoge'; 

require_once ('views/require/header.php'); 
?>       

<main>
    <?php require ('views/require/nav-admin.php'); ?>              
    
    <section>
        <h1>Mon tableau de bord</h1>
        <h2>Informations du compte</h2>

        <form class="form" action="treatments/treatments-back/treatment-form-admin-profile.php" method="post">

            <label for="surname">Nom</label>
            <input type="text" id="surname" name="surname" value="<?= $infosAdmin['surname']?>">

            <label for="firstname">Prenom</label>
            <input type="text" id="firstname" name="firstname" value="<?= $infosAdmin['firstname']?>">

            <label for="email">Adresse Mail</label>
            <input type="email" id="email" name="email" value="<?= $infosAdmin['email']?>">

              <!-- Message d'erreur -->
              <?php messages();?>

            <input type="submit" id="updateInfosProfil" name="updateInfosProfil" value="Valider">

        </form>

        <form class="form" action="treatments/treatments-back/treatment-form-admin-profile.php" method="post">

            <label for="passwordOld">Ancien mot de passe</label>
            <input type="password" id="passwordOld" name="passwordOld" placeholder="Ancien mot de passe">

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Nouveau mot de passe">

            <label for="passwordConfirm">Confirmation du Mot de passe</label>
            <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="Confirmation du mot de passe">

            <input type="submit" id="updatePassword" name="updatePassword" value="Valider">
            
        </form>
    </section>
</main>

<?php require_once ('views/require/footer.php'); ?>         
