<?php
require_once('connect.php');
require_once ('controle-de-session.php');
//--------------------------------

//if(isset($_POST['soumettre'])) {
	if(!empty($_POST['message']))
	{
        $sql = "INSERT INTO `tchat`(`id_user`, `prenom`, `message`, `date_time`) VALUES (:id_user, :prenom, :message, NOW())";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id_user', $_SESSION['id']);
        $stmt->bindValue(':prenom', $_SESSION['prenom']);
        $stmt->bindValue(':message', $_POST['message']);
        $stmt->execute();

	}
//}

$resultat = $pdo->query('SELECT `id_message`, `prenom`, `id_user`, `message`, `date_time` FROM tchat ORDER BY id_message DESC');
$messages = $resultat->fetchAll(PDO::FETCH_ASSOC);

/*$nouveauxMessages = '';
foreach ( $messages as $key => $value ) {
	$nouveauxMessages .= '
        <div class="row message-block" data-id-message="<?= $value[\'id_message\'] ?>">
            <div class="col s12 m6 offset-m6 l6 offset-l6 bloc_bordered blue text-white">
                <p><?= $_SESSION[\'prenom\'] ?></p>
                <p><?= $value[\'message\'] ?></p>
                <p class="right-align grey-text lighten-5"><?= $value[\'date_time\'] ?></p>
            </div>
        </div>
';*/

//}


/*$tableau = [
	'message' => $nouveauxMessages];
echo json_encode($tableau);
*/

?>

	
	
	
	
	
	
	
	
	
	
	