<?php

class Usuario extends Main
{
	private $id;
	private $nombre;
	private $telefono;
	private $email;
	private $usuario;
	private $passwd;
	private $tipo;
	private $activo;
	private $establoId;
	private $dependenciaId;
	private $tiporeporte;
	private $apaterno;
	private $amaterno;
	private $calle;
	private $noexterior;
	private $colonia;
	private $ciudad;
	private $estado;
	private $pais;
	
	public function tipoReporte($value){
		// $this->Util()->ValidateInteger($value);
		$this->tiporeporte = $value;
	}
	
	
	public function setId($value){
		$this->Util()->ValidateInteger($value);
		$this->id = $value;
	}
	
	
	public function setDependenciaId($value){
		$this->Util()->ValidateInteger($value);
		$this->dependenciaId = $value;
	}
	
	public function setEstabloId($value){
		$this->Util()->ValidateInteger($value);
		$this->establoId = $value;
	}
	
	public function ValidarEstablo($value){
	
		if($this->tipo == "operacion"){
		
			if(empty($value)){
				$this->Util()->setError(000000, "error","requiere establo");
			}
		
		}
	}
	
	public function setApaterno($value){	
		if($this->Util()->ValidateRequireField($value, 'Apellido Paterno')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->apaterno = $value;
		}		
	}
	
	public function setAmaterno($value){	
		if($this->Util()->ValidateRequireField($value, 'Apellido Materno')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->amaterno = $value;
		}		
	}
	
	public function setCalle($value){	
		if($this->Util()->ValidateRequireField($value, 'Calle')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->calle = $value;
		}		
	}
	
	public function setNoExterior($value){	
		if($this->Util()->ValidateRequireField($value, 'No. Exterior')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->noexterior = $value;
		}		
	}
	
	public function setColonia($value){	
		if($this->Util()->ValidateRequireField($value, 'Colonia')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->colonia = $value;
		}		
	}
	
	public function setCiudad($value){	
		if($this->Util()->ValidateRequireField($value, 'Ciudad')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->ciudad = $value;
		}		
	}
	
	public function setEstado($value){	
		if($this->Util()->ValidateRequireField($value, 'Estado')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->estado = $value;
		}		
	}
	
	public function setPais($value){	
		if($this->Util()->ValidateRequireField($value, 'Pais')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->pais = $value;
		}		
	}
	
	
	public function setNombre($value){	
		if($this->Util()->ValidateRequireField($value, 'Nombre')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->nombre = $value;
		}		
	}
	
	public function setTelefono($value){
		$this->Util()->ValidateString($value, 100, 0, '');
		$this->telefono = $value;
	}
	
	public function setEmail($value, $validate = false){	
		if($this->Util()->ValidateRequireField($value, 'Email')){
			if($validate)
				$this->Util()->ValidateMail($value);
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->email = $value;			
		}		
	}
	
	public function setUsuario($value){	
		if($this->Util()->ValidateRequireField($value, 'Usuario')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->usuario = $value;
		}		
	}
	
	public function setPasswd($value){	
		if($this->Util()->ValidateRequireField($value, 'Contrase&ntilde;a')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->passwd = $value;
		}		
	}
	
	public function setTipo($value){	
		$this->Util()->ValidateString($value, 100, 0, '');
		$this->tipo = $value;
	}
	
	public function setActivo($value){	
		$this->Util()->ValidateString($value, 100, 0, '');
		$this->activo = $value;
	}
		
	public function Info(){
		
		$sql = 'SELECT *, usuarioId AS idReg FROM usuario WHERE usuarioId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();
				
		$info['estado'] = $this->Util()->GetNomEstado($info['estadoId']);
		$info['municipio'] = $this->Util()->GetNomMunicipio($info['municipioId']);
				
		return $info;
	}//Info
	
	public function EnumerateAll(){
		
		$sql = 'SELECT *, usuarioId AS idReg FROM usuario 
				WHERE usuarioId > 1
				ORDER BY nombre ASC';
		$this->Util()->DB()->setQuery($sql);
		$registros = $this->Util()->DB()->GetResult();
							
		return $registros;
		
	}//EnumerateAll
	
	public function EnumerateAllChat(){
		
		$sql = 'SELECT * FROM  dependencia
				WHERE 1
				ORDER BY nombre ASC';
		$this->Util()->DB()->setQuery($sql);
		$dep = $this->Util()->DB()->GetResult();
		
		end($dep);
		$key1 = key($dep) + 1;
		$dep[$key1]["dependenciaId"] =  0;
		$dep[$key1]["nombre"] =  "sin Asignar";
		
		
		foreach($dep as $key=>$aux){
			$sql = 'SELECT *, usuarioId AS idReg FROM usuario 
				WHERE usuarioId > 1 and (tipo = "funcionario" or tipo = "admin") and dependenciaId = '.$aux["dependenciaId"].'
				ORDER BY nombre ASC';
			$this->Util()->DB()->setQuery($sql);
			$registros = $this->Util()->DB()->GetResult();
			$dep[$key]["usuarios"] = $registros;
		}
		
			// echo "<pre>"; print_r($dep);
		// exit;	
		return $dep;
		
	}//EnumerateAll
		
