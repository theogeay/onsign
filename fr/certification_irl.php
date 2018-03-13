<?php
$title = "Certification IRL"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white"; // background_color du main


require_once ('../admin/connect.php');
require_once ('../admin/controle-de-session.php');
include('../include/header_cours.php');// nav + pop up

// systeme de grid en 12 colonnes fait avec le css de materialize

// LE CSS ACTUELL QUI FONCTIONNE EST STYLE2.CSS

// NE PAS SUPPRIMER STYLE.CSS POUR L'INSTANT
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $sql = "INSERT INTO `cours_irl`(`lieu_rdv`, `id_user`, `question`, `feedback`)
    VALUES (:lieu_rdv, :id_user, :question, :feedback)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':lieu_rdv', $_POST['lieu_rdv'], PDO::PARAM_STR);
    $stmt->bindValue(':id_user', $_SESSION['id'], PDO::PARAM_STR);
    $stmt->bindValue(':question', $_POST['question'], PDO::PARAM_STR);
    $stmt->bindValue(':feedback', $_POST['feedback']);
    $stmt->execute();
		echo '<div class="row container orange white-text padding-2">Vous avez pris un rendez-vous ! pour revenir sur votre espace cliquez <a href="dashboard.php">içi</a></div>';

}

?>

<section class="white flex-col-center">
    <div class="container">
        <div class="row">
            <div class="col s12 flex-col padding">
                <h1 class="margin-auto black-text">Certification IRL</h1>
                <h2>Il est temps !</h2>
                <p>Cela fait plus de 3 mois  que chaque jour vous en apprenez de plus en plus sur le langage des signes.
                    Après avoir passé les niveaux A1, A2 ou B1, B2 il est temps pour vous de passer à la certification orale
                    avec un de nos agréés professionnels du langage des signes afin de récupérer ce diplôme tant attendu, en attendant, n'hésitez pas partager vos conseils sur notre Tchat !
                </p>

                <p>Les démarches à faire sont les suivantes :</p>
                <ol>
                    <li>Prendre rendez-vous dans un de nos centres agréés.</li>
                    <li>Continuez à travailler la LSF avant votre examen.</li>
                    <li>Le jour J venez passer votre examen IRL et repartez avec votre diplôme.</li>
                </ol>
                <p>
                    Durant la journée de certification vous aurez l’occasion de rencontrer de nombreuses personnes de votre région avec qui vous

                    Pourrez discuter de votre expérience Onsign. Voir même garder contact avec certains d’entre eux pour continuer à perfectionner votre langue des signes.
                    Au Fur et à mesure de la journée, vous serez amené à passer un examen en groupe afin de voir votre niveau de langue des signes dans une situation de groupe, puis un examen personnel avec un professionnel de la LSF.
                    À la suite de cette journée et de la réponse des examinateurs qui vous auront observé durant vos examens, il vous sera remis un diplôme certifié par l’état.

                </p>
            </div>
        </div>

    </div>
</section>

<section class="blue">
    <div class="container">
        <div class="row padding">
            <h2 class="center-align white-text">Rendez-vous pour la certifiaction</h2>
        </div>

        <form class="" method="post" action="#">

           
               

            <div class="row">
                <label for="lieu_examen" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Lieu & date de l'examen</label>
                <select name="lieu_rdv" title="lieu_examen" class="browser-default col s10 offset-s1 m7 l7">
                    <option value="Paris">Paris - 12/05/2018 à 12h00</option>
                    <option value="Lyon">Lyon - 14/05/2018 à 12h00</option>
                    <option value="Toulouse">Toulouse - 18/05/2018 à 18h00</option>
                    <option value="Marseille">Marseille - 12/06/2018 à 12h30</option>
                </select>
            </div>

            

            <div class="row">
                <label for="info" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Comment avez-vous connu Onsign ?</label>
                <select name="question" title="info" class="browser-default col s10 offset-s1 m7 l7">
                    <option value="BO">Bouche à oreille</option>
                    <option value="Asso">Associations</option>
                    <option value="internet">Internet</option>
                    <option value="pub">Publicité</option>
                </select>
            </div>

            <div class="row">
                <label for="avis" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Donner nous votre avis sur Onsign</label>
                <textarea type="text" name="feedback" title="avis" class="col s10 offset-s1 m7 l7 browser-default white h-20"></textarea>
            </div>

            <div class="flex-col-center-sa w-100 h-15">
                <input type="submit" value="Envoyer" class="button button_orange w-40 margin-0">
            </div>
        </form>

    </div>

</section>

<?php include('../include/footer.php') // footer du site ?>
