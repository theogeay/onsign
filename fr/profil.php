<?php
$title = "Votre profil";
$description = "écrire la meta description de la page";
$main_color = "white";
session_start();
//connexion BDD 
require_once('../admin/connect.php');
//affchage								
$sql = "SELECT * FROM `users` WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_SESSION['id']);
$stmt->execute();
$value = $stmt -> fetch();
if(isset($_POST['envoyer'])){
	
	if(!isset($_GET['id'])){
    die('L\'id pas spécifiée!');
}
	
	//modification
$modif = "UPDATE users SET 
nom = :nom, 
prenom = :prenom, 
mail = :mail, 
adresse = :adresse, 
telephone = :telephone, 
mdp = :mdp, 
pseudo = :pseudo
WHERE id = :id";
    $stmt2 = $pdo->prepare($modif);
  	$stmt2->bindValue(':id', $_SESSION['id']);
    $stmt2->bindValue(':prenom', $_POST['prenom']);
    $stmt2->bindValue(':nom', $_POST['nom']);
    $stmt2->bindValue(':mail', $_POST['mail']);
    $stmt2->bindValue(':adresse', $_POST['adresse']);
    $stmt2->bindValue(':telephone', $_POST['telephone']);
    $stmt2->bindValue(':mdp', $_POST['mdp']);
    $stmt2->bindValue(':pseudo', $_POST['pseudo']);
    var_dump($stmt2->execute());
//    var_dump($stmt2->errorInfo());
    header('Location: profil.php');
    die();

}



   
include('../include/header_cours.php');
?>
<section class="flex-col-center container">
    
        <div class="flex-col-center row m-top-30px col s12">
            <h1 class="black-text">Votre profil</h1>
        </div>

			<form action="profil.php?id=<?= $value['id'] ?>" method="post" class="w-60 flex-sa m-bot-30px row ">

            <div class="hidden">
                <label for="id">id</label>
                <input type="text" value="<?=$value['id']?>" class="browser-default" name="id"  >
            </div>

            <div class="row">
            <div class="flex-col col s12 m6 l6">
                <label for="nom">Nom</label>
                <input type="text" value="<?=$value['nom']?>" class="browser-default"  name="nom"  >
            </div>

            <div class="flex-col col s12 m6 l6">
                <label for="prenom">Prénom</label>
                <input type="text" class="browser-default"  name="prenom" value="<?=$value['prenom']?>" >
            </div>
            </div>

            <div class="row">
            <div class="flex-col col s12 m6 l6">
                <label for="mail">Mail</label>
                <input type="text" value="<?=$value['mail']?>"  class="browser-default"  name="mail"  >
            </div>

            <div class="flex-col col s12 m6 l6">
                <label for="adresse">Adresse</label>
                <textarea name="adresse"><?=$value['adresse']?></textarea>
            </div>
            </div>

            <div class="row">
            <div class="flex-col col s12 m6 l6">
                <label for="telephone">Téléphone</label>
                <input type="text" value="<?=$value['telephone']?>"  class="browser-default"  name="telephone"  >
            </div>

            <div class="flex-col col s12 m6 l6">
                <label for="pseudo">Pseudo</label>
                <input type="text" value="<?=$value['pseudo']?>"  class="browser-default"  name="pseudo"  >
            </div>
            </div>

            <div class="row">
            <div class="flex-col col s12 m6 l6">
                <label for="mdp">Mot de passe</label>
                <input type="password" value="<?=$value['mdp']?>"  class="browser-default"  name="mdp"  >
            </div>

            <div class="flex-col col s12 m6 l6">
                <label for="complement_adresse">Complément d'adresse</label>
                <textarea name="complement_adresse"><?=$value['complement_adresse']?></textarea>
            </div>
            </div>

                <button type="submit" name="envoyer" class="button button_orange col s12 m6 l6 pull-l3">Enregistrer</button>


        </form>

</section>
<?php include('../include/footer.php') ?>
