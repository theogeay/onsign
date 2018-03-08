<?php
$title = "Onsign - Back end"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white";// background_color du main
$titre = "Cours";

include('../include/header_back.php');// nav + pop up
require_once ('../admin/connect.php');
// systeme de grid en 12 colonnes fait avec le css de materialize

// LE CSS ACTUELL QUI FONCTIONNE EST STYLE2.CSS

// NE PAS SUPPRIMER STYLE.CSS POUR L'INSTANT

$sql = "SELECT `id_cours`, `titre`, `niveau`, `photo_cours`, `texte_cours`, `video_cours` FROM `cours`";
// premiere etape, le prepare
$stmt = $pdo->prepare($sql);
$stmt->execute();
$cours = $stmt -> fetchAll();


?>

<section class="white flex-col-center">
    <div class="container">
        <table class="responsive-table">
            <thead>
            <tr>
                <?php foreach ( $cours[0] as $titles => $value ) : ?>
                    <th><?= $titles ?></th>
                <?php endforeach; ?>
                <th>Mod</th>
                <th>Suppr</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ( $cours as $value ) : ?>
            <tr>
                <td><?= $value['titre'] ?></td>
                <td><?= $value['niveau'] ?></td>
                <td><?= $value['photo_cours'] ?></td>
                <td><?= $value['texte_cours'] ?></td>
                <td><?= $value['video_cours'] ?></td>
                <td>
                    <a href="#">
                        <i class="material-icons">create</i>
                        <a href="ajouter.php">
                    </a>
                </td>
                <td>
                    <a onclick="return confirm('T sûr ??')" href="supprimer.php?id=<?=$value['id_cours']?>">
                        <i class="material-icons">delete</i>
                    </a>
                </td>
            </tr>
            <?endforeach;?>
            </tbody>
        </table>

    </div>
</section>

<?php include('../include/footer_back.php');


