<?php
$title = "Cours"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white"; // background_color du main

require_once ('../admin/connect.php');
require_once ('../admin/controle-de-session.php');
include('../include/header_cours.php');// nav + pop up

$sql = "SELECT * FROM `quizz` WHERE id_cours = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$element = $stmt -> fetch();

$cours = "SELECT id_cours FROM `cours` WHERE id_cours = :id";
$stmt1 = $pdo->prepare($cours);
$stmt1->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$stmt1->execute();
$cours1 = $stmt1 -> fetch();
//
//$random = random_int(1 , 3);


//if ($random === 1) {
//    $video = 'video1';
//} elseif ($random === 2){
//    $video = 'video2';
//} elseif ($random === 3){
//    $video = 'video3';
//}

//var_dump($_POST['question']); 
//if ($_POST['question'] == 'mot' . '.mp4'){
//	echo('ok'); 
//}else{
//	echo('non'); 
//}
//var_dump($element['video1']); 

//if (isset($_POST['submit'])) {
//	if (isset($_POST['1'])) {
//		echo "oui";
//	} else {
//		echo "ta mere";
//	}
//
//}
//
//$question= $_POST['question'] ;
//var_dump($question); 

//var_dump($element['mot'] . '.mp4'); 
//var_dump($_POST['question']); 


if(isset($_POST['submit']))
{


if ($_POST['question'] === $element['mot'] . '.mp4'){
	echo 'validé'; 
	$quizz = "UPDATE `quizz` SET reussi = 1 WHERE id_cours = :id_cours";
    $stmt2 = $pdo->prepare($quizz);
    $stmt2->bindValue(':id_cours', $cours1['id_cours'], PDO::PARAM_INT);
    $stmt2->execute();
}else{
	echo'Essayez encore'; 
}
}; 
?>

<section class="white flex-col-center">

    <div class="container">
        <div class="row center-align">
            <h1 class="black-text">Quizz</h1>
            <h2 class="hidden"><?=$cours1['id_cours']?></h2>
        </div>
        <div class="row">
        <div class="col s12 m8 offset-m2 l8 offset-l2">

            <div class="row">
                <h5 class="col s10 offset-s1">Comment dit-on <?=$element['mot']?> en LSF ?</h5>
            </div>

        </div>
        </div>

        <div class="row">
            <div class="col s12 m10 offset-m1 l10 offset-l1">

            <form action="quizz.php?id=<?=$element['id_cours']?>" method="post">
                <div class="col s12 m4 l4 ">
                    <video class="responsive-video" muted autoplay loop>
                        <source src="../video/<?=$element['video1']?>" type="video/mp4" >
                    </video>
                    <input name="question" type="radio" value="<?=$element['video1']?>" id="1"/>
                    <label for="1"></label>
                </div>

                <div class="col s12 m4 l4 ">
                    <video class="responsive-video" muted autoplay loop>
                        <source src="../video/<?=$element['video2']?>" type="video/mp4" >
                    </video>
                    <input name="question" type="radio" value="<?=$element['video2']?>" id="2" />
                    <label for="2"></label>
                </div>

                <div class="col s12 m4 l4 ">
                    <video class="responsive-video" muted autoplay loop>
                        <source src="../video/<?=$element['video3']?>" type="video/mp4" >
                    </video>
                    <input name="question" type="radio" value="<?=$element['video3']?>" id="3" />
                    <label for="3"></label>
                </div>

            

                <div class="row"></div>

            <div class="row">
                <a href="dashboard.php" title="" class="button button_white_orange col s8 offset-s2 m4 push-m1 l4 push-l1">Quitter</a>
                <input type="submit" name="submit" class="button button_orange col s8 offset-s2 m4 push-m3 l4 push-l3" value="valider">

            </div>
							</form>
        </div>
        </div>


    </div>

</section>

<?php include('../include/footer.php') // footer du site ?>
