<?php
$title = "Certification IRL"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white"; // background_color du main

include('../include/header.php');// nav + pop up

// systeme de grid en 12 colonnes fait avec le css de materialize

// LE CSS ACTUELL QUI FONCTIONNE EST STYLE2.CSS

// NE PAS SUPPRIMER STYLE.CSS POUR L'INSTANT

?>

<section class="white flex-col-center">
    <div class="container">
        <div class="row">
            <div class="col s12 flex-col padding">
                <h2 class="margin-auto">Certification IRL</h2>
                <h3>Il est temps !</h3>
                <p>Cela fait plus de 3 mois (c’est un exemple) que chaque jour vous en apprenez de plus en plus sur le langage des signes.
                    Après avoir passé les niveaux A1, A2, B1, B2 il est temps pour vous de passer à la certification orale
                    avec un de nos agréés professionnels du langage des signes afin de récupérer ce diplôme tant attendu.
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
                <label for="nom" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Nom</label>
                <input type="text" name="nom" title="nom" class="browser-default col s10 offset-s1 m7 l7">
            </div>

            <div class="row">
                <label for="prenom" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Prenom</label>
                <input type="text" name="prenom" title="prenom" class="browser-default col s10 offset-s1 m7 l7">
            </div>

            <div class="row">
                <label for="email" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Email</label>
                <input type="email" name="email" title="email" class="browser-default col s10 offset-s1 m7 l7">
            </div>

            <div class="row">
                <label for="adresse" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Adresse</label>
                <input type="text" name="adresse" title="adresse" class="browser-default col s10 offset-s1 m7 l7">
            </div>

            <div class="row">
                <label for="niveau" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Niveau</label>
                <select title="niveau" class="browser-default col s10 offset-s1 m7 l7">
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                </select>
            </div>

            <div class="row">
                <label for="lieu_examen" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Lieu Examen</label>
                <select title="lieu_examen" class="browser-default col s10 offset-s1 m7 l7">
                    <option value="Paris">Paris</option>
                    <option value="Lyon">Lyon</option>
                    <option value="Toulouse">Toulouse</option>
                    <option value="Marseille">Marseille</option>
                </select>
            </div>

            <div class="row">
                <label for="date" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Date du rdv</label>
                <input type="text" name="date" title="date" class="col s10 offset-s1 m7 l7 datepicker browser-default">
            </div>

            <div class="row">
                <label for="time" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Heure du rdv</label>
                <input type="text" name="time" title="time" class="col s10 offset-s1 m7 l7 timepicker browser-default">
            </div>

            <div class="row">
                <label for="info" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Comment avez-vous connu Onsign ?</label>
                <select title="info" class="browser-default col s10 offset-s1 m7 l7">
                    <option value="Paris">Paris</option>
                    <option value="Lyon">Lyon</option>
                    <option value="Toulouse">Toulouse</option>
                    <option value="Marseille">Marseille</option>
                </select>
            </div>

            <div class="row">
                <label for="avis" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Donner nous votre avis sur Onsign</label>
                <textarea type="text" name="avis" title="avis" class="col s10 offset-s1 m7 l7 browser-default white h-20"></textarea>
            </div>




            <div class="flex-col-center-sa w-100 h-15">
                <input type="submit" value="Envoyer" class="button orange text-white w-40 margin-0">
            </div>
        </form>

    </div>

</section>

<?php include('../include/footer.php') // footer du site ?>
