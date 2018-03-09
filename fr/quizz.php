<?php
$title = "Cours"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white"; // background_color du main

require_once ('../admin/controle-de-session.php');
include('../include/header_cours.php');// nav + pop up

// systeme de grid en 12 colonnes fait avec le css de materialize

// LE CSS ACTUELL QUI FONCTIONNE EST STYLE2.CSS

// NE PAS SUPPRIMER STYLE.CSS POUR L'INSTANT

?>

<section class="white flex-col-center">

    <div class="container">
        <div class="row center-align">
            <h1 class="black-text">Quizz</h1>
            <h2>Niveau 1</h2>
        </div>
        <div class="row">
        <div class="col s12 m8 offset-m2 l8 offset-l2">

            <div class="row flex-sb">
                <div class="col s1 h-1 bloc_bordered orange"></div>
                <div class="col s1 h-1 bloc_bordered orange"></div>
                <div class="col s1 h-1 bloc_bordered grey"></div>
                <div class="col s1 h-1 bloc_bordered grey"></div>
                <div class="col s1 h-1 bloc_bordered grey"></div>
                <div class="col s1 h-1 bloc_bordered grey"></div>
                <div class="col s1 h-1 bloc_bordered grey"></div>
                <div class="col s1 h-1 bloc_bordered grey"></div>
            </div>


            <div class="row">
                <h5 class="col s10 offset-s1">Progression de la Certfication de type progrès</h5>
            </div>

        </div>
        </div>

        <div class="row">
            <div class="col s12 m10 offset-m1 l10 offset-l1">

            <form action="#" method="post">
                <div class="col s12 m4 l4 ">
                    <img src="../images/home_section_certif.jpg" class="w-100">
                    <input type="checkbox" id="1" />
                    <label for="1"></label>
                </div>

                <div class="col s12 m4 l4 ">
                    <img src="../images/home_section_certif.jpg" class="w-100">
                    <input type="checkbox" id="2" />
                    <label for="2"></label>
                </div>

                <div class="col s12 m4 l4 ">
                    <img src="../images/home_section_certif.jpg" class="w-100">
                    <input type="checkbox" id="3" />
                    <label for="3"></label>
                </div>

            </form>

                <div class="row"></div>

            <div class="row">
                <a href="#" title="" class="button orange black-text col s8 offset-s2 m4 push-m1 l4 push-l1">Sauvergarder et Quitter</a>
                <a href="#" title="" class="button orange white-text col s8 offset-s2 m4 push-m3 l4 push-l3">Valider</a>
            </div>
        </div>
        </div>


    </div>

</section>

<?php include('../include/footer.php') // footer du site ?>