	public function Enumerate(){
		
		$filtro ="";
		
		if($this->tiporeporte=="admin"){
			$filtro .= " and (tipo = 'admin' or tipo = 'funcionario') ";
		}else{
			$filtro .= " and tipo = 'ciudadano'";
		}
		
		$sql = 'SELECT COUNT(*)	FROM usuario WHERE usuarioId > 1 '.$filtro.'';
		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		
		$resPage = $this->Util->HandlePagesAjax($this->page, $total , '');		
		$sqlLim = "LIMIT ".$resPage['pages']['start'].", ".$resPage['pages']['items_per_page'];
		 
		$sql = 'SELECT *, usuarioId AS idReg FROM usuario 
				WHERE usuarioId > 1 '.$filtro.'
				ORDER BY nombre ASC
				'.$sqlLim;
		$this->Util()->DB()->setQuery($sql);
		$data['result'] = $this->Util()->DB()->GetResult();
		
		// echo "<pre>"; print_r($data);
		
		$data['pages'] = $resPage['pages'];
		$data['info'] = $resPage['info'];
					
		return $data;
		
	}//Enumerate
	
	public function Save(){
						
	$sql = 'SELECT COUNT(*) FROM usuario WHERE email = "'.$this->email.'"';
	$this->Util()->DB()->setQuery($sql);
	$countMail =  $this->Util()->DB()->GetSingle();		
	


	if($countMail >= 1){
		$this->Util()->setError(10135, '', '');
	}
					
						
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		 $sql = 'INSERT INTO usuario (
			nombre, 
			apaterno, 
			amaterno, 
			email, 
			passwd, 
			tipo, 
			activo
		)
		VALUES(
			"'.$this->nombre.'",
			"'.$this->apaterno.'",
			"'.$this->amaterno.'",
			"'.$this->email.'", 
			"'.md5($this->passwd).'",
			"'.$this->tipo.'",
			"'.$this->activo.'"
		)';
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$this->id = $this->Util()->DB()->InsertData();
			
		$this->Util()->setError(10112, 'complete', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Save
	
	public function EliminarUsuarioEstablo(){
		
		$sql = 'DELETE FROM usuario_establo WHERE usuarioId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->DeleteData();
		return true;
	}
	
	public function SaveEstablo(){

		
		
		$sql = '
			INSERT INTO usuario_establo (
				usuarioId,
				establoId
			)
			VALUES(
				"'.$this->id.'" ,
				"'.$this->establoId.'" 
			)';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->InsertData();
			
		return true;
		
	}//Save
	
	public function EnumerateEstablo(){
		
		$sql = 'SELECT * FROM usuario_establo WHERE usuarioId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$registros = $this->Util()->DB()->GetResult();
							
		return $registros;
		
	}//EnumerateAll
	
	public function ListarEstablo(){
		
		$listEstablo = $this->EnumerateEstablo();
	
		if(!is_array($listEstablo)){ $listEstablo = array(); }
		$array_dato = array();
		foreach($listEstablo as $key => $row){
			$array_dato[$key] = $row['establoId'];
		}
		
		$establo = new Establo;
		$enumerate = $establo->EnumerateAll();
		if(!is_array($enumerate)){ $enumerate = array(); }
		foreach($enumerate as $key => $row){
			
			if(in_array($row['establoId'], $array_dato)){
				$enumerate[$key]['check'] = 1; 
			}else{
				$enumerate[$key]['check'] = 0;
			}
			
			
		}
	
		return $enumerate;
		
	}//Save
	
	public function Update(){
						
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		$sql = 'UPDATE usuario SET 
				apaterno = "'.utf8_decode($this->apaterno).'",
				amaterno = "'.utf8_decode($this->amaterno).'",
				calle = "'.utf8_decode($this->calle).'",
				noExterior = "'.utf8_decode($this->noexterior).'",
				colonia = "'.utf8_decode($this->colonia).'",
				ciudad = "'.utf8_decode($this->ciudad).'",
				estado = "'.($this->estado).'",
				pais = "'.utf8_decode($this->pais).'",
				nombre = "'.utf8_decode($this->nombre).'", 
				telefono = "'.$this->telefono.'",
				email = "'.utf8_decode($this->email).'", 
				usuario = "'.utf8_decode($this->usuario).'",
				passwd = "'.md5($this->passwd).'", 
				tipo = "'.$this->tipo.'", 
				activo = "'.$this->activo.'"
				WHERE usuarioId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$updateId = $this->Util()->DB()->UpdateData();
			
		$this->Util()->setError(10113, 'complete', '');
		$this->Util()->PrintErrors();
		
		return $updateId;
		
	}//Update
	
	public function Delete(){
		
		$sql = 'DELETE FROM usuario WHERE usuarioId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->DeleteData();
		
		$this->Util()->setError(10114, 'error', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Delete
						
}

?>