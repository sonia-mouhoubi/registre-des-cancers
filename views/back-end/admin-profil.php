<?php 
$title = 'Page mon profil - Registre des cancers de Limoge'; 

require ('views/require/header.php'); 
?>       

<main>
    <section>
        <h1>Mon tableau de bord</h1>
        <h2>Informations du compte</h2>

        <form class="form" action="" method="post">

            <label for="name">Nom <span>*</span></label>
            <input type="text" id="name" name="name">

            <label for="firstName">Prenom <span>*</span></label>
            <input type="text" id="firstName" name="firstName">

            <label for="email">Adresse Mail <span>*</span></label>
            <input type="email" id="email" name="email">

            <input type="submit" id="register" name="register" value="Valider">
            <span>* Informations obligatoires</span>

        </form>

        <form class="form" action="treatments/treatments-front/treatment-profile.php" method="post">
        <form class="form" action="" method="post">

        <!-- <label for="password_old">Ancien mot de passe</label>
            <input type="password" id="password_old" name="password_old" placeholder="Ancien mot de passe">  -->

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Nouveau mot de passe">

        <!--    <label for="password2">Confirmation du Mot de passe</label>
            <input type="password" id="password2" name="password2" placeholder="Confirmation du mot de passe"> -->

            <input type="submit" id="updatePassword" name="updatePassword" value="Valider">
            
        </form>
    </section>
</main>

<?php require ('views/require/footer.php'); ?>         
