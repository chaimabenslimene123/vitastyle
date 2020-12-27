<?php
    include_once '../Model/reservation.php';
    include_once '../Controller/evenementC.php';

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new evenementC();
    if (
        
        isset($_POST["Type_de_paiment"]) &&
        isset($_POST["Num_de_la_carte"]) && 
        isset($_POST["Code_de_la_carte"]) &&
        isset($_POST["Person"]) && 
        isset($_POST["Date_dexpiration"]) && 
        isset($_POST["Ticket"])
    ) {
        if (
            !empty($_POST["Type_de_paiment"]) && 
            !empty($_POST["Num_de_la_carte"]) && 
            !empty($_POST["Code_de_la_carte"]) && 
            !empty($_POST["Person"]) && 
            !empty($_POST["Date_dexpiration"]) && 
            !empty($_POST["Ticket"])
        ) {
            $user = new reservation(
                $_POST['Type_de_paiment'],
                $_POST['Num_de_la_carte'],
                $_POST['Code_de_la_carte'], 
                $_POST['Person'],
                $_POST['Date_dexpiration'],
                $_POST['Ticket']
            );
            $userC->ajouterreservation($user);
           // header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
       <!-- <button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>-->
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
            <tr> 
            <td>
            	<h5>Type_de_paiment</h5>
			
                <label class="container"> <p><img src ="image/visa.png" height="30" width="40"></p>
							  <input type="checkbox" name="Type_de_paiment" value=visa/ visa>
							 
					</label>
                    <label class="container"> <p><img src ="image/manster.png" height="30" width="40"></p>
							  <input type="checkbox" name="Type_de_paiment" value=manster/ master>
							
						
				 </td> </tr>


<tr>
<td> 
        <label for="'Num_de_la_carte'">Num_de_la_carte:
        </label>
    </td>
    <td><input type="text" name="Num_de_la_carte" id="Num_de_la_carte" ></td>
</tr>
                   
                    
                <tr>
                    <td>
                        <label for="Code_de_la_carte">Code_de_la_carte:
                        </label>
                    </td>
                    <td><input type="password" name="Code_de_la_carte" id="Code_de_la_carte" ></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="Person"> Person:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="Person" id="Person" >
                    </td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="Date_dexpiration">Date_dexpiration:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="Date_dexpiration" id="Date_dexpiration" >
                    </td>
                </tr>

                
                <tr>
                    <td>
                    <label for="Ticket">Ticket </label>
						<select  name="Ticket" id="Ticket"> >
						    <option value="vip">VIP</option>
						    <option value="luxury">Luxury</option>
						    
						    <option value="normal">Normal</option>
						</select>
                    </td>
                </tr>
                



               
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>