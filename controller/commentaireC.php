<?PHP
	include "../config.php";
	require_once '../Model/commentaire.php';

	class commentaireC {

        function ajouterCommentaire($commentaire){
            $sql="INSERT INTO data (nom, prenom, email, commentaire, IDarticle) 
			VALUES (:nom,:prenom,:email, :commentaire, :IDarticle)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'nom' => $commentaire->getNom(),
                    'prenom' => $commentaire->getPrenom(),
                    'email' => $commentaire->getEmail(),
                    'commentaire' => $commentaire->getcommentaire(),
                    'IDarticle' => $commentaire->getIDarticle()
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }


        function affichercommentaire(){
			
				$sql="SELECT * FROM data";
				
			
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimercommentaire($id){
			$sql="DELETE FROM data WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifiercommentaire($commentaire, $id){
			try {
				echo "hh";
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE data SET
					    Nom = :nom,
						Prenom= :prenom,
						Email= :email,
						commentaire = :commentaire,
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $commentaire->getNom(),
					'prenom' => $commentaire->getPrenom(),
					'email' => $commentaire->getEmail(),
					'commentaire' => $commentaire->getCommentaire(),
					'id' => $id
				]);
				var_dump($query);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function recuperercommentaire($id){
			$sql="SELECT  from data where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		

		
		

	}



?>