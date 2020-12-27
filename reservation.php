<?PHP
	class reservation {
	
		private  $idr = null;
		private  $Type_de_paiment = null;
		private  $Num_de_la_carte = null;
		private  $Code_de_la_carte = null;
		private  $Person = null;
        private  $Date_dexpiration = null;
		private  $Ticket = null;
		private  $id = null;
		

		function __construct( string $Type_de_paiment ,string $Num_de_la_carte , string $Code_de_la_carte,int $Person ,string $Date_dexpiration,string $Ticket,int $id )
		{
			$this->Type_de_paiment =$Type_de_paiment ;
			$this->Num_de_la_carte =$Num_de_la_carte ;
			$this->Code_de_la_carte =$Code_de_la_carte;
			$this->Person=$Person;
            $this->Date_dexpiration=$Date_dexpiration;
			$this->Ticket=$Ticket;
			$this->id=$id;

		}
		function getidr(): int{
			return $this->idr;
		}
		function getid(): int{
			return $this->id;
		}
		function setid(int $id): void{
			$this->id=$id;
		}
		function getType_de_paiment(): string{
			return $this->Type_de_paiment;
		}

		
		function getNum_de_la_carte(): int{
			return $this->Num_de_la_carte;
		}
		function getCode_de_la_carte(): string{
			return $this->Code_de_la_carte;
		}
		function getPerson(): string{
			return $this->Person;
		}
		function getDate_dexpiration(): string{
			return $this->Date_dexpiration;
		}
        
        function getTicket(): string{
			return $this->Ticket;
		}

		function setType_de_paiment(string $Type_de_paiment): void{
			$this->Type_de_paiment=$Type_de_paiment;
		}

		
		function setNum_de_la_carte(int $Num_de_la_carte): void{
			$this->Num_de_la_carte=$Num_de_la_carte;
		}
		function setCode_de_la_carte(string $Code_de_la_carte): void{
			$this->Code_de_la_carte=$Code_de_la_carte;
		}
		function setPerson(int $Person): void{
			$this->Person=$Person;
        }
        function setDate_dexpiration(string $Date_dexpiration): void{
			$this->Date_dexpiration=$Date_dexpiration;
        }
        function setTicket(string $Ticket): void{
			$this->Ticket=$Ticket;
		}
		
	}
?>