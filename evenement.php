<?PHP
	class evenement {
		private  $id = null;
		private  $Nom = null;
		private  $Date = null;
		private  $Prix = null;
		private  $Description = null;
		
		
		function __construct( string  $Nom, string $Date, int $Prix, string $Description)
		{
			
			$this->Nom=$Nom;
			$this->Date=$Date;
			$this->Prix=$Prix;
			$this->Description=$Description;
			
		}
		
		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->Nom;
		}
		function getDate(): string{
			return $this->Date;
		}
		function getPrix(): string{
			return $this->Prix;
		}
		function getDescription(): string{
			return $this->Description;
		}
		

		function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setDate(string $Date): void{
			$this->Date;
		}
		function setPrix(string $Prix): void{
			$this->Prix=$Prix;
		}
		function setDescription(string $Description): void{
			$this->Description=$Description;
		}
		
	}
?>