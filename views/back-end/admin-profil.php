<?php 
$title = 'Page profil - administration - Registre des cancers de Limoge'; 

require ('views/require/views-header.php'); 
?>    

        <main>
            <?php require ('views/require/views-nav-admin.php'); ?>         

            <section>
                <h1>Profil</h1>

                <form class="form" action="" method="post">
                    <label for="name">Nom <span>*</span></label>
                    <input type="text" id="name" name="name">

                    <label for="firstName">Prenom <span>*</span></label>
                    <input type="text" id="firstName" name="firstName">

                    <label for="email">Adresse Mail <span>*</span></label>
                    <input type="email" id="email" name="email">

                    <input type="submit" id="register" name="register" value="Envoyer">
                    <span>* Informations obligatoires</span>
                </form>

                <form class="form" action="" method="post">
                    <label for="old-password">Ancien mot de passe <span>*</span></label>
                    <input type="password" id="old-password" name="old-password">

                    <label for="new-password">Nouveau mot de passe <span>*</span></label>
                    <input type="password" id="new-password" name="new-password">

                    <label for="confirm-password">Nouveau mot de passe <span>*</span></label>
                    <input type="password" id="confirm-password" name="confirm-password">

                    <input type="submit" id="register" name="register" value="Envoyer">
                    <span>* Informations obligatoires</span>
                </form>
            </section>
        </main>

        <?php require ('views/require/views-footer.php'); ?>         
  