<?php

class Myproyect extends Main
{
	private $usuarioId = 0;
	private $username;
	private $email;
	private $clienteId;	
	private $contratoId;	
	private $reporteId;	
	private $comentario;	
	
	
	public function setComentario($value){
		// $this->Util()->ValidateInteger($value);
		$this->comentario = $value;
	}
	
	public function setReporteId($value){
		$this->Util()->ValidateInteger($value);
		$this->reporteId = $value;
	}
	
	
	public function setClienteId($value){
		$this->Util()->ValidateInteger($value);
		$this->clienteId = $value;
	}
	
	public function setContratoId($value){
		$this->Util()->ValidateInteger($value);
		$this->contratoId = $value;
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
	
	public function Enumerate(){
		
		$filtro = "";
		
		if($this->clienteId)
			$filtro .= "";
		
		$this->Util()->DB()->setQuery('SELECT * FROM contrato WHERE id_clientes = "'.$this->clienteId.'"');
		$lst = $this->Util()->DB()->GetResult();
		
	
		
		return $lst;
	}
		
	public function getReportes(){
		
		$filtro = "";
		
		if($this->reporteId)
			$filtro .= "";
		
		 $sql = 'SELECT * FROM fechareporte WHERE contratoId = "'.$this->reporteId.'" and habilitadoProveedor = "si"';
		$this->Util()->DB()->setQuery($sql);
		$lst = $this->Util()->DB()->GetResult();
		
	
		
		return $lst;
	}
	
	
	
					
}//User

?>