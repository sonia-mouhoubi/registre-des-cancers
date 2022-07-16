<?php 
$title = 'formulaire - administration - Registre des cancers de Limoge'; 

require ('views/require/header.php'); 
?>      

<main>
    <?php require ('views/require/views-nav-admin.php'); ?>         

    <section>
        <h1>Formulaire des activités de recherche</h1>

        <form class="form" action="" method="post">
            <label for="title">Titre</label>
            <input type="text" id="title" name="title">

            <label for="description">Description</label>
            <input type="text" id="description" name="description">

            <label for="file">Fichier</label>
            <input type="file" id="file" name="file">

            <label for="status">Titre</label>
            <input type="text" id="status" name="status">

            <input type="submit" id="register" name="register" value="Envoyer">
            <span>* Informations obligatoires</span>
        </form>
    </section>
</main>

<?php require ('views/require/footer.php'); ?>         
