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
			header('Location: '.WEB_ROOT.'/login-customer');
			exit;
		}
				
		if($Usr['roleId'] != 1 && $page != ''){			
			if(!$this->AllowAccessModule($page)){
				header('Location: '.WEB_ROOT);
				exit;
			}
		}
				
	}//AllowAccess
	
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
				clientes 
			WHERE 
				email = "'.$this->username.'"
			AND 
				passwd = "'.md5($this->password).'" and activo = "si"';
	
		$this->Util()->DB()->setQuery($sql);
		$row = $this->Util()->DB()->GetRow();
			
		if($row){
			
			$ikey = New Ikey;
			
			$ikey->setCampo($row["clienteId"]);
			$IdCifrado =  $ikey->Cifrar();
				
			$card['usuarioId'] = $IdCifrado;	
			$card['nombre'] = $row["nombre"];
			$card['tipo'] = "cliente";
			$card['isLogged'] = true;
			// $card['tipo'] = "cliente";			
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