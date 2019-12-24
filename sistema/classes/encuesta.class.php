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
	private $contexto;

	public function setEncuestaId($value){
		$this->Util()->ValidateInteger($value);
		$this->encuestaId = $value;
	}
	public function setId($value){
		$this->Util()->ValidateInteger($value);
		$this->id = $value;
	}

	public function getEncuestaId(){
	    return $this->encuestaId;
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
	public function setContexto($value){
        $this->Util()->ValidateRequireField($value, 'Tipo de contexto');
        $this->contexto = $value;
    }
    public function getContexto(){
	    return $this->contexto;
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
		
		$sql = 'SELECT *, encuestaId AS idReg FROM encuesta WHERE encuestaId = "'.$this->encuestaId.'"';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();
				
		$info['estado'] = $this->Util()->GetNomEstado($info['estadoId']);
		$info['municipio'] = $this->Util()->GetNomMunicipio($info['municipioId']);
				
		return $info;
	}//Info
	
	public function getListEncuesta(){

		$sql = 'SELECT * FROM encuesta';
		$this->Util()->DB()->setQuery($sql);
		return $this->Util()->DB()->GetResult();
	}
	
	public function Enumerate(){
		
		$filtro ="";

		$sql = 'SELECT COUNT(*)	FROM encuesta WHERE 1 '.$filtro.'';
		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		// exit;
		$resPage = $this->Util->HandlePagesAjax($this->page, $total , '');		
		$sqlLim = "LIMIT ".$resPage['pages']['start'].", ".$resPage['pages']['items_per_page'];
		 
		$sql = 'SELECT *, encuestaId AS idReg FROM encuesta 
				WHERE 1 '.$filtro.'
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
		if($this->id){
			 $sql = 'UPDATE encuesta SET 
				nombre = "'.utf8_decode($this->nombre).'", 
				inicio = "'.($this->inicio).'", 
				fin = "'.($this->fin).'"
				WHERE encuestaId = "'.$this->id.'"';
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->UpdateData();
			
		} else{
			$sql = 'INSERT INTO encuesta (
			nombre, 
			fechaRegistro, 
			usuarioregistraId, 
			inicio, 
			fin
			)
			VALUES(
				"'.$this->nombre.'",
				"'.date("Y-m-d").'",
				"'.$_SESSION['Usr']["usuarioId"].'",
				"'.$this->inicio.'",
				"'.$this->fin.'"
			)';
		}
		$this->Util()->DB()->setQuery($sql);
		$this->id = $this->Util()->DB()->InsertData();
			
		$this->Util()->setError(10141, 'complete', '');
		$this->Util()->PrintErrors();
		return true;
	}//Save
	public function SaveQuestions(){
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		if($this->id){
			$sql = 'UPDATE pregunta SET 
				pregunta = "'.($this->pregunta).'",
				tiporespuesta = "'.($this->tipoencuesta).'",
				rango = "'.($this->rango).'",
				opcional = "'.($this->opcional).'",
				numCaracter = "'.($this->numcaracter).'"
				WHERE preguntaId = "'.$this->id.'"';
				
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->UpdateData();
			
		}else{
			 $sql = 'INSERT INTO pregunta (
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
			$this->Util()->DB()->setQuery($sql);
			$this->id = $this->Util()->DB()->InsertData();
		}
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
		
		$sql = 'DELETE FROM encuesta WHERE encuestaId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->DeleteData();
		
		$this->Util()->setError(10114, 'error', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Delet
    public function DeleteQuestion(){
		
		$sql = 'DELETE FROM pregunta WHERE preguntaId = "'.$this->id.'"';
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

		$sql = 'SELECT COUNT(*)	FROM pregunta WHERE 1 '.$filtro.'';
		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		
		$resPage = $this->Util->HandlePagesAjax($this->page, $total , '');		
		$sqlLim = "LIMIT ".$resPage['pages']['start'].", ".$resPage['pages']['items_per_page'];
		 
		$sql = 'SELECT *, preguntaId AS idReg FROM pregunta 
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

	
	public function preguntasalCliente()
    {
        $sql = '
			SELECT 
				* 
			FROM 
				1pregunta as p
			left join 1encuesta as e on e.encuestaId = p.encuestaId 
			WHERE  e.encuestaId = 3 ' . $filtro . '';
        $this->Util()->DB()->setQuery($sql);
        $lst = $this->Util()->DB()->GetResult();
        foreach ($lst as $key => $aux) {
            if ($aux["tiporespuesta"] == "opcional") {
                unset($opciones);
                $op = explode("_", $aux["opcional"]);
                for ($i = 0; $i <= 5; $i++) {
                    if ($op[$i] <> "") {
                        $opciones[] = $op[$i];
                    }
                }
                $lst[$key]["opciones"] = $opciones;
            }
        }
        return $lst;
    }

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
	
	public function InfoPregunta(){
		$sql = 'SELECT *, preguntaId AS idReg FROM pregunta WHERE preguntaId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();
		return $info;
	}
	public function resultadosPreguntas(){
		$sql = 'SELECT *, preguntaId AS idReg FROM pregunta WHERE encuestaId = "'.$this->id.'" and tiporespuesta <> "abierta"';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetResult();
		foreach($info as $key=>$aux){
			$sql = 'SELECT respuesta,count(*) as total FROM resultado WHERE preguntaId = '.$aux['preguntaId'].' group by respuesta';
			$this->Util()->DB()->setQuery($sql);
			$info1 = $this->Util()->DB()->GetResult();
			$info[$key]['resultados'] = $info1;
		}
		return $info;
	}
	public function resultadosAbiertas(){
		$sql = 'SELECT * FROM resultado as r
		left join pregunta as p on p.preguntaId = r.preguntaId
		WHERE encuestaId = "'.$this->id.'" and tiporespuesta = "abierta"';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetResult();
		
		return $info;
	}
	public function totalQuestionsPoll(){
	    $sql = "select count(*) from pregunta where encuestaId = '".$this->getEncuestaId()."'";
	    $this->Util()->DB()->setQuery($sql);
	    return $this->Util()->DB()->GetSingle();
    }

}

?>