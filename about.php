<?php
require_once 'header.php';
require_once './classes/showAbout.classes.php';
require_once './classes/showAbout-contr.classes.php';

$f=new ShowAboutContr();
$ok=$f->showAbout();
?>
    <section class="container-fluid ">
        <div class="text-center d-flex flex-column justify-content-center align-items-center mt-5">
            <img style="width:20rem;" src="<?= ROOT_URL ?>img/IMG-20230614-WA0000.jpg" alt="">
            <h1><?= $ok[0]['title'] ?></h1>
            <p>
            <?= $ok[0]['descrip'] ?>
            </p>

        </div>

    </section>
    <?php 
require_once 'footer.php';
?>