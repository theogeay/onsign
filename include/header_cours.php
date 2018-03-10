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
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
</head>
<body>

<!-- ANCRE -->
<div id="ancre" class="flex-col-center"><a href="#top" class="text-white"><i class="material-icons">keyboard_arrow_up</i></a></div>


<header id="#top" class="blue text-white">

    <nav class="blue">
        <div class="nav-wrapper blue">
            <a href="../fr/dashboard.php" class="brand-logo"><img src="../images/logo.png"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down w-100 flex-end">
                <li class="w-40 flex-sa padding-2"><div class="col w-10 h-1 bloc_bordered orange"></div>
                    <div class="col w-10 h-1 bloc_bordered orange"></div>
                    <div class="col w-10 h-1 bloc_bordered white"></div>
                    <div class="col w-10 h-1 bloc_bordered white"></div>
                    <div class="col w-10 h-1 bloc_bordered white"></div>
                    <div class="col w-10 h-1 bloc_bordered white"></div>
                    <div class="col w-10 h-1 bloc_bordered white"></div>
                    <div class="col w-10 h-1 bloc_bordered white"></div>
                </li>
                <li><a href="../fr/profil.php" class="button bloc_bordered text-white">Profil</a></li>
                <li><a href="../fr/cours.php" class="button bloc_bordered text-white">Cours</a></li>
                <li><a href="../fr/tchat.php" class="button bloc_bordered text-white">Certifications</a></li>
                <li><a href="../admin/logout.php" class="button button_white bloc_bordered">Déconnexion</a></li>
            </ul>
            <ul class="side-nav blue flex-col-sa h-100" id="mobile-demo">
                <li><a href="../fr/dashboard.php"><img src="../images/logo.png"></a></li>
                <li><a href="../fr/profil.php" class="text-white">Profil</a></li>
                <li><a href="../fr/cours.php" class="text-white">Cours</a></li>
                <li><a href="../fr/tchat.php" class="text-white">Certifications</a></li>
                <li><a href="../admin/logout.php" class="text-white">Déconnexion</a></li>
            </ul>
        </div>
    </nav>

</header>


<main class="<?= $main_color ?>">
