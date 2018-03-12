<?php
$title = "Onsign"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "grey"; // background_color du main

require_once ('../admin/controle-de-session.php');
include('../include/header_cours.php');// nav + pop up

// systeme de grid en 12 colonnes fait avec le css de materialize

// LE CSS ACTUELL QUI FONCTIONNE EST STYLE2.CSS

// NE PAS SUPPRIMER STYLE.CSS POUR L'INSTANT


//connexion BDD 
require_once('../admin/connect.php');
//affchage								
$key = "SELECT id, niveau_formation FROM users WHERE id = :id";
$stmt = $pdo->prepare($key);
$stmt->bindValue(':id', $_SESSION['id']);
$stmt->execute();
$value = $stmt -> fetch();
//var_dump($value);


$sql = "SELECT `id_cours`, `titre`, `niveau`, `texte_cours`, `video` FROM cours WHERE niveau = :niveau";
$stmt2 = $pdo->prepare($sql);
$stmt2->bindValue(':niveau', $value['niveau_formation']);
$stmt2->execute();
$elements = $stmt2 ->fetchAll(PDO::FETCH_ASSOC);

$sql2 = "SELECT `id_cours` FROM quizz WHERE id_cours = :id";
$quizz = $pdo->prepare($sql2);
$quizz->bindValue(':id', $value['id']);
$quizz->execute();
$quizzAll = $stmt2 ->fetchAll(PDO::FETCH_ASSOC);




//var_dump ($elements); 
?>

<section class="white flex-col-center grey">
    <div class="container">
        <div class="row"></div>
<h2>Niveau Débutant</h2>
        <div class="row">
            <?php foreach ($elements as $key => $value) : ?>
            <div class="col s10 offset-s1 m4 l4">
                <div class="card hoverable z-depth-3">
                    <div class="card-image">
                        <img src="../images/home_section_certif.jpg">
                        <a href="cours.php?id=<?=$value['id_cours']?>" class="card-title"><?=$value['titre']?></a>
                    </div>
                    <div class="card-content">
                        <p><?php
        if(strlen($value['texte_cours']) > 100) {$value['texte_cours'] = substr($value['texte_cours'], 0, 100); }
        echo htmlentities($value['texte_cours']);?>...</p>
                    </div>
                    <div class="card-action blue center-align">
                        <a href="quizz.php?id=<?=$value['id_cours']?>" class="text-white margin-auto">Refaire le Quizz</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
           
<!--
            <div class="col s10 offset-s1 m4 l4">
                <div class="card hoverable z-depth-3">
                    <div class="card-image">
                        <img src="../images/home_section_certif.jpg">
                        <span class="card-title">Les bases de la lsf</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                    </div>
                    <div class="card-action orange center-align">
                        <a href="#" class="text-white margin-auto">Faire le Quizz</a>
                    </div>
                </div>
            </div>
-->

        </div>
	</div>
</section>

<?php include('../include/footer.php') // footer du site ?>
