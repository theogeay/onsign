<?php
$title = "Votre profil";
$description = "écrire la meta description de la page";
$main_color = "white";
include('../include/header.php');

//connexion BDD 
require_once('../admin/connect.php');
// affichage table 
$profil = $pdo->query('SELECT * FROM users'); 
$profils = $profil->fetch(PDO::FETCH_ASSOC);


?>
<section class="flex-col-center container">
    
        <div class="flex-col-center row m-top-30px col s12">
					<h1>Votre profil</h1>
								<div class="flex-start w-60">
									<div ><img class="photoprofil" alt="photo de profil Onsign" src="../images/exemple.jpg">
									<a href="#">Modifier</a></div>
		</div>
	
        </div>
	

			<form method="post" action="" class="w-60 flex-sa m-bot-30px row ">
            <div class="flex-col-center col s12 l6 m6"><div class="hidden">
                <p>id</p>
                <input class="browser-default" name="id"  >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Nom</p>
                <input value="<?=$value['nom']?>" class="browser-default"  name="nom"  >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Prénom</p>
                <input class="browser-default"  name="prenom">
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Mail</p>
                <input class="browser-default"  name="mail"  >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Adresse</p>
                <textarea name="adresse"  ></textarea>
            </div>
							</div>
					<div class="flex-col-center col s12 l6 m6">
            <div class="flex-sb m-top-5px w-85">
                <p>Téléphone</p>
                <input class="browser-default"  name="telephone"  >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Pseudo</p>
                <input class="browser-default"  name="pseudo"  >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Mot de passe</p>
                <input class="browser-default"  name="mdp"  >
            </div>
            <button class="button orange w-85 m-bot-10px">Enrgistrer les changements</button>
						</div>
        </form>
    
			

        
</section>
<?php include('../include/footer.php') ?>
