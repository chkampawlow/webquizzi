<?PHP
	

	class util{
		private ?int $idutil =null;
        private ?string $first_name =null;
		private ?string $last_name =null ;
        private ?string $email =null ;
        private ?string $password =null ;
        private ?string $typeutil =null ;
		




		
		function __construct(string $first_name,string $last_name,string $email/*,string $password,string $typeutil*/){
			

            $this->first_name=$first_name;
			$this->last_name=$last_name;
            $this->email=$email;
            //$this->password=$password;
            //$this->typeutil=$typeutil;

			
            

		}
		

		function getfirst_name(){
			return $this->first_name;
		}
		function getlast_name(){
			return $this->last_name;
		}
        function getemail(){
			return $this->email;
		}
        function getpassword(){
			return $this->password;
		}
        function gettypeutil(){
			return $this->typeutil;
		}
		
		
		function setfirst_name(string $first_name): void{
			$this->first_name=$first_name;
		}
		function setlast_name(string $last_name): void{
			$this->last_name=$last_name;
		}
        function setemail(string $email): void{
			$this->email=$email;
		}
        function setpassword(string $password): void{
			$this->password=$password;
		}
        function settypeutil(string $typeutil): void{
			$this->typeutil=$typeutil;
		}

		
	}


?>

	
	

	
	

