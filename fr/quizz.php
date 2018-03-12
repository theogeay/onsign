<?php
$title = "Cours"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white"; // background_color du main

require_once ('../admin/connect.php');
require_once ('../admin/controle-de-session.php');
include('../include/header_cours.php');// nav + pop up

$sql = "SELECT * FROM `quizz` WHERE id_cours = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$element = $stmt -> fetch();

$random = random_int(1 , 3);


if ($random === 1) {
    $video = 'video1';
} elseif ($random === 2){
    $video = 'video2';
} elseif ($random === 3){
    $video = 'video3';
}


?>

<section class="white flex-col-center">

    <div class="container">
        <div class="row center-align">
            <h1 class="black-text">Quizz</h1>
            <h2><?=$element['id_quizz']?></h2>
        </div>
        <div class="row">
        <div class="col s12 m8 offset-m2 l8 offset-l2">

            <div class="row">
                <h5 class="col s10 offset-s1"><?=$element['mot']?></h5>
            </div>

        </div>
        </div>

        <div class="row">
            <div class="col s12 m10 offset-m1 l10 offset-l1">

            <form action="#" method="post">
                <div class="col s12 m4 l4 ">
                    <video class="responsive-video" autoplay loop>
                        <source src="../video/<?=$element['video1']?>" type="video/mp4" >
                    </video>
                    <input name="question" type="radio" id="1"/>
                    <label for="1"></label>
                </div>

                <div class="col s12 m4 l4 ">
                    <video class="responsive-video" autoplay loop>
                        <source src="../video/<?=$element['video2']?>" type="video/mp4" >
                    </video>
                    <input name="question" type="radio" id="2" />
                    <label for="2"></label>
                </div>

                <div class="col s12 m4 l4 ">
                    <video class="responsive-video" autoplay loop>
                        <source src="../video/<?=$element['video3']?>" type="video/mp4" >
                    </video>
                    <input name="question" type="radio" id="3" />
                    <label for="3"></label>
                </div>

            </form>

                <div class="row"></div>

            <div class="row">
                <a href="#" title="" class="button button_white_orange col s8 offset-s2 m4 push-m1 l4 push-l1">Sauvergarder</a>
                <a href="#" title="" class="button button_orange col s8 offset-s2 m4 push-m3 l4 push-l3">Valider</a>
            </div>
        </div>
        </div>


    </div>

</section>

<?php include('../include/footer.php') // footer du site ?>
