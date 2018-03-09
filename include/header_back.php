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

<ul id="slide-out" class="side-nav fixed blue">
    <li class="center-align"><img src="../images/logo.png" class="w-65"></li>
    <li><a href="../admin/back_end.php" class="text-white">Dashboard</a></li>
    <li><a href="../admin/back_cours.php" class="text-white">Cours</a></li>
    <li><a href="../admin/back_quizz.php" class="text-white">Quizz</a></li>
    <li><a href="../admin/back_users.php" class="text-white">Comptes</a></li>
    <li><a href="../admin/logout.php" class="text-white">Déconnexion</a></li>
</ul>

<div class="nav_back blue flex-col-center h-15 col row box-shadow">
    <div class="menu_back"><a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons text-white">menu</i></a></div>
    <img src="../images/logo.png" class="w-40">
</div>

<main class="<?= $main_color ?> p-300">
    <div class="row blue box-shadow">
        <h1 class="container center-align"><?= $titre ?></h1>
    </div>
