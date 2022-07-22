<?php 
require_once ('treatments/treatments-back/treatment-admin-profile.php'); 
require_once ('treatments/treatments-back/treatment-errors.php'); 
$title = 'Page mon profil - Registre des cancers de Limoge'; 

require_once ('views/require/header.php'); 
?>       

<main class="main">
    <?php require_once ('views/require/nav-admin.php'); ?>              
    
    <section class="profil">
        <h1>Mon tableau de bord</h1>
        <h2>Informations du compte</h2>

        <form class="form" action="treatments/treatments-back/treatment-form-admin-infos-profile.php" method="post">

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

        <form class="form" action="treatments/treatments-back/treatment-form-admin-password-profile.php" method="post">

            <label for="OldPassword">Ancien mot de passe</label>
            <input type="text" id="OldPassword" name="OldPassword" placeholder="Ancien mot de passe">

            <label for="newPassword">Mot de passe</label>
            <input type="text" id="newPassword" name="newPassword" placeholder="Nouveau mot de passe">

            <label for="ConfirmPassword">Confirmation du Mot de passe</label>
            <input type="text" id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirmation du mot de passe">

            <!-- Message d'erreur -->
            <?php messagesPasswordProfil();?>

            <input type="submit" id="updatePassword" name="updatePasswordProfil" value="Valider">
            
        </form>
    </section>
</main>

<?php require_once ('views/require/footer.php'); ?>         
