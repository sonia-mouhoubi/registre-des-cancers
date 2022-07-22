<?php 
require_once ('treatments/treatments-back/treatment-admin-chiffres-cancers.php'); 
$title = 'Page des chiffres des cancers - administration - Registre des cancers de Limoge'; 

require_once ('views/require/header.php'); ?>        

<main class="main">
    <?php require_once ('views/require/nav-admin.php'); ?>         

    <section>
        <h1>Chiffres des cancers de Haute-Viennes</h1>

        <?php foreach ($allDataCancers as $value): ?>
        <div>
            <h2><?= $security->validData($utility->ucfirst($value['title']));?></h2> 

            <span><?= $security->validData($utility->ucfirst($value['date_article']));?></span>

            <p><?= $security->validData($utility->ucfirst($value['description']));?></p>
        </div>
        <?php endforeach ?>
        <div>
            <h2>Titre 1</h2> 

            <p>Lorem ipsum dolor sit amet. Vel harum ipsum non nostrum nesciunt ut consequatur eligendi ea illo minus et magni itaque aut dolorem mollitia. Eos perspiciatis accusantium ut molestias ullam ut corrupti voluptatibus.</p>

            <p>www.adresse.com</p>
        </div>

        <div>
            <h2>Titre 2</h2> 

            <p>Lorem ipsum dolor sit amet. Vel harum ipsum non nostrum nesciunt ut consequatur eligendi ea illo minus et magni itaque aut dolorem mollitia. Eos perspiciatis accusantium ut molestias ullam ut corrupti voluptatibus.</p>

            <p>www.adresse.com</p>
        </div>

        <div>
            <h2>Titre 3</h2> 

            <p>Lorem ipsum dolor sit amet. Vel harum ipsum non nostrum nesciunt ut consequatur eligendi ea illo minus et magni itaque aut dolorem mollitia. Eos perspiciatis accusantium ut molestias ullam ut corrupti voluptatibus.</p>

            <p>www.adresse.com</p>
        </div>

        <div>
            <h2>Titre 1</h2> 

            <p>Lorem ipsum dolor sit amet. Vel harum ipsum non nostrum nesciunt ut consequatur eligendi ea illo minus et magni itaque aut dolorem mollitia. Eos perspiciatis accusantium ut molestias ullam ut corrupti voluptatibus.</p>

            <p>www.adresse.com</p>
        </div>

        <div>
            <h2>Titre 2</h2> 

            <p>Lorem ipsum dolor sit amet. Vel harum ipsum non nostrum nesciunt ut consequatur eligendi ea illo minus et magni itaque aut dolorem mollitia. Eos perspiciatis accusantium ut molestias ullam ut corrupti voluptatibus.</p>

            <p>www.adresse.com</p>
        </div>

        <div>
            <h2>Titre 3</h2> 

            <p>Lorem ipsum dolor sit amet. Vel harum ipsum non nostrum nesciunt ut consequatur eligendi ea illo minus et magni itaque aut dolorem mollitia. Eos perspiciatis accusantium ut molestias ullam ut corrupti voluptatibus.</p>

            <p>www.adresse.com</p>
        </div>
    </section>
</main>

<?php require_once ('views/require/footer.php'); ?>         
