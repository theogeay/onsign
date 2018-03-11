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
require_once('connect.php');

// si pas d'id dans l'URL, on arrete
/*if(!isset($_GET['id'])){
    die('L\'id pas spécifiée!');
}
// requete SQL
$sql = "SELECT `id_cours` FROM `cours` WHERE id_cours = :id";
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
*/
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $sql = "INSERT INTO `quizz`(`id_cours`, `question`, `video1`, `video2`, `video3`, `reussi`)
    VALUES (:id_cours, :question, :video1, :video2, :video3, NULL)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id_cours', $_POST['id_cours'], PDO::PARAM_INT);
    $stmt->bindValue(':question', $_POST['question'], PDO::PARAM_STR);
    $stmt->bindValue(':video1', $_FILES['video1']['name']);
    $stmt->bindValue(':video2', $_FILES['video2']['name']);
    $stmt->bindValue(':video3', $_FILES['video3']['name']);
    $stmt->execute();

}

	if(!empty($_POST['submit']) && isset($_FILES['video']))
     {

         $destination = "../video/";

         $filename = basename($_FILES['video']['name']);

         move_uploaded_file($_FILES['video']['tmp_name'], $destination . $filename);
         //header('Location: back_cours.php');

   }

//include('../include/header_back.php');?>

<section class="white">
    <div class="container">
        <div class="row padding">
            <h2 class="center-align blue-text">Ajouter un Quizz</h2>
        </div>

        <form method="post" enctype="multipart/form-data" action="<?= $_SERVER['PHP_SELF'] ?>">

            <div class="row hidden">
                <label for="id_cours" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">id_cours</label>
                <input type="text" name="id_cours" title="id_cours" value="1"  class="browser-default col s10 offset-s1 m7 l7">
            </div>

            <div class="row">
                <label for="question" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Question</label>
                <input type="text" name="question" title="question" class="browser-default col s10 offset-s1 m7 l7">
            </div>

            <div class="row">
                <label for="file" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Vidéo des Quizz</label>
                <input type="file" title="video1" name="video1" class="browser-default col s10 offset-s1 m7 l7"/>
            </div>

            <div class="row">
                <label for="file" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Vidéo des Quizz</label>
                <input type="file" title="video2" name="video2" class="browser-default col s10 offset-s1 m7 l7"/>
            </div>

            <div class="row">
                <label for="file" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Vidéo des Quizz</label>
                <input type="file" title="video3" name="video3" class="browser-default col s10 offset-s1 m7 l7"/>
            </div>

            <div class="flex-col-center-sa w-100 h-15">
                <input type="submit" name="submit" value="upload" class="button button_orange w-40 margin-0">
            </div>
        </form>

    </div>

</section>

<?php include('../include/footer_back.php');