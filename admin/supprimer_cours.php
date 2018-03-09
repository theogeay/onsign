<?php
/**
 * Created by PhpStorm.
 * User: zerbiclement
 * Date: 08/03/2018
 * Time: 18:58
 */
$title = "Onsign - Back end"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white";// background_color du main
$titre = "Quizz";


require_once('../admin/connect.php');

if(!isset($_GET['id'])){
    die('L\'id pas spécifiée!');
}
$sql = "DELETE FROM `cours` WHERE id_cours = :id";
// prepare
$stmt = $pdo->prepare($sql);
// bind
$stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
// execute
$stmt->execute();
// gestion des erreurs
if($stmt->errorCode() !== '00000'){
    die($stmt->errorInfo()[2]);
}
header('Location: back_cours.php');
die();
