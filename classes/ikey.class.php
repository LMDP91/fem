<?php

class Ikey extends Main
{
	private $usuarioId = 0;
	private $username;
	private $email;
	private $password;	
	private $llave;	
	private $valor;	
	private $campo;	
	

	
	public function setLlave($value){
		$this->llave = $value;
	}
	
	
	public function setCampo($value){
		$this->campo = $value;
	}
		
	public function setValor($value){
		$this->valor = $value;
	}
	
	public function Cifrar(){
			
			$key1 = "cu4n70_m4s_c0mpl3j0_m3j05";
			$llave = md5($key1.$this->campo);
			
			return $llave;
			
	}
	
	public function Descifrar(){
			
		$key1 = "cu4n70_m4s_c0mpl3j0_m3j05";
		// $campoId = "catalogo_tramiteId";
		$mykey =  "and MD5 (concat('".$key1."',".$this->campo.")) = '".($this->valor)."'";
		
		return $mykey;
			
	}
	
	
	
		
					
}//User

?>