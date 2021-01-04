
<?php
include_once '../Model/commentaire.php';
include_once '../Controller/commentaireC.php';

$error = "";


$commentaire = null;

// create an instance of the controller
$commentaireC = new commentaireC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["commentaire"]) &&
    isset($_POST["IDarticle"])
) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["commentaire"]) &&
        !empty($_POST["IDarticle"])
    ) {
        $commentaire = new commentaire(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['commentaire'],
            $_POST['IDarticle']
            
        );
        $commentaireC->ajoutercommentaire($commentaire);
        
    }
    else
        $error = "Missing information";
}
?>
<?php

session_start();
if (isset($_POST['Envoyer'])){
   
  
    $_SESSION['message'] = "commentaire envoyé avec succès!";
    $_SESSION['msg_type'] = "success";
    header("location: ../views/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Feedback</title>
       <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
       <link href="../css/style.css" rel="stylesheet" type="text/css">
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
     
        <form action="" method="POST">
            <table border="4" align="center">

                <tr>
                    
                    <td>
                        <label for="Nom">Nom: </label>
                    </td>
                    <td>
                        <input type="text" name="nom" id="nom" maxlength="20" required >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Prenom">Prénom: </label>
                    </td>
                    <td>
                        <input type="text" name="prenom" id="prenom" maxlength="20" required >
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="Email">Adresse mail:</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" >
                    </td>
                </tr>
                <tr>
                    <td >
                        <label for="commentaire">commentaire: </label>
                    </td>
                     <td>
                          <textarea name="commentaire"  cols="22" rows="6" required ></textarea>
                     </td>
                    
                </tr>
                <input type="hidden" name="IDarticle" id="IDarticle"  value="1" >
                
                <tr>
                    <td>

                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary name="Envoyer"> Envoyer </button>
                    </td>
                   
                </tr>
            </table>
        </form>
    </body>
</html>