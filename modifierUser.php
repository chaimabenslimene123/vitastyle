<?php
    include "../controller/evenementC.php";
    include_once '../Model/evenement.php';

	$evenementC = new evenementC();
	$error = "";

	if (
        isset($_POST["Nom"]) && 
        isset($_POST["Date"]) &&
        isset($_POST["Prix"]) && 
        isset($_POST["Description"]) 
    ){
		if (
            !empty($_POST["Nom"]) && 
            !empty($_POST["Date"]) && 
            !empty($_POST["Prix"]) && 
            !empty($_POST["Description"]) 

        ) {
            $user = new evenement(
                $_POST['Nom'],
                $_POST['Date'], 
                $_POST['Prix'],
                $_POST['Description'],
            );
            
            $evenementC->modifierevenement($user, $_GET['id']);
            header('Location:afficherevenements.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier evenement</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherevenements.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $evenementC->recupererevenement1($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="Nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="Nom" id="Nom"  value = "<?php echo $user->Nom; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Date">Date:
                        </label>
                    </td>
                    <td><input type="date" name="Date" id="Date"  value = "<?php echo $user->Date; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="Prix">Prix:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Prix" id="Prix" value = "<?php echo $user->Prix; ?>">
                    </td>
                </tr>
                <td>
                        <label for="Description">Description:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Description" id="Description" value = "<?php echo $user->Description; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>