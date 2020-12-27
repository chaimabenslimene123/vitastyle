<?PHP
	include "../config.php";
	require_once '../Model/evenement.php';

	class evenementC {
		
		function ajouterevenement($ev){
			$sql="INSERT INTO evenement (Nom, Date, Prix, Description) 
			VALUES (:Nom,:Date,:Prix, :Description)";
		  // WHERE Date BETWEEN '2020-12- 00:00:00' AND '2021-15-12'
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'Nom' => $ev->getNom(),
					'Date' => $ev->getDate(),
					'Prix' => $ev->getPrix(),
					'Description' => $ev->getDescription(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherevenements(){
			
			$sql="SELECT * FROM evenement ORDER BY Nom";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}


		function supprimerevenement($id){
			$sql="DELETE FROM evenement WHERE id= :id";
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
		function recupererevenement($id){
			$sql="SELECT * from evenement where id=$id";
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

		function modifierevenement($evenement, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE evenement SET 
						Nom = :Nom, 
						Date = :Date,
						Prix = :Prix,
						Description = :Description
						
					WHERE id = :id'
				);
				$query->execute([
					'Nom' => $evenement->getNom(),
					'Date' => $evenement->getDate(),
					'Prix' => $evenement->getPrix(),
					'Description' => $evenement->getDescription(),
				
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		function afficherreservation(){
			
			$sql="SELECT * FROM reservation r,evenement e WHERE r.id=e.id";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
	
		
		public function rechercherevenement($Nom) {            
            $sql = "SELECT * from evenement where Nom=:Nom"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'Nom' => $evenement->getNom(),
                ]); 
                $liste = $query->fetchAll(); 
                return $liste;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
		public function getevenementByNom($Nom) {
            try {
                $db = config:: getConnexion();
                $query = $db->prepare(
                    'SELECT * FROM evenement WHERE Nom = :Nom'
                );
                $query->execute([
                    'Nom' => $Nom
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
          
		

	}
?>