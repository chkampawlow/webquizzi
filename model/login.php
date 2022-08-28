<?PHP
	

	class login{
        private ?string $nomutil =null;
		private ?string $mail =null ;
		private ?string $pass= null;
		private ?string $type = null;




		
		function __construct(string $nomutil,string $mail,string $pass){
			

            $this->nomutil=$nomutil;
			$this->mail=$mail;
			$this->pass=$pass;

			
            

		}
		

		function getnomutil(){
			return $this->nomutil;
		}
		function getmail(){
			return $this->mail;
		}
		function getpass(){
			return $this->pass;
		}
		function gettype(){
			return $this->type;
		}
		
		
		function setnomutil(string $nomutil): void{
			$this->type=$nomutil;
		}
		function setmail(string $mail): void{
			$this->mail=$mail;
		}
		
		 function setpass($pass): void
		{
			$this->pass= $pass;
		}

		function settype( string $type): void
		{
			$this-> type = $type;
		}
	
		
	}


?>

	
	

	
	

