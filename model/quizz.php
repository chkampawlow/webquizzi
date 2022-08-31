<?PHP
	

	class quizz{
		private ?int $idquizz =null;
        private ?string $nomquizz =null;
		private ?string $nbquest =null ;
		




		
		function __construct(string $nomquizz,string $nbquest){
			

            $this->nomquizz=$nomquizz;
			$this->nbquest=$nbquest;

			
            

		}
		
		function getidquizz(){
			return $this->idquizz;
		}
		function getnomquizz(){
			return $this->nomquizz;
		}
		function getnbquest(){
			return $this->nbquest;
		}
		
		
		function setnomquizz(string $nomquizz): void{
			$this->nomquizz=$nomquizz;
		}
		function setnbquest(string $nbquest): void{
			$this->nbquest=$nbquest;
		}

		
	}


?>

	
	

	
	

