<?PHP
	include "../config.php";
	require_once '../Model/article.php';
	require_once '../Model/commentaire.php';

	class articleC {

        function ajouterArticle($article){
            $sql="INSERT INTO article (titleA, imageA, descreptionA) 
			VALUES (:titleA,:imageA,:descreptionA)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'titleA' => $article->getTitleA(),
                    'imageA' => $article->getImageA(),
					'descreptionA' => $article->getDescreptionA(),
					
				]);
				
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
			}
        }


        function afficherarticle(){
			
				$sql="SELECT * FROM article ORDER BY dateA DESC ";
				
			
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerarticle($id){
			$sql="DELETE FROM article WHERE id= :id";
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
		function modifierarticle($article, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE article SET
					    titleA = :titleA,
						imageA= :imageA,
						descreptionA= :descreptionA,
					WHERE id = :id'
				);
				$query->execute([
					'titleA' => $article->geTitleA(),
					'imageA' => $article->getImageA(),
					'descreptionA' => $article->getDescreptionA(),
					'id' => $id
				]);
				//var_dump($query);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function recupererarticle($id){
			$sql="SELECT * from article WHERE id=$id";
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
		
		function affichercomment($id){
			
			$sql="SELECT * FROM data WHERE IDarticle=$id";
			
		
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}

	function ajouterComment($commentaire){
		$sql="INSERT INTO data (nom, prenom, commentaire, IDarticle) 
		VALUES (:nom, :prenom, :commentaire, :IDarticle)";
		$db = config::getConnexion();
		try{
			$query = $db->prepare($sql);

			$query->execute([
				'nom' => $commentaire->getNom(),
				'prenom' => $commentaire->getPrenom(),
				'commentaire' => $commentaire->getcommentaire(),
				'IDarticle' =>$commentaire->getIDarticle()
			]);
		}
		catch (Exception $e){
			echo 'Erreur: '.$e->getMessage();
		}
	}
		

		
		

	}



?>