<?php
/**
 * Created by PhpStorm.
 * User: zerbiclement
 * Date: 09/03/2018
 * Time: 09:32
 */
$title = "Onsign - Back end"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white";// background_color du main
$titre = "Quizz";

require_once "connect.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sql = "UPDATE `cours` SET `titre`= :titre, `niveau`= :niveau, `texte_cours`= :texte_cours, `video_cours`= :video_cours WHERE id_cours = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
    $stmt->bindValue(':niveau', $_POST['niveau'], PDO::PARAM_STR);
    $stmt->bindValue(':texte_cours', $_POST['texte_cours'], PDO::PARAM_STR);
    $stmt->bindValue(':video_cours', $_POST['video_cours'], PDO::PARAM_STR);
    $stmt->bindValue(':id', $_POST['id_cours'], PDO::PARAM_INT);
    $stmt->execute();
    if($stmt->errorCode() !== '00000'){
        die($stmt->errorInfo()[2]);
    }
    header('Location: back_cours.php');
    die();
}
// si pas d'id dans l'URL, on arrete
if(!isset($_GET['id'])){
    die('L\'id pas spécifiée!');
}
// requete SQL
$sql = "SELECT `id_cours`, `titre`, `niveau`, `texte_cours`, `video_cours` FROM `cours` WHERE id_cours = :id";
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
// fetch (solo parce que un seul enregistrement renvoyé!)
$row = $stmt->fetch(PDO::FETCH_ASSOC);
// si le row est false, pas de données retournées par la requete
if(false === $row){
    die('L\'id n\'existe pas!');
}
include('../include/header_back.php');
?>

<section class="white">
    <div class="container">
        <div class="row padding">
            <h2 class="center-align blue-text">Modifier un Cours</h2>
        </div>

        <form class="" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">

            <div class="row hidden">
                <label for="id_cours" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">id_cours</label>
                <input type="text" name="id_cours" title="id_cours" value="<?=$row['id_cours']?>" class="browser-default col s10 offset-s1 m7 l7">
            </div>

            <div class="row">
                <label for="titre" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Titre</label>
                <input type="text" name="titre" title="titre" value="<?=$row['titre']?>" class="browser-default col s10 offset-s1 m7 l7">
            </div>

            <div class="row">
                <label for="niveau1" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Niveau</label>
                <select title="niveau1" name="niveau" class="browser-default col s10 offset-s1 m7 l7">
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                </select>
            </div>

            <div class="row">
                <label for="photo_cours" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Texte du cours</label>
                <input type="text" name="texte_cours" value="<?=$row['texte_cours']?>" title="texte_cours" class="browser-default col s10 offset-s1 m7 l7">
            </div>

            <div class="row">
                <label for="video_cours" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Vidéo du cours</label>
                <input type="text" name="video_cours" title="video_cours" value="<?=$row['video_cours']?>" class="browser-default col s10 offset-s1 m7 l7">
            </div>

            <div class="flex-col-center-sa w-100 h-15">
                <input type="submit" value="Envoyer" class="button orange text-white w-40 margin-0">
            </div>
        </form>

    </div>

</section>
<?php include('../include/footer_back.php');?>
