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
<div id="ancre" class="flex-col-center"><a  href="#top" class="text-white"><i class="material-icons">keyboard_arrow_up</i></a></div>

<!-- POP UP CONNEXION -->

<div class="fixed z-1 hidden" id="pop-up_connexion">
    <div class="opacity_2 h-100 w-100 flex-col-center fixed z-2"></div>
        <div class="bloc_bordered white flex-col-center-sa z-3 pop_up padding">

            <h2 class="text-blue">Connexion</h2>

            <form class="flex-col-sa padding" method="post" action="#">

                <div class="row">
                    <div class="flex-col col s12 m12 l12">
                    <label for="email">Email</label>
                    <input type="email" name="email" title="email" class="browser-default">
                    </div>
                </div>
                <div class="row">
                    <div class="flex-col col s12 m12 l12">
                    <label for="password">Password</label>
                    <input type="password" name="password" title="password" class="browser-default">
                    </div>
                </div>
                <input type="submit" value="Se connecter" class="button blue w-100">
                <div class="flex-col-center-sa w-100">
                    <a href="#">Mot de passe oublié ?</a>
                    <a href="#">S'incrire</a>
                </div>
            </form>
        </div>
    </div>

<!-- POP UP INSCRIPTION -->

<div class="row fixed z-1 hidden" id="pop-up_inscription">
    <div class="opacity_2 h-100 w-100 flex-col-center fixed z-2"></div>
    <div class="col s10 offset-s1 m10 offset-m2 l10 offset-l9 bloc_bordered white flex-col-center-sa z-3 pop_up">

        <h2 class="text-blue">Inscription</h2>

        <form class="flex-col-center-sa padding" method="post" action="#">

            <div class="row">
                <div class="flex-sb col s12 m5 l5">
                    <label for="nom" class="browser-default">Nom</label>
                    <input type="text" name="nom" title="nom" class="browser-default">
                </div>

                <div class="flex-sb col s12 m5 offset-m1 l5 offset-l1 ">
                    <label for="prenom" class="browser-default">Prenom</label>
                    <input type="text" name="prenom" title="prenom" class="browser-default">
                </div>
            </div>

            <div class="row">
                <div class="flex-sb col s12 m5 l5 ">
                    <label for="password">Password</label>
                    <input type="password" name="password" title="password" class="browser-default">
                </div>
                <div class="flex-sb col s12 m5 offset-m1 l5 offset-l1 ">
                    <label for="tel">Téléphone</label>
                    <input type="tel" name="tel" title="tel" class="browser-default">
                </div>
            </div>

            <div class="row">
                <div class="flex-sb col s12 m12 l12">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" title="adresse" class="browser-default w-100">
                </div>
            </div>
            <div class="flex-col-center-sa w-100 h-15">
                <a href="#" class="button text-blue border_blue w-80 margin-0">Voir les offres</a>
                <input type="submit" value="Essayer gratuitement" class="button blue w-80 margin-0">
            </div>
        </form>
    </div>
</div>


<header id="#top">

    <nav class="blue">
        <div class="nav-wrapper blue">
            <a href="index.php" class="brand-logo"><img src="../images/logo.png"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="offre.php" title="">nos offres</a></li>
                <li><a href="apprendre_lsf.php" title="">apprendre la lsf</a></li>
                <li><a href="certification.php" title="">certifications</a></li>
                <li id="link_inscription"><a href="#" title="" class="white text-blue">inscription</a></li>
                <li id="link_connexion"><a href="#" title="" class="white orange">connexion</a></li>

            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="offre.php" title="">nos offres</a></li>
                <li><a href="apprendre_lsf.php" title="">apprendre la lsf</a></li>
                <li><a href="certification.php" title="">certifications</a></li>
                <li id="link_connexion"><a href="#" title="">connexion</a></li>
                <li id="link_inscription" class="nav_btn_inscription"><a href="#" title="">inscription</a></li>
            </ul>
        </div>
    </nav>

</header>


<main class="<?= $main_color ?>">
