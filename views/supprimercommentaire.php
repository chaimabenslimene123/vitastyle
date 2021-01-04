<?PHP
	include "../controller/commentaireC.php";

	$commentaireC=new commentaireC();
	
	if (isset($_POST["id"])){
		$commentaireC->supprimercommentaire($_POST["id"]);
		header('Location:showfeedback.php');
	}

?>