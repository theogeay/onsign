<?php
$title = "Cours"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white"; // background_color du main

include('../include/header_cours.php');// nav + pop up

// systeme de grid en 12 colonnes fait avec le css de materialize

// LE CSS ACTUELL QUI FONCTIONNE EST STYLE2.CSS

// NE PAS SUPPRIMER STYLE.CSS POUR L'INSTANT

?>

<section class="white flex-col-center">

    <div class="container">
        <div class="row">
            <div class="col s12 m9 offset-m3 l9 offset-l3">
                <h2>Apprendre la LSF : <span class="text-orange">LES BASES</span></h2>

                <h3>Descriptif du Cours :</h3>

                <p>systeme de grid en 12 colonnes fait avec le css de materialize</p>
                <p>systeme de grid en 12 colonnes fait avec le css de materialize</p>
                <p>systeme de grid en 12 colonnes fait avec le css de materialize</p>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m3 l3 h-55 flex-col-center-sa blue bloc_bordered">
                <div class="flex-sa col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">1</div></div><p class="text-white">je m'inscris sur Onsign</p></div>
                <div class="flex-sa col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">2</div></div><p class="text-white">je m'inscris sur Onsign</p></div>
                <div class="flex-sa col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">3</div></div><p class="text-white">je m'inscris sur Onsign</p></div>
                <div class="flex-sa col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">4</div></div><p class="text-white">je m'inscris sur Onsign</p></div>
                <div class="flex-sa col s12"><div class="bulle_avis border-transparent center-align text-blue white"><div class="m-top-5px">5</div></div><p class="text-white">je m'inscris sur Onsign</p></div>
            </div>
            <div class="col s12 m9 l9">
            <div class="video-container">
                <iframe src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
                <div class="row">
                    <a href="#" title="" class="button orange white-text col s8 offset-s2 m4 push-m1 l4 push-l1">Sauvergarder et Quitter</a>
                    <a href="#" title="" class="button orange black-text col s8 offset-s2 m4 push-m3 l4 push-l3">Passez au Quizz</a>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include('../include/footer.php') // footer du site ?>
