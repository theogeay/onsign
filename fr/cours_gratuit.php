<?php
$title = "Cours Gratuit"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white"; // background_color du main

include('../include/header.php');// nav + pop up

// systeme de grid en 12 colonnes fait avec le css de materialize

// LE CSS ACTUELL QUI FONCTIONNE EST STYLE2.CSS

// NE PAS SUPPRIMER STYLE.CSS POUR L'INSTANT

?>

<section class="white flex-col-center">

    <div class="container">
        <div class="row">
            <div class="col s12 m9 offset-m3 l9 offset-l3">
                <h1 class="black-text">Apprendre la LSF : <span class="text-orange">LES BASES</span></h1>

                <h2>Descriptif du Cours :</h2>

                <p>systeme de grid en 12 colonnes fait avec le css de materialize</p>
                <p>systeme de grid en 12 colonnes fait avec le css de materialize</p>
                <p>systeme de grid en 12 colonnes fait avec le css de materialize</p>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l3 h-55 flex-col-center-sa blue bloc_bordered m-s">
                <div class="flex-start col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">1</div></div><p class="text-white padding-l">Je regarde la vidéo</p></div>
                <div class="flex-start col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">2</div></div><p class="text-white padding-l">Je reproduis les gestes</p></div>
                <div class="flex-start col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">3</div></div><p class="text-white padding-l">Je les apprends</p></div>
                <div class="flex-start col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">4</div></div><p class="text-white padding-l">Je fais le quizz</p></div>
                <div class="flex-start col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">5</div></div><p class="text-white padding-l">J'avance dans le niveau</p></div>
            </div>
            <div class="col s12 m8 l9">
            <div class="video-container">
                <iframe src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
                <div class="row">
                    <a href="#" title="" class="button button_orange col s8 offset-s2 m4 push-m1 l4 push-l1">Sauvergarder</a>
                    <a href="#" title="" class="button button_white_orange col s8 offset-s2 m4 push-m3 l4 push-l3">Passez au Quizz</a>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="h-100 h-inerit blue flex-col-center">

    <div class="container flex-col-center-sa">
        <h2 class="text-white">Nos Offres</h2>
        <div class="row"></div>

        <div class="row">
            <div class="col s12 m5 l5 flex-col-center white bloc_bordered padding m-s">
                <h3 class="text-blue">Débutant</h3>
                <p class="margin-0">Vous ne connaissez pas la lsf</p>
                <p class="margin-0">mais vous souhaitez apprendre les fondamentaux</p>
                <img src="../images/offres.png" class="w-85">
                <a href="#" title="" class="button button_orange w-70 link_inscription">Choisir cette offre</a>
            </div>

            <div class="col s12 m5 offset-m2 l5 offset-l2 flex-col-center white bloc_bordered padding m-s">
                <h3 class="text-blue">Intermédiaire</h3>
                <p class="margin-0">Vous ne connaissez pas la lsf</p>
                <p class="margin-0">mais vous souhaitez apprendre les fondamentaux</p>
                <img src="../images/offres1.png" class="w-85">
                <a href="#" title="" class="button button_orange w-70 link_inscription">Choisir cette offre</a>
            </div>
        </div>

    </div>
</section>

<?php include('../include/footer.php') // footer du site ?>
