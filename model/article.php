<?PHP
	class article{
		private ?string $titleA = null;
		private ?string $imageA = null;
		private ?string $descreptionA = null;
        //private ?date $dateA = null ;


		function __construct(string $titleA, string $imageA, string $descreptionA/*, date $dateA*/){
			
			$this->titleA=$titleA;
			$this->imageA=$imageA;
			$this->descreptionA=$descreptionA;
            //$this->dateA=$dateA;

		}


		function getTitleA(): string{
			return $this->titleA;
		}
		function getImageA(): string{
			return $this->imageA;
		}
		function getDescreptionA(): string{
			return $this->descreptionA;
		}
		/*function getDateA(): string{
			return $this->dateA;
		}*/
		

        function setTitreA(string $titreA): void{
			$this->titreA=$titreA;
		}
		function setImageA(string $imageA): void{
			$this->imageA=$imageA;
		}
		function setDescreptionA(string $descreptionA): void{
			$this->descreptionA=$descreptionA;
		}
	/*	function setDateA(date $dateA): void{
			$this->dateA=$dateA;
        }*/


	}
?>