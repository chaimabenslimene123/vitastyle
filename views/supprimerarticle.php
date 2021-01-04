<?PHP
	include "../controller/articleC.php";

	$articleC=new articleC();
	
	if (isset($_POST["id"])){
		$articleC->supprimerarticle($_POST["id"]);
		header('Location:listearticleadmin.php');
	}

?>