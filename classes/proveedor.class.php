<?php

class Proveedor extends Main
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
	
	
	
	public function setDireccion($value){	
		if($this->Util()->ValidateRequireField($value, 'Direccion')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->direccion = $value;
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
		
		$sql = 'SELECT *, proveedorId AS idReg FROM proveedor WHERE proveedorId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();
				

				
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
		
		
		
		 $sql = 'SELECT COUNT(*)	FROM proveedor WHERE statuseliminado = "no" '.$filtro.'';
		
		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		
		$resPage = $this->Util->HandlePagesAjax($this->page, $total , '');		
		$sqlLim = "LIMIT ".$resPage['pages']['start'].", ".$resPage['pages']['items_per_page'];
		 
		 $sql = 'SELECT *, proveedorId AS idReg FROM proveedor 
				WHERE statuseliminado = "no" '.$filtro.'
				ORDER BY nombre ASC
				'.$sqlLim;
				
				// exit;
		$this->Util()->DB()->setQuery($sql);
		$data['result'] = $this->Util()->DB()->GetResult();
		
		// echo "<pre>"; print_r($data);
		
		$data['pages'] = $resPage['pages'];
		$data['info'] = $resPage['info'];
					
		return $data;
		
	}//Enumerate
	
	public function Save(){
						
	
					
						
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		 $sql = 'INSERT INTO proveedor (
			nombre, 
			direccion
		)
		VALUES(
			"'.$this->nombre.'",
			"'.$this->direccion.'"
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
		
		$sql = 'UPDATE proveedor SET 
				nombre = "'.utf8_decode($this->nombre).'",
				direccion = "'.utf8_decode($this->direccion).'"
				WHERE proveedorId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
			
		$this->Util()->setError(10113, 'error', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Update
	
	public function Delete(){
		
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		
		
		$sql = 'UPDATE proveedor SET 
				statuseliminado = "si"
				WHERE proveedorId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
			
		$this->Util()->setError(10113, 'error', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Delete
						
	
	
	
	public function allIngrediente(){
		
		$sql = 'SELECT * FROM proveedor WHERE 1';
		$this->Util()->DB()->setQuery($sql);
		$registros = $this->Util()->DB()->GetResult();
							
		return $registros;
		
	}//EnumerateAll
						
}

?>