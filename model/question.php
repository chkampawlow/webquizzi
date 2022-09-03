<?PHP
	

	class question{
		private ?int $idquest =null;
        private ?string $quest =null;
		private ?string $rep1 =null ;
        private ?string $rep2 =null ;
        private ?string $rep3 =null ;
        private ?string $repv =null ;
		




		
		function __construct(string $quest,string $rep1,string $rep2,string $rep3,string $repv){
			

            $this->quest=$quest;
			$this->rep1=$rep1;
            $this->rep1=$rep2;
            $this->rep1=$rep3;
            $this->rep1=$repv;

			
            

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
			return $this->rep1;
		}
		
		
		function setquest(string $quest): void{
			$this->quest=$quest;
		}
		function setrep1(string $rep1): void{
			$this->rep1=$rep1;
		}
        function setrep2(string $rep1): void{
			$this->rep1=$rep1;
		}
        function setrep3(string $rep1): void{
			$this->rep1=$rep1;
		}
        function setrepv(string $rep1): void{
			$this->rep1=$rep1;
		}

		
	}


?>

	
	

	
	

