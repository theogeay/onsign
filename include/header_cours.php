<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?>">
    <title><?= $title ?></title>
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="../css/style2.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
</head>
<body>

<!-- ANCRE -->
<div id="ancre" class="flex-col-center"><a href="#top" class="text-white"><i class="material-icons">keyboard_arrow_up</i></a></div>


<header id="#top" class="blue text-white">
<div class="row"></div>
    <div class="row">
        <div class="col m3 l3 flex-sa">
            <div class="row">
                <div class="col m4 offset-m1">
                <div class="bulle_profil">
                    <img src="" alt="">
                </div>
                </div>
                <span class="col m7">Christine Bigorneau</span>
                <span class="col m7">Niveau intermédiaire</span>
            </div>

        </div>

        <div class="col m3 offset-m1 l3 offset-l1">

            <div class="row flex-col-center">
                <span class="size-1">Progression de la Certfication</span>
            </div>

            <div class="row flex-sb">
                <div class="col s1 h-1 bloc_bordered orange"></div>
                <div class="col s1 h-1 bloc_bordered orange"></div>
                <div class="col s1 h-1 bloc_bordered white"></div>
                <div class="col s1 h-1 bloc_bordered white"></div>
                <div class="col s1 h-1 bloc_bordered white"></div>
                <div class="col s1 h-1 bloc_bordered white"></div>
                <div class="col s1 h-1 bloc_bordered white"></div>
                <div class="col s1 h-1 bloc_bordered white"></div>
            </div>

        </div>

            <div class="col m4 offset-m1 l4 offset-l1">
                <div class="row"></div>
                <div class="row flex-sa">

                    <div class="">
                        <a href="../fr/cours.php" class="button bloc_bordered text-white">Cours</a>
                    </div>

                    <div class="">
                        <a href="../fr/tchat.php" class="button bloc_bordered text-white">Certifications</a>
                    </div>

                    <div class="">
                        <a href="#" class="button white bloc_bordered text-blue">Déconnexion</a>
                    </div>

                </div>
            </div>
        </div>



</header>


<main class="<?= $main_color ?>">
