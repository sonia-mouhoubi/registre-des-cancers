<?php 
$title = 'formulaire - administration - Registre des cancers de Limoge'; 

require ('views/require/header.php'); 
?> 

<main>
    <?php require ('views/require/views-nav-admin.php'); ?>         

    <section>
        <h1>Formulaire des chiffres des cancers</h1>

        <form class="form" action="" method="post">
            <label for="title">Titre</label>
            <input type="text" id="title" name="title">

            <label for="description">Description</label>
            <input type="text" id="description" name="description">

            <label for="link">Liens</label>
            <input type="text" id="link" name="link">

            <input type="submit" id="register" name="register" value="Envoyer">
            <span>* Informations obligatoires</span>
        </form>
    </section>
</main>

<?php require ('views/require/footer.php'); ?>         
