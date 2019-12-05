<?php

class Encuesta extends Main
{
	private $id;
	private $nombre;
	private $pregunta;
	private $tipoencuesta;
	private $rango;
	private $opcional;
	private $encuestaId;
	private $respuesta;

	
	
	public function setEncuestaId($value){
		$this->Util()->ValidateInteger($value);
		$this->encuestaId = $value;
	}
	
	public function setId($value){
		$this->Util()->ValidateInteger($value);
		$this->id = $value;
	}
	
	
	public function setNombre($value){	
		if($this->Util()->ValidateRequireField($value, 'Nombre')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->nombre = $value;
		}		
	}
	
	
	public function setRespuesta($value){	

			$this->Util()->ValidateString($value, 100, 0, '');
			$this->respuesta = $value;
		
	}
	
	public function setPregunta($value){	
		if($this->Util()->ValidateRequireField($value, 'Pregunta')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->pregunta = $value;
		}		
	}
	
	public function setTipoEncuesta($value){	
		if($this->Util()->ValidateRequireField($value, 'Tipo Encuesta')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->tipoencuesta = $value;
		}		
	}
	
	public function setRango($value){	
		if($this->Util()->ValidateRequireField($value, 'Rango')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->rango = $value;
		}		
	}
	
	public function setOpcional($value){	
		if($this->Util()->ValidateRequireField($value, 'Rango')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->opcional = $value;
		}		
	}
	
	public function setNumCaracter($value){	
		if($this->Util()->ValidateRequireField($value, 'Num. Caracter')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->numcaracter = $value;
		}		
	}
	
	
	public function setInicio($value){	
		if($this->Util()->ValidateRequireField($value, 'Inicio')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->inicio = $value;
		}		
	}
	
	
	public function setFin($value){	
		if($this->Util()->ValidateRequireField($value, 'Fin')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->fin = $value;
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
		
		$sql = 'SELECT *, encuestaId AS idReg FROM encuesta WHERE encuestaId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();
				
		$info['estado'] = $this->Util()->GetNomEstado($info['estadoId']);
		$info['municipio'] = $this->Util()->GetNomMunicipio($info['municipioId']);
				
		return $info;
	}//Info
	
	public function getListEncuesta(){

		$sql = 'SELECT * FROM encuesta';
		$this->Util()->DB()->setQuery($sql);
		$results =  $this->Util()->DB()->GetResult();
	    
	    return $results;
	}
	
	public function Enumerate(){
		
		$filtro ="";
		
		$usuario = new Usuario;
		$usuario->setId($_SESSION['Usr']["usuarioId"]);
		$infoQuien = $usuario->quienIngreso();
		
		
		
		
		$sql = 'SELECT COUNT(*)	FROM 1encuesta WHERE empresaId = '.$infoQuien["empresaId"].' '.$filtro.'';
		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		// exit;
		$resPage = $this->Util->HandlePagesAjax($this->page, $total , '');		
		$sqlLim = "LIMIT ".$resPage['pages']['start'].", ".$resPage['pages']['items_per_page'];
		 
		$sql = 'SELECT *, encuestaId AS idReg FROM 1encuesta 
				WHERE empresaId = '.$infoQuien["empresaId"].' '.$filtro.'
				ORDER BY encuestaId ASC
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
		
		$usuario =  new Usuario;
		$usuario->setId($_SESSION['Usr']["usuarioId"]);
		$infoQuien = $usuario->quienIngreso();
		
		 $sql = 'INSERT INTO 1encuesta (
			nombre, 
			fechaRegistro, 
			usuarioregsitraId, 
			inicio, 
			fin, 
			empresaId
		)
		VALUES(
			"'.$this->nombre.'",
			"'.date("Y-m-d").'",
			"'.$_SESSION['Usr']["usuarioId"].'",
			"'.$this->inicio.'",
			"'.$this->fin.'",
			"'.$infoQuien["empresaId"].'"
		)';
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$this->id = $this->Util()->DB()->InsertData();
			
		$this->Util()->setError(10112, 'complete', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Save
	
	
	
	public function SavePregunta(){
						
				
						
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		 $sql = 'INSERT INTO 1pregunta (
			pregunta, 
			tiporespuesta, 
			encuestaId, 
			rango, 
			opcional, 
			numCaracter
		)
		VALUES(
			"'.$this->pregunta.'",
			"'.$this->tipoencuesta.'",
			"'.$this->encuestaId.'",
			"'.$this->rango.'",
			"'.$this->opcional.'",
			"'.$this->numcaracter.'"
		)';
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$this->id = $this->Util()->DB()->InsertData();
			
		$this->Util()->setError(10112, 'complete', '');
		$this->Util()->PrintErrors();
		
		return true;
		
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
		$this->Util()->DB()->UpdateData();
			
		$this->Util()->setError(10113, 'error', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Update
	
	public function Delete(){
		
		$sql = 'DELETE FROM usuario WHERE usuarioId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->DeleteData();
		
		$this->Util()->setError(10114, 'error', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Delete
	
	
	
	
	public function EnumeratePreguntas(){
		
		$filtro ="";
		
		if($this->id){
			$filtro .=" and encuestaId = ".$this->id."";
		}

		$sql = 'SELECT COUNT(*)	FROM 1pregunta WHERE 1 '.$filtro.'';
		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		
		$resPage = $this->Util->HandlePagesAjax($this->page, $total , '');		
		$sqlLim = "LIMIT ".$resPage['pages']['start'].", ".$resPage['pages']['items_per_page'];
		 
		$sql = 'SELECT *, preguntaId AS idReg FROM 1pregunta 
				WHERE 1 '.$filtro.'
				ORDER BY preguntaId ASC
				'.$sqlLim;
		// exit;
		
		$this->Util()->DB()->setQuery($sql);
		$data['result'] = $this->Util()->DB()->GetResult();
		
	
		
		$data['pages'] = $resPage['pages'];
		$data['info'] = $resPage['info'];
					
		return $data;
		
	}//EnumeratePreguntas
	
	public function preguntasalCliente(){
		
		 $sql = '
			SELECT 
				* 
			FROM 
				1pregunta as p
			left join 1encuesta as e on e.encuestaId = p.encuestaId 
			WHERE  e.encuestaId = 3 '.$filtro.'';
		$this->Util()->DB()->setQuery($sql);
		$lst = $this->Util()->DB()->GetResult();
		
		
		foreach($lst as $key=>$aux){
			
			
			if($aux["tiporespuesta"]=="opcional"){
				unset($opciones);
				$op = explode("_",$aux["opcional"]);
				for($i=0;$i<=5;$i++){
					if($op[$i]<>""){
						$opciones[] = $op[$i];
					}
				}
				$lst[$key]["opciones"] = $opciones;
			}
		}
		

		
		return $lst;
		
	}
	
	
	
	public function saveRespuestas(){
						
				
						
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		foreach($_POST as $key=>$aux){
			
			$r = explode("_",$key);
		
		
			if($r[0]=="answer"){

				$this->setRespuesta($aux);
				 $sql = 'INSERT INTO 1resultado (
						preguntaId, 
						respuesta, 
						usuarioId
					)
					VALUES(
						"'.$r[1].'",
						"'.$this->respuesta.'",
						"0"
					)';

					$this->Util()->DB()->setQuery($sql);
					$this->id = $this->Util()->DB()->InsertData();
			}
		}
		
		
		
		return true;
		
	}//saveRespuestas
	
	
	public function totalesRespuesta(){
	
		$sql = 'SELECT * 
				from
					1pregunta 
				where
					encuestaId = '.$this->id;

			
		$this->Util()->DB()->setQuery($sql);
		$ls = $this->Util()->DB()->GetResult();
		
		foreach($ls as $key=>$aux){
			
			$sql = '
				SELECT 
					*,
					(select count(*) from 1resultado as r1 where r1.preguntaId = '.$aux["preguntaId"].' and r1.respuesta = r12.respuesta) as Total
				FROM
					1resultado as r12
				WHERE
					r12.preguntaId = '.$aux["preguntaId"].' group by r12.respuesta';

			
			$this->Util()->DB()->setQuery($sql);
			$lstRes = $this->Util()->DB()->GetResult();
			
			$ls[$key]["respuesta"] = $lstRes;
			
		}
		
		return $ls;
		
	}
	
	public function ultimaEncuesta(){
		
		$sql = 'SELECT * 
				from
					encuesta 
				order by
					encuestaId DESC ';

			
		$this->Util()->DB()->setQuery($sql);
		$infoEncuesta = $this->Util()->DB()->GetRow();
		
		return $infoEncuesta;
	}
	/**
	 * return array
	 */
	public function muestraPreguntas(){
	
		$sql = 'SELECT * 
				from
				encuesta 
				order by
				encuestaId DESC ';

		$this->Util()->DB()->setQuery($sql);
		$infoEncuesta = $this->Util()->DB()->GetRow();

		$sql = 'SELECT * 
				from
				pregunta 
				where
				encuestaId = '.$infoEncuesta['encuestaId'].'';

		$this->Util()->DB()->setQuery($sql);
		$lst = $this->Util()->DB()->GetResult();

		foreach($lst as $key=>$aux){
			if($aux["tiporespuesta"]=="opcional"){
				unset($opciones);
				$op = explode("_",$aux["opcional"]);
				for($i=0;$i<=5;$i++){
					if($op[$i]<>""){
						$opciones[] = $op[$i];
					}
				}
				$lst[$key]["opciones"] = $opciones;
			}else if($aux["tiporespuesta"]=="punto"){
				$r = explode("_",$aux["rango"]);
				$lst[$key]["rango1"] = $r[0];
				$lst[$key]["rango2"] = $r[1];
			}

		}

		return $lst;	
	}
	public function listEncuesta(){
        $sql = 'SELECT * 
				from
				encuesta 
				order by
				encuestaId DESC ';
        $this->Util()->DB()->setQuery($sql);
        return $this->Util()->DB()->GetRow();
    }
	public function SaveEncuestaCliente(){
						

		// echo '<pre>'; print_r();
		$sql = 'SELECT * 
				from
					pregunta 
				where
					encuestaId = '.$_POST['encuestaId'].' and tiporespuesta <> "punto"';
		$this->Util()->DB()->setQuery($sql);
		$lst = $this->Util()->DB()->GetResult();
		
		foreach($lst as $key=>$aux){
				if($_POST['check_'.$aux['preguntaId']] ==""){
					echo 'fail[#]';
					
					echo '<div class="alert alert-error">

					<button type="button" class="close" data-dismiss="alert">×</button>
					La pregunta numero '.($key+1).' se encuentra sin respuesta
					</div>';
					exit;
				}
		}
		
		foreach($_POST as $key=>$aux){
			
			$r = explode("_",$key);
		
		
			if($r[0]=="check"){

				$this->setRespuesta($aux);
				 $sql = 'INSERT INTO resultado (
						preguntaId, 
						respuesta, 
						usuarioId
					)
					VALUES(
						"'.$r[1].'",
						"'.$this->respuesta.'",
						"0"
					)';

					$this->Util()->DB()->setQuery($sql);
					$this->id = $this->Util()->DB()->InsertData();
			}
		}
		
		return true;
		
	}//saveRespuestas
}

?>