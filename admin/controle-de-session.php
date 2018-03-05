<?php
session_start(); // ici on continue la session
if ( ((!isset($_SESSION['mdp'])) || ($_SESSION['mdp'] == '') ) && (isset($_SESSION['email'])) || ($_SESSION['email'] =='') ){
    // La variable $_SESSION['login'] n'existe pas, ou bien elle est vide
    // <=> la personne ne s'est PAS connectée
    echo '<p>Vous devez vous <a href="../fr/index.php">connecter</a>.</p>' ."\n";
    exit();
}
