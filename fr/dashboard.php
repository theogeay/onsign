<?php
$title = "Onsign"; // titre de la page
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
<h3>Niveau Débutant</h3>
        <div class="row">
            <div class="col s10 offset-s1 m4 l4">
                <div class="card hoverable z-depth-3">
                    <div class="card-image">
                        <img src="../images/home_section_certif.jpg">
                        <span class="card-title">Les bases de la lsf</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                    </div>
                    <div class="card-action blue center-align">
                        <a href="#" class="text-white margin-auto">Refaire le Quizz</a>
                    </div>
                </div>
            </div>

            <div class="col s10 offset-s1 m4 l4">
                <div class="card hoverable z-depth-3">
                    <div class="card-image">
                        <img src="../images/home_section_certif.jpg">
                        <span class="card-title">Les bases de la lsf</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                    </div>
                    <div class="card-action blue center-align">
                        <a href="#" class="text-white margin-auto">Refaire le Quizz</a>
                    </div>
                </div>
            </div>

            <div class="col s10 offset-s1 m4 l4">
                <div class="card hoverable z-depth-3">
                    <div class="card-image">
                        <img src="../images/home_section_certif.jpg">
                        <span class="card-title">Les bases de la lsf</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                    </div>
                    <div class="card-action blue center-align">
                        <a href="#" class="text-white margin-auto">Refaire le Quizz</a>
                    </div>
                </div>
            </div>

    </div>

        <div class="row">
            <div class="col s10 offset-s1 m4 l4">
                <div class="card hoverable z-depth-3">
                    <div class="card-image">
                        <img src="../images/home_section_certif.jpg">
                        <span class="card-title">Les bases de la lsf</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                    </div>
                    <div class="card-action orange center-align">
                        <a href="#" class="text-white margin-auto">Faire le Quizz</a>
                    </div>
                </div>
            </div>

            <div class="col s10 offset-s1 m4 l4">

                <div class="card hoverable z-depth-3">
                    <div class="opacity_card">
                    <div class="card-image">
                        <img src="../images/home_section_certif.jpg">
                        <span class="card-title">Les bases de la lsf</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                    </div>
                    <div class="card-action orange center-align">
                        <a href="#" class="text-white margin-auto">Faire le Quizz</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col s10 offset-s1 m4 l4">
                <div class="card hoverable z-depth-3">
                    <div class="card-image">
                        <img src="../images/home_section_certif.jpg">
                        <span class="card-title">Les bases de la lsf</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                    </div>
                    <div class="card-action orange center-align">
                        <a href="#" class="text-white margin-auto">Faire le Quizz</a>
                    </div>
                </div>
            </div>

        </div>
</section>

<?php include('../include/footer.php') // footer du site ?>
