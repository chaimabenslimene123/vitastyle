<?PHP
	class Commentaire{
		private ?string $nom = null;
		private ?string $prenom = null;
		private ?string $email = null;
		private ?string $commentaire;
		private ?string $IDarticle;


		function __construct(string $nom, string $prenom, string $email, string $commentaire, string $IDarticle){
			
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->commentaire=$commentaire;
			$this->IDarticle=$IDarticle;


		}


		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
		}
		function getEmail(): string{
			return $this->email;
		}
		function getCommentaire(): string{
			return $this->commentaire;
		}
		function getIDarticle(): string{
			return $this->IDarticle;
		}
        function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): void{
			$this->prenom;
		}
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setCommentaire(string $commentaire): void{
			$this->commentaire=$commentaire;
		}

	}
?>