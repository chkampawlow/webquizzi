<?PHP
	

	class cours {
		private ?int $idcours =null;
        private ?string $nomcours =null;
		private ?string $typecours =null ;
        private ?string $coursdes =null ;

        function __construct(string $nomcours,string $typecours,string $coursdes){
			

            $this->nomcours=$nomcours;
			$this->typecours=$typecours;
            $this->typecours=$coursdes;


			
            

		}

		function getnomcours(){
			return $this->nomcours;
		}

        function gettypecours(){
			return $this->typecours;
		}

        function getcoursdes(){
			return $this->coursdes;
		}
		
		
		function setnomcours(string $nomcours): void{
			$this->nomcours=$nomcours;
		}

        function settypecours(string $typecours): void{
			$this->typecours=$typecours;
		}

        function setcoursdes(string $coursdes): void{
			$this->coursdes=$coursdes;
		}



	}


?>

	
	

	
	

