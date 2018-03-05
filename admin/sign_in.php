<?php
/**
 * Created by PhpStorm.
 * User: zerbiclement
 * Date: 05/03/2018
 * Time: 22:02
 */
//require ('controle-de-session.php');
// on se connecte a la base de donnée.
require_once ('connect.php');

    if (!empty($_POST['nom']) && is_string($_POST['nom']) &&
        !empty($_POST['prenom']) && is_string($_POST['prenom']) &&
        !empty($_POST['email']) && is_string($_POST['email']) &&
        !empty($_POST['password']) && is_string($_POST['password']) &&
        !empty($_POST['tel']) && is_string($_POST['tel']) &&
        !empty($_POST['adresse']) && is_string($_POST['adresse'])
    ) {
        $sql = "INSERT INTO `users`(`nom`, `prenom`, `mail`, `adresse`, `telephone`, `date_inscription`, `niveau_forfait`, `niveau_formation`, `last_session`, `mdp`) 
                VALUES (:nom, :prenom, :email, :adresse, :tel, NOW(), NULL, NULL, NOW(), :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nom', $_POST['nom']);
        $stmt->bindValue(':prenom', $_POST['prenom']);
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->bindValue(':password', $_POST['password']);
        $stmt->bindValue(':tel', $_POST['tel']);
        $stmt->bindValue(':adresse', $_POST['adresse']);
        $stmt->execute();
        header('Location:../fr/dashboard.php');
        exit();
    }



