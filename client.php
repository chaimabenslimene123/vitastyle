<?PHP
	class client {
		private  $idu = null;
		private  $Email = null;
		private  $password = null;
		
		
		
		function __construct( string  $Email, string $password)
		{
			
			$this->Email=$Email;
			$this->password=$password;
		
			
		}
		
		function getidu(): int{
			return $this->idu;
		}
		function getEmail(): string{
			return $this->Email;
		}
		function getpassword(): string{
			return $this->password;
		}
		

		function setEmail(string $Email): void{
			$this->Email=$Email;
		}
		function setpassword(string $password): void{
			$this->password;
		}

		
	}
?>