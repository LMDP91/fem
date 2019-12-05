<?php

class Prueba extends Main
{
	private $id;

	
	public function setId($value){
		$this->Util()->ValidateInteger($value);
		$this->id = $value;
	}
			
	public function Info(){
		
		$sql = 'SELECT *, cuartoId AS idReg FROM prueba WHERE pruebaId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();

		return $info;
	}//Info
	
	public function EnumerateInfo(){
		
		$sql = 'SELECT *, resultadoId AS idReg FROM prueba_resultado
				WHERE statusReg = "activo"
				AND pruebaId = "'.$this->id.'"
				ORDER BY resultadoId ASC';
		$this->Util()->DB()->setQuery($sql);
		$registros = $this->Util()->DB()->GetResult();
							
		return $registros;
		
	}//EnumerateAll
	
	public function EnumerateAll(){
		
		$sql = 'SELECT *, pruebaId AS idReg FROM prueba 
				WHERE statusReg = "activo"
				ORDER BY pruebaId ASC';
		$this->Util()->DB()->setQuery($sql);
		$registros = $this->Util()->DB()->GetResult();
							
		return $registros;
		
	}//EnumerateAll
		
	/* public function Enumerate(){
		
		$sql = 'SELECT COUNT(*)	FROM tipo_mastitis WHERE tipo_mastitisId > 1';
		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		
		$resPage = $this->Util->HandlePagesAjax($this->page, $total , '');		
		$sqlLim = "LIMIT ".$resPage['pages']['start'].", ".$resPage['pages']['items_per_page'];
		 
		$sql = 'SELECT *, tipo_mastitisId AS idReg FROM tipo_mastitis 
				WHERE tipo_mastitisId > 1
				ORDER BY nombre ASC
				'.$sqlLim;
		$this->Util()->DB()->setQuery($sql);
		$data['result'] = $this->Util()->DB()->GetResult();
		
		$data['pages'] = $resPage['pages'];
		$data['info'] = $resPage['info'];
					
		return $data;
		
	}//Enumerate
	
	public function Save(){
						
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		$sql = 'INSERT INTO tipo_mastitis (nombre, telefono, email, tipo_mastitis, passwd, tipo, activo)
				VALUES("'.utf8_decode($this->nombre).'", "'.utf8_decode($this->telefono).'", "'.utf8_decode($this->email).'", 
				"'.utf8_decode($this->tipo_mastitis).'", "'.$this->passwd.'", "'.$this->tipo.'", "'.$this->activo.'")';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->InsertData();
			
		$this->Util()->setError(10112, 'complete', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Save
	
	public function Update(){
						
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		$sql = 'UPDATE tipo_mastitis SET 
				nombre = "'.utf8_decode($this->nombre).'", telefono = "'.$this->telefono.'",
				email = "'.utf8_decode($this->email).'", tipo_mastitis = "'.utf8_decode($this->tipo_mastitis).'",
				passwd = "'.$this->passwd.'", tipo = "'.$this->tipo.'", activo = "'.$this->activo.'"
				WHERE tipo_mastitisId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
			
		$this->Util()->setError(10113, 'error', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Update
	
	public function Delete(){
		
		$sql = 'DELETE FROM tipo_mastitis WHERE tipo_mastitisId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->DeleteData();
		
		$this->Util()->setError(10114, 'error', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Delete
						 */
}

?>