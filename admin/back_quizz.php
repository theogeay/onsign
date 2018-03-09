<?php
$title = "Onsign - Back end"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white";// background_color du main
$titre = "Quizz";

include('../include/header_back.php');// nav + pop up
require_once('../admin/connect.php');
// systeme de grid en 12 colonnes fait avec le css de materialize

// LE CSS ACTUELL QUI FONCTIONNE EST STYLE2.CSS

// NE PAS SUPPRIMER STYLE.CSS POUR L'INSTANT

$sql = "SELECT `id_cours`, `titre`, `niveau`, `texte_cours`, `video_cours` FROM `cours`";
// premiere etape, le prepare
$stmt = $pdo->prepare($sql);
$stmt->execute();
$cours = $stmt -> fetchAll();


?>

<section class="white flex-col-center">
    <div class="container">
        <h4><a href="ajouter_quizz.php">Ajouter un quizz</a></h4>
        <table class="responsive-table highlight">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Niveau</th>
                <th>Texte du cours</th>
                <th>Vidéo du cours</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ( $cours as $value ) : ?>
            <tr>
                <td><?= $value['titre'] ?></td>
                <td><?= $value['niveau'] ?></td>
                <td><?= $value['texte_cours'] ?></td>
                <td><?= $value['video_cours'] ?></td>
                <td>
                    <a href="modifier_quizz.php?id=<?=$value['id_cours']?>">
                        <i class="material-icons">create</i>
                    </a>
                </td>
                <td>
                    <a onclick="return confirm('T sûr ??')" href="supprimer_quizz.php?id=<?=$value['id_cours']?>">
                        <i class="material-icons text-orange">delete</i>
                    </a>
                </td>
            </tr>
            <?endforeach;?>
            </tbody>
        </table>

    </div>
</section>

<?php include('../include/footer_back.php');


