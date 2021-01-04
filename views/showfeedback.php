<?PHP
	include "../controller/commentaireC.php";

	$commentaireC=new commentaireC();
	$listeUsers=$commentaireC->affichercommentaire();

?>

<?php

session_start();
if (isset($_GET['supprimer'])){

    $_SESSION['message'] = "commentaires supprimé avec succès!";
    $_SESSION['msg_type'] = "danger";
    header("location: ../views/showfeedback.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>liste de Feedbacks</title>
       <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
       <link href="../css/style.css" rel="stylesheet" type="text/css">
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       <link href="https://fonts.googleapis.com/css?family=open+sans:400,300,600,700,800" rel="stylesheet" type="text/css">
       <link href="https://fonts.googleapis.com/css?family=open+sans+consedered:300,700" rel="stylesheet" type="text/css">
       <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
       <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    </head>
    <body>
    
       <?php  if (isset($_SESSION['message'])): ?>
        
        <div  class="alert alert-<?=$_SESSION['msg_type']?>"> 
          <?php 
              echo $_SESSION['message'];
              unset ($_SESSION['message']);
          ?>
        </div>
      <?php endif ?>
<br>
     <table>
       <tr> Sort by </tr>
       <tr>
        <label> 
       
				 <select class="btn btn-default" name="Sort by">
					<option type="submit" value="no">Nom</option> 
          <option type="submit" value="pr">Prenom</option> 
          <option type="submit" value="pr">date</option>
          
         </select>
         
        </labes>
       </tr>
       </table>
       
    <table  border="4" class="table" align="center">
        <thread>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>commentaire</th>
                <th colspan="2">Action</th>
            </tr>
        </thread>
        <?PHP
				foreach($listeUsers as $user){
		?>
     
     <tr>
	    <td><?PHP echo $user['Nom']; ?></td>
	    <td><?PHP echo $user['Prenom']; ?></td>
	    <td><?PHP echo $user['Email']; ?></td>
	    <td><?PHP echo $user['commentaire']; ?></td>
	    <td>
        
			<form method="POST" action="supprimercommentaire.php">
      <input type="submit" class="btn btn-danger" name="supprimer" value="supprimer">
			<input type="hidden" value=<?PHP echo $user['Id']; ?> name="id">
      </form>
        </td><td>
      <form method="POST" action="editercommentaire.php">
      <input type="submit" class="btn btn-primary" name="editer" value="editer">
			<input type="hidden" value=<?PHP echo $user['Id']; ?> name="id">
      </form>
      
		</td>
     </tr> 
     <?PHP
		}
	 ?>
 
    </table>  
 
   </body>
</html>