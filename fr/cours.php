<?php
$title = "Cours"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white"; // background_color du main

require_once ('../admin/controle-de-session.php');
include('../include/header_cours.php');// nav + pop up

// systeme de grid en 12 colonnes fait avec le css de materialize

// LE CSS ACTUELL QUI FONCTIONNE EST STYLE2.CSS

// NE PAS SUPPRIMER STYLE.CSS POUR L'INSTANT


//connexion BDD 
require_once('../admin/connect.php');
//affchage								
$sql = "SELECT * FROM cours WHERE id_cours = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$elements = $stmt -> fetch();

//var_dump($elements)
?>

<section class="white flex-col-center">

    <div class="container">
        <div class="row">
            <div class="col s12 m9 offset-m3 l9 offset-l3">
								<div class="hidden"><?=$elements['id_cours']?></div>
                <h1 class="black-text"><?= $elements['titre']?></h1>

                <h2>Descriptif du Cours :</h2>

                <p><?=$elements['texte_cours']?></p>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l3 h-55 flex-col-center-sa blue bloc_bordered m-s">
                <div class="flex-sa col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">1</div></div><p class="text-white">Je regarde la vidéo</p></div>
                <div class="flex-sa col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">2</div></div><p class="text-white">Je reproduis les gestes</p></div>
                <div class="flex-sa col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">3</div></div><p class="text-white">Je les apprends</p></div>
                <div class="flex-sa col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">4</div></div><p class="text-white">Je fais le quizz</p></div>
                <div class="flex-sa col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">5</div></div><p class="text-white">J'avance dans le niveau</p></div>
            </div>
            <div class="col s12 m8 l9">
            <div class="video-container">
                <video class="materialboxed" width="100%" controls src="../video/<?=$elements['video']?>" >Vidéo de cours Onsign</video>
            </div>
                <div class="row">
                    <a href="#" title="" class="button button_orange col s8 offset-s2 m4 push-m1 l4 push-l1">Sauvergarder et Quitter</a>
                    <a href="#" title="" class="button orange black-text col s8 offset-s2 m4 push-m3 l4 push-l3">Passez au Quizz</a>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include('../include/footer.php') // footer du site ?>
