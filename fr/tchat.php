<?php

$title = "Onsign";
$description = "écrire la meta description de la page";

require_once('../admin/connect.php');
require_once ('../admin/controle-de-session.php');
include('../include/header_cours.php');

$resultat = $pdo->query('SELECT `id_message`, `id_user`, `message`, `date_time` FROM tchat ORDER BY id_message DESC');

$messages = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="white flex-col">
    <div class="container">
        <div class="row" id="titreMessages">
            <div class="col s12 blue text-white center-align">
                <h3>Conversation avec Kyle d'Onsign</h3>
            </div>
        </div>

        <?php if(!empty($msg)) { echo $msg; } ?>

        <?php
        foreach($messages as $key => $value) :
        ?>

       <div class="row message-block" data-id-message="<?= $value['id_message'] ?>">
            <div class="col s12 m6 offset-m6 l6 offset-l6 bloc_bordered blue text-white">
                <p><?= $value['message'] ?></p>
                <p class="right-align grey-text lighten-5"><?= $value['date_time'] ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m6 l6 bloc_bordered border_blue text-black">
                <p>Bonjour, je suis en seo actuellement j'en peux plus aled Bonjour, je suis en seo actuellement j'en peux plus aled</p>
                <p class="right-align grey-text lighten-5">10:01</p>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m6 offset-m6 l6 offset-l6 bloc_bordered blue text-white">
                <p>Bonjour, je suis en seo actuellement j'en peux plus aled Bonjour, je suis en seo actuellement j'en peux plus aled</p>
                <p class="right-align grey-text lighten-5">10:01</p>
            </div>
        </div>

        <?php
        endforeach;
        ?>

        <div class="row">
            <form method="post" id="formMessage" action="#">
            <div class="col s10 p-0">
               <input type="text" name="message" id="message" placeholder="écrire un message" class="browser-default w-100 border-grey">
            </div>
            <div class="col s2 p-0">
                <input type="submit" name="soumettre" value="envoyer" class="browser-default w-100 border-grey border_blue blue text-white">
            </div>
            </form>
        </div>

    </div>
</section>




<?php include('../include/footer.php')?>
