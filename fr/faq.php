<?php
$title = "FAQ"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white"; // background_color du main

include('../include/header.php');// nav + pop up

// systeme de grid en 12 colonnes fait avec le css de materialize

// LE CSS ACTUELL QUI FONCTIONNE EST STYLE2.CSS

// NE PAS SUPPRIMER STYLE.CSS POUR L'INSTANT

?>

<section class="white flex-col">
    <div class="container">
        <div class="row">
            <h1 class="black-text">Foire aux questions</h1>
            <div class="col s12 m6 l6">
                <h2>Abonnements</h2>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="material-icons text-blue">compare_arrows</i>Quelle offre choisir ?</div>
                        <div class="collapsible-body"><span>Si vous n’avez jamais pratiqér le LSF et que vous n’avez aucune connaissance dans la langue des signes il est préférable de prendre l’abonnement débutant afin d’avoir les bases de la LSF. </span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons text-blue">credit_card</i>Quelles sont les moyens de paiements (moyens, modalités) ?</div>
                        <div class="collapsible-body"><span>
Vous pouvez régler en ligne par carte bancaire (Visa, Mastercard) et American Express. Nous ne sommes pas actuellement en mesure d'accepter les chèques, virements ou mandats. Nos offres sont facturées en un paiement unique lors de la souscription.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons text-blue">apps</i>Existe t’il une application ?</div>
                        <div class="collapsible-body"><span>Le site s’adapte automatiquement à votre écran, de ce fait il est aussi disponible aussi sur mobile ou tablettes.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons text-blue">extension</i>En étant abonné à la formule débutant, est il possible d’avoir accès au cours de la formule intermédiaire ?</div>
                        <div class="collapsible-body"><span>
Non, il faudra souscrire à la formule intermédiaire, ou contacter le support pour faire évoluer votre abonnement</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons text-blue">power_settings_new</i>Comment désactiver mon compte ?</div>
                        <div class="collapsible-body"><span>Il suffit de rentrer dans votre espace personnel puis cliquer sur "supprimer mon compte"</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons text-blue">delete</i>Résilier ?</div>
                        <div class="collapsible-body"><span>Il suffit de rentrer dans votre espace personnel puis cliquer sur "me désabonner"</span></div>
                    </li>
                </ul>

            </div>

            <div class="col s12 m6 l6">
                <h2>Contenu</h2>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="material-icons text-blue">file_download</i>Est-il possible de télécharger les cours ?</div>
                        <div class="collapsible-body"><span>Il est possible de télécharger les vidéos à des fins d’apprentissage uniquement. </span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons text-blue">language</i>Sur quoi ça porte ?</div>
                        <div class="collapsible-body"><span>L’ensemble du site porte sur la langue des signes ainsi que son apprentissage. </span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons text-blue">ondemand_video</i>Sous quelle forme ?</div>
                        <div class="collapsible-body"><span>Ce sont des cours sous formes de vidéos à suivre.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons text-blue">check_box</i>Comment me tester ?</div>
                        <div class="collapsible-body"><span>Des quizz sont disponibles à chaque fin de cours afin de valider vos compétences.</span></div>
                    </li>
                </ul>

            </div>
        </div>

    </div>
</section>

<?php include('../include/footer.php') // footer du site ?>
