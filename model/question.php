<?PHP
	

	class question{
		private ?int $idquest = null;
        private ?string $quest =null;
		private ?string $rep1 =null;
		private ?string $rep2 =null;
		private ?string $rep3 =null;
		private ?string $repv= null;
		private ?quizz $idquizz= null;





		
		function __construct( string $idquest, string $quest, string $rep1, int $repv){
			
			$this->idquest=$idquest;
            $this->quest=$quest;
			$this->rep1=$rep1;
			$this->rep2=$rep2;
			$this->rep3=$rep3;
			$this->repv=$repv;
			
            

		}
		function getidquest(){
			return $this->idquest;
		}
		function getquest(){
			return $this->quest;
		}
		function getrep1(){
			return $this->rep1;
		}
		function getrep2(){
			return $this->rep1;
		}
		function getrep3(){
			return $this->rep1;
		}
		function getrepv(){
			return $this->repv;
		}
		
		function setidquest(string $idquest): void{
			$this->idquest=$idquest;
		}
		function setquest(string $quest): void{
			$this->type=$quest;
		}
		function setrep1(string $rep1): void{
			$this->type=$rep1;
		}		
		function setrep2(string $rep1): void{
			$this->type=$rep1;
		}		
		function setrep3(string $rep1): void{
			$this->type=$rep1;
		}
		 function setrepv(string $repv): void
		{
			$this->repv= $repv;
		}
			
	}


?>

	
	

	
	

