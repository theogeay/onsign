<?php
$title = "Votre profil";
$description = "écrire la meta description de la page";
include('../include/header.php');
?>
<section class="blue">
    <div class="w-60 white flex-col-center bloc_bordered">
        <div class="flex m-top-5px">
            <img alt="photo de profil Onsign" src="">
            <h1>Votre profil</h1>
        </div>
        <form method="post" action="" class="w-45 flex-col-center">
            <div class="hidden">
                <p>id</p>
                <input name="id"  >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Nom</p>
                <input name="nom"  >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Prénom</p>
                <input name="prenom"  ">
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Mail</p>
                <input name="mail"  >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Adresse</p>
                <textarea name="adresse"  ></textarea>
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Téléphone</p>
                <input name="telephone"  >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Pseudo</p>
                <input name="pseudo"  >
            </div>
            <div class="flex-sb m-top-5px w-85">
                <p>Mot de passe</p>
                <input name="mdp"  >
            </div>
            <button class="button orange w-45 m-bot-10px">Enrgistrer les changements</button>
        </form>
    </div>
</section>
<?php include('../include/footer.php') ?>
