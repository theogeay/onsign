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
    if(isset($_POST['envoyer'])) {
        $modif = "UPDATE users SET 
nom = :nom, 
prenom = :prenom, 
mail = :mail, 
adresse = :adresse, 
telephone = :telephone, 
mdp = :mdp, 
pseudo = :pseudo, 
photo = :photo 
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
        $stmt2->bindValue(':photo', $_POST['photo']);
        var_dump($stmt2->execute());
//    var_dump($stmt2->errorInfo());
        header('Location: profil.php');
        die();
    }

}


// modif image 



 if(!empty($_POST['submit']) && isset($_FILES['avatar']))
     {
         
         $destination = "../images/photo_profil/";
         
         $filename = basename($_FILES['avatar']['name']);

         
         move_uploaded_file($_FILES['avatar']['tmp_name'], $destination . $filename);
//var_dump($_FILES['avatar']['tmp_name']);
  //      die();
   }
include('../include/header.php');
?>
<section class="flex-col-center container">
    
        <div class="flex-col-center row m-top-30px col s12">
					<h1>Votre profil</h1>
								
	
        </div>

<div class="flex-start w-60">
    <div>
        <img class="photoprofil" name="photo" alt="photo de profil Onsign" src="<?='../images/photo_profil/' . $value['photo'] ?>">
        <form enctype="multipart/form-data" action="profil.php?id=<?= $value['id'] ?>" method="post">
            <input type="file" name="avatar" />
            <input type="submit" value="upload" name="submit">
        </form>
    </div>
		</div>
			<form action="profil.php?id=<?= $value['id'] ?>" method="post" class="w-60 flex-sa m-bot-30px row ">
					
            <div class="flex-col-center col s12 l6 m6">
                <div class="hidden">
                <p>id</p>
                <input value="<?=$value['id']?>" class="browser-default" name="id"  >
            </div>
						
            <div class="flex-sb m-top-5px w-85">
                <p>Nom</p>
                <input value="<?=$value['nom']?>" class="browser-default"  name="nom"  >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Prénom</p>
                <input class="browser-default"  name="prenom" value="<?=$value['prenom']?>" >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Mail</p>
                <input value="<?=$value['mail']?>"  class="browser-default"  name="mail"  >
            </div>
						<div class="flex-sb m-top-5px w-85">
                <p>Adresse</p>
                <textarea    name="adresse"  ><?=$value['adresse']?></textarea>
            </div>
							</div>
					<div class="flex-col-center col s12 l6 m6">

            <div class="flex-sb m-top-5px w-85">
                <p>Téléphone</p>
                <input value="<?=$value['telephone']?>"  class="browser-default"  name="telephone"  >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Pseudo</p>
                <input value="<?=$value['pseudo']?>"  class="browser-default"  name="pseudo"  >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Mot de passe</p>
                <input value="<?=$value['mdp']?>"  class="browser-default"  name="mdp"  >
            </div>
            <button type="submit" name="envoyer" class="button orange w-85 m-bot-10px">Enrgistrer les changements</button>
						</div>
        </form>
    
			

        
</section>
<?php include('../include/footer.php') ?>
