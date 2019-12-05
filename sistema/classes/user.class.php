<?php

class User extends Main
{
	private $usuarioId = 0;
	private $username;
	private $email;
	private $password;	
	
	public function setUsuarioId($value){
		$this->Util()->ValidateInteger($value);
		$this->usuarioId = $value;
	}
		
	public function setEmail($value, $validate = false){	
		if($this->Util()->ValidateRequireField($value, 'Correo Electr&oacute;nico')){
			if($validate)
				$this->Util()->ValidateMail($value);			
			$this->Util()->ValidateString($value, 100, 1, '');
			$this->email = $value;			
		}		
	}
	
	public function setUsername($value){	
		if($this->Util()->ValidateRequireField($value, 'Usuario')){
			$this->Util()->ValidateString($value, 100, 1, '');
			$this->username = $value;
		}		
	}
		
	public function setPasswd($value){	
		if($this->Util()->ValidateRequireField($value, 'Contrase&ntilde;a')){
			$this->Util()->ValidateString($value, 100, 1, 'Password');
			$this->password = $value;
		}		
	}	
		
	public function Info(){
		
		$this->Util()->DB()->setQuery('SELECT * FROM personal WHERE personalId = "'.$this->usuarioId.'"');
		$user = $this->Util()->DB()->GetRow();
		
		$user['version'] = 'v3';
		
		return $user;
	}
		
		
	public function AllowAccess($page = ''){
	
		$Usr = $_SESSION['Usr'];
						
		if(!$Usr['isLogged']){
			header('Location: '.WEB_ROOT.'/login');
			exit;
		}
				
		if($Usr['roleId'] != 1 && $page != ''){			
			if(!$this->AllowAccessModule($page)){
				header('Location: '.WEB_ROOT);
				exit;
			}
		}
				
	}//AllowAccess

	public function __construct() {
		
	}
	
	public function AllowAccessModule($page){
		
		$Usr = $_SESSION['Usr'];
		
		$allowPages = array();
		
		switch($Usr['roleId']){
			
			case 1:
			case 2:
			case 3:
				$allowPages = array(
					'homepage',
					'personal',
					'customer'
				);
				break;
		
		}
			
		if(in_array($page,$allowPages))
			return true;
		else
			return false;
		
	}//AllowAccessModule
	
	public function DoLoginCheck(){
						
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		return true;
	}
	
	public function DoLogin(){
						
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		 
		$sql = 'SELECT 
				* 
			 FROM 
				usuario 
			WHERE 
				usuario = "'.$this->username.'"
			AND 
				passwd = "'.md5($this->password).'"';
	
		$this->Util()->DB()->setQuery($sql);
		$row = $this->Util()->DB()->GetRow();
			
		if($row){
			
			// $name = explode(' ',$row['nombre']);
			
			$card['usuarioId'] = $row['usuarioId'];	
			$card['role_id'] = $row['role_id'];
            $card['sucursalId'] = $row['sucursalId'];
	        $card['usuario'] = $row['usuario'];
            $card['email'] = $row['email'];
			$card['isLogged'] = true;;			
			
			// $card['roleId'] = ($card['tipo'] == 'admin') ? 1 : 2;
			
			$_SESSION['Usr'] = $card;
			
			return true;
				
		}else{					
			
			$this->Util()->setError(10006, 'error', '');
			$this->Util()->PrintErrors();
			
		}//else
	
		return false;
		
	}//DoLogin
	
	public function DoLogout(){		
				
		$_SESSION['User'] = '';
		unset($_SESSION['User']);
		session_destroy();		
		
	}//DoLogout
					
}//User

?>