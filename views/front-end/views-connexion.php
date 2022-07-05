<?php 
$title = 'Page de connexion - Registre des cancers de Limoge'; 

require ('views/require/views-header.php'); 
?>  

        <main>
            <section>
                <h1>Connexion</h1>

                <img src="" alt="Image connexion, registre des cancers">

                <form class="form" action="" method="post">
                    <label for="email">Adresse Mail <span>*</span></label>
                    <input type="email" id="email" name="email">

                    <label for="password">Mot de passe <span>*</span></label>
                    <input type="password" id="password" name="password">

                    <input type="submit" id="register" name="register" value="Envoyer">
                    <span>* Informations obligatoires</span>
                </form>
            </section>
        </main>

        <?php require ('views/require/views-footer.php'); ?>         
    