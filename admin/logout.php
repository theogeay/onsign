<?php
// On démarre la session
require_once ('../admin/controle-de-session.php');
// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// On redirige le visiteur vers la page d'accueil
header ('location:../fr/index.php');
?>