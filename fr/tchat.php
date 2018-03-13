<?php

$title = "Onsign";
$description = "écrire la meta description de la page";
$main_color = "grey";

require_once('../admin/connect.php');
require_once ('../admin/controle-de-session.php');
include('../include/header_cours.php');

$resultat = $pdo->query('SELECT `id_message`, `id_user`,`prenom`, `message`, `date_time` FROM tchat ORDER BY id_message DESC LIMIT 5');

$messages = $resultat->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="row"></div>
<div class="container col s12 blue center-align z-depth-3">
    <h2 class="white-text">Tchat</h2>
</div>
<section class="grey flex-col h-65" style="overflow: auto">
    <div class="container white padding z-depth-3">
        <div id="titreMessages">
        </div>

        <?php if(!empty($msg)) { echo $msg; }

        foreach($messages as $key => $value) :

            if ($_SESSION['prenom'] === $value['prenom']) {?>


      <div class="row message-block" data-id-message="<?= $value['id_message'] ?>">
            <div class="col s12 m6 offset-m6 l6 offset-l6 bloc_bordered blue text-white">
                <p><?= $value['prenom'] ?></p>
                <p><?= $value['message'] ?></p>
                <p class="right-align black-text"><?= $value['date_time'] ?></p>
            </div>
        </div>
        <?php } else { ?>

        <div class="row">
            <div class="col s12 m6 l6 bloc_bordered border_blue text-black">
                <p><?= $value['prenom'] ?></p>
                <p><?= $value['message'] ?></p>
                <p class="right-align black-text"><?= $value['date_time'] ?></p>
            </div>
        </div>

            <?php } ?>

        <?php
        endforeach;
        ?>

    </div>
</section>
        <div class="row container z-depth-3">
            <form method="post" id="formMessage" action="#">
            <div class="col s10 p-0">
               <input type="text" name="message" id="message" placeholder="écrire un message" class="browser-default w-100 border-grey">
            </div>
            <div class="col s2 p-0">
                <input type="submit" name="soumettre" value="envoyer" class="browser-default w-100 border-grey border_blue blue text-white">
            </div>
            </form>
        </div>






<?php include('../include/footer.php')?>
