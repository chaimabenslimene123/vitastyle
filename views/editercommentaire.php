 <?php
	include "../controller/commentaireC.php";
	include_once '../model/commentaire.php';

	$commentaireC = new commentaireC();
	$error = "";
	
	if (
		isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) && 
        isset($_POST["commentaire"])
	){
		if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["commentaire"])
        ) {
            $commentaire = new commentaire(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['email'],
                $_POST['commentaire']
			);
			
            $commentaireC->modifiercommentaire($commentaire, $_GET['id']);
            var_dump($commentaire);
            header('refresh:5;url=showfeedback.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>editer commentaire</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	<body>
		<button><a href="showfeedback.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_POST['id'])){
                $commentaire = $commentaireC->recuperercommentaire($_POST['id']);
                var_dump($commentaire);
		?>
		<form action="showfeedback.php" method="POST">
            <table align="center" border=4>
                <tr>
                    <td rowspan='5' colspan='1'>
						Fiche Personnelle
					</td>
                   
				</tr>
				<tr>
					<td>
						<label for="nom">Nom:
						</label>
					</td>
					<td>
						<input type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $commentaire['Nom']; ?>"disabled>
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="prenom">Prénom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" maxlength="20" value = "<?php echo $commentaire['Prenom']; ?>"disabled></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email"  value = "<?php echo $commentaire['Email']; ?>"disabled>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="commentaire">commentaire:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="commentaire" id="commentaire"  value = "<?php echo $commentaire['commentaire']; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" class="btn btn-success" name = "modifer"> 
                    </td>
                    <td>
                       <button class="btn btn-danger"><a href="showfeedback.php">Annuler</a></button>
                       
                        
                    </td>
                </tr>
            </table>
        </form>
		<?php
            }
        ?>
        
	</body>
</html>

