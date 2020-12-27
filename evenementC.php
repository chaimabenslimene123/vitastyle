<?PHP
	include "../config.php";
	require_once '../Model/evenement.php';
	require_once '../Model/reservation.php';
	require_once '../Model/client.php';
	class evenementC {

		function ajouterreservation($ev){
			$sql="INSERT INTO reservation (Type_de_paiment, Num_de_la_carte, Code_de_la_carte,Person,Date_dexpiration,Ticket,id,idu) 
			VALUES (:Type_de_paiment, :Num_de_la_carte,:Code_de_la_carte,:Person,:Date_dexpiration,:Ticket,:id,:idu)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				
				$query->execute([
					'Type_de_paiment' => $ev->getType_de_paiment(),
					'Num_de_la_carte' => $ev->getNum_de_la_carte(),
					'Code_de_la_carte' => $ev->getCode_de_la_carte(),
                    'Person' => $ev->getPerson(),
                    'Date_dexpiration' => $ev->getDate_dexpiration(),
					'Ticket' => $ev->getTicket(),
					
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		} 
		
		function ajouterevenement($ev){
			$sql="INSERT INTO evenement (Nom, Date, Prix, Description) 
			VALUES (:Nom,:Date,:Prix, :Description)";
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
			
			$sql="SELECT * FROM evenement";
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

	

		function recupererreservation($id){
			$sql="SELECT * from reservation r,evenement e where e.id=$id";
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
		       function connexionUser($Email,$password){
				//$sql="INSERT INTO client (Email, password) 
				//VALUES (:Email, :password)";
			$sql="SELECT * FROM client WHERE Email='" . $Email . "' and password = '". $password."'";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				
				
					$query=$db->prepare($sql);
					$query->execute();
					$count=$query->rowCount();
                if($count==0) {
                    $message = "pseudo ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                    $message = $x['role'];
                }
            }
			catch (Exception $e){
				$message= " ".$e->getMessage();
		}
          return $message;
        }





				
		}
		
	

?>