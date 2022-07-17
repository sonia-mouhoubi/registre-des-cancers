<?php 
$title = 'Page de contact - Registre des cancers de Limoge'; 

require_once ('views/require/header.php'); ?>       

<main>
    <section>
        <h1>Contact</h1>

        <img src="assets/img/contact-registre-des-cancers.jpg" alt="Page contact, Registre des cancers">

        <form class="form" action="" method="post">

            <label for="name">Nom <span>*</span></label>
            <input type="text" id="name" name="name">

            <label for="firstName">Prenom <span>*</span></label>
            <input type="text" id="firstName" name="firstName">

            <label for="email">Adresse Mail <span>*</span></label>
            <input type="email" id="email" name="email">

            <label for="phone">Téléphone</label>
            <input type="password" id="password2" name="password2">

            <label for="object">Objet <span>*</span></label>
            <input type="text" id="object" name="object">

            <label for="ask">Votre demande <span>*</span></label>
            <textarea name="ask" id="ask" cols="30" rows="10"></textarea>

            <input type="submit" id="register" name="register" value="Envoyer">
            <span>* Informations obligatoires</span>
        </form>
    </section>
</main>

<?php require_once ('views/require/footer.php'); ?>         
