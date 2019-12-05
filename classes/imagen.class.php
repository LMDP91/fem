<?php

class Imagen extends Main
{
	private $id;
	private $listamayorid;
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
	private $valor;
	private $sustancia;
	
	
	
	public function setSustancia($value){	
		// if($this->Util()->ValidateRequireField($value, 'Apellido Materno')){
			$this->Util()->ValidateString($value);
			$this->sustancia = $value;
		// }		
	}
	
	
	
	public function setOrder($value){
		// $this->Util()->ValidateInteger($value);
		$this->order = $value;
	}
	
	public function setCantidad($value){
		// $this->Util()->ValidateInteger($value);
		$this->cantidad = $value;
	}
	
	public function setValor($value){
		// $this->Util()->ValidateInteger($value);
		$this->valor = $value;
	}
	
	public function setId($value){
		$this->Util()->ValidateInteger($value);
		$this->id = $value;
	}
	
	
	public function setMayorId($value){
		$this->Util()->ValidateInteger($value);
		$this->listamayorid = $value;
	}
	
	
	public function setTipoId($value){
		$this->Util()->ValidateInteger($value);
		$this->tipoId = $value;
	}
	
	public function setUnidadId($value){
		$this->Util()->ValidateInteger($value);
		$this->unidadId = $value;
	}
	
	
	
	public function setPlatilloId($value){	
		
			$this->platilloId = $value;
		
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
		
		$ikey =  New Ikey;
		
		$ikey->setValor($this->valor);
		$ikey->setCampo('producto_categoria_id');
		$mykey = $ikey->Descifrar();
		
		
		 $sql = 'SELECT * FROM productos_categorias WHERE 1 '.$mykey.'';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();
				

				
		return $info;
	}//Info
	
	
	public function InfoCategoria(){
		
			$ikey =  New Ikey;
			
			$filtro = "";
			$$order = "";
		
			$ikey->setValor($this->valor);
			$ikey->setCampo('categoriaId');
			$mykey = $ikey->Descifrar();
		
			$sql = 'SELECT * FROM categoria WHERE 1  '.$mykey.'';

			$this->Util()->DB()->setQuery($sql);
			$info = $this->Util()->DB()->GetRow();
			
			
			if($this->nombre){
				$filtro .= " and nombre like '%".$this->nombre."%'";
			}
			
			if($this->sustancia){
				$filtro .= " and sustancia like '%".$this->sustancia."%'";
			}
			
			if($this->order){
				if($this->order=="Nombre"){
					$order .= " ORDER BY nombre ASC";
				}else{
					$order .= " ORDER BY precioActual ASC";
				}
				
			}else{
				$order .= " ORDER BY nombre ASC";
			}
			

		
			$sql = 'SELECT COUNT(*)	FROM productos_categorias WHERE 1 '.$filtro.' categoria_id = '.$info["categoriaId"].'';
			$this->Util()->DB()->setQuery($sql);
			$total = $this->Util()->DB()->GetSingle();
				
			$resPage = $this->Util->HandlePagesAjax($this->page, $total , '');		
			$sqlLim = "LIMIT ".$resPage['pages']['start'].", ".$resPage['pages']['items_per_page'];
			 
		 	$sql = 'SELECT * FROM productos_categorias 
					WHERE 1 '.$filtro.' and categoria_id = '.$info["categoriaId"].'
					'.$order.'
					'.$sqlLim;
					
			$this->Util()->DB()->setQuery($sql);
			$data['result'] = $this->Util()->DB()->GetResult();
			// exit;
			foreach($data['result'] as $key=>$aux){
				$ikey->setCampo($aux["producto_categoria_id"]);
				$IdCifrado =  $ikey->Cifrar();
				$data['result'][$key]["productoId"] = $IdCifrado;
				$data['result'][$key]["descripcion55"] = substr($aux['descripcion'],0,70);
			}
			
			
		$data['pages'] = $resPage['pages'];	
		$data['info'] = $resPage['info'];
		$data["infoP"] = $info;
		// exit;
		// echo "<pre>"; print_r($data);
		// exit;
		return $data;
	}//Info
	
	
	public function Infosucursal(){
		
		$ikey =  New Ikey;
		
		$ikey->setValor($this->valor);
		$ikey->setCampo('sucursalid');
		$mykey = $ikey->Descifrar();
		
		
		$sql = 'SELECT * FROM sucursal WHERE 1 '.$mykey.'';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();

		
		return $info;
	}//Info
	
	public function infpuestos(){
		
		
		
			$sql = 'SELECT * FROM puestos WHERE puestosId = '.$this->id.'';
			$this->Util()->DB()->setQuery($sql);
			$info = $this->Util()->DB()->GetRow();

		
		return $info;
	}//Info
	
	public function infcontacto(){
		
		
		
			$sql = 'SELECT * FROM contacto WHERE contac_Id = '.$this->id.'';
			$this->Util()->DB()->setQuery($sql);
			$info = $this->Util()->DB()->GetRow();

		
		return $info;
	}//Info
	
	public function listaPlatillostotal(){
		
		// exit;
		$sql = '
		SELECT 
			*,
			c.nombre as nombreCliente
		FROM 
			lista as l
		left join cliente as c on c.clienteId = l.clienteId  
		WHERE listaId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$infoLista = $this->Util()->DB()->GetRow();
		
		
		
		$sql = '
		SELECT 
			* 
		FROM 
			detalle_lista as dl 
		left join platillo as p on p.platilloId = dl.platilloId
		WHERE listaId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$ls = $this->Util()->DB()->GetResult();
		
	
			// echo "<pre>"; print_r($ls);
		// exit;
		$filtro = "";	
		foreach($ls as $key=>$aux){
			if($key==0){
				$filtro .= " and platilloId = ".$aux["platilloId"];
			}else{
				$filtro .= " or platilloId = ".$aux["platilloId"];
			}
		}
		
		if($aux["numeroPlatillo"]>=5 and $aux["numeroPlatillo"]<=8){
			$mul = $infoLista["nino"];
		}
		else{
			$mul = $infoLista["personas"];
		}
		
		
		 $sql = '
			SELECT 
				*,
				sum(cantidad)*'.$mul.' as Total,
				u.nombre as unidad,
				i.nombre as ingrediente,
				p.nombre as proveedor
			FROM 
				detalle_platillo as dp 
			left join ingrediente as i on i.ingredienteId = dp.ingredienteId
			left join unidad as u on u.unidadId = dp.unidadId
			left join proveedor as p on p.proveedorId = i.proveedorId
			WHERE (dp.statusEliminado = "no") '.$filtro.' group by dp.ingredienteId'; 
	

		$this->Util()->DB()->setQuery($sql);
		$ls2 = $this->Util()->DB()->GetResult();
		
		
		
		
		$data["menu"] = $ls;
		$data["ingredientes"] = $ls2;
		$data["info"] = $infoLista;
				
		return $data;
	}//Info
	
	public function listaPlatillosUnitarios(){
		
		$sql = '
		SELECT 
			* 
		FROM 
			detalle_lista as dl 
		left join platillo as p on p.platilloId = dl.platilloId
		WHERE listaId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$ls = $this->Util()->DB()->GetResult();
			

		foreach($ls as $key=>$aux){
			
			 $sql = '
			SELECT 
				*,
				u.nombre as unidad,
				i.nombre as ingrediente,
				p.nombre as proveedor
			FROM 
				detalle_platillo as dp 
			left join ingrediente as i on i.ingredienteId = dp.ingredienteId
			left join unidad as u on u.unidadId = dp.unidadId
			left join proveedor as p on p.proveedorId = i.proveedorId
			WHERE platilloId = '.$aux["platilloId"].'';
			$this->Util()->DB()->setQuery($sql);
			$ls2 = $this->Util()->DB()->GetResult();
			
			$ls[$key]["ingredientes"] = $ls2;
			
		}
		
		// echo "<pre>"; print_r($ls);
		// exit;
				
		return $ls;
	}//Info
	
	
	
	public function InfoUnidad($Id){
		
		$sql = 'SELECT 
					* 
				from
					unidad
				WHERE 
				unidadId = '.$Id.'';
		$this->Util()->DB()->setQuery($sql);
		$registros = $this->Util()->DB()->GetRow();
		
		return $registros;
	}
	
	
	
	public function EnumerateAll(){
		
		$sql = 'SELECT *, ingredienteId AS idReg FROM ingrediente 
				WHERE ingredienteId > 1
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
		
		
	
	public function allTipos(){
		
		$filtro ="";
		
		$sql = 'SELECT * FROM tipoplatillo WHERE 1';
		$this->Util()->DB()->setQuery($sql);
		$lst = $this->Util()->DB()->GetResult();
		
		
		return $lst;
	
	}
	
	public function Enumerate(){
		
		$filtro ="";
		
		
		
		 $sql = '
		 SELECT COUNT(*) FROM lista as l
		 left join cliente as c on c.clienteId = l.clienteId
		 WHERE 1  '.$filtro.'';

		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		
		$resPage = $this->Util->HandlePagesAjax($this->page, $total , '');		
		$sqlLim = "LIMIT ".$resPage['pages']['start'].", ".$resPage['pages']['items_per_page'];
		 
		 $sql = 'SELECT *,c.nombre as cliente, listaId AS idReg FROM lista as l
				left join cliente as c on c.clienteId = l.clienteId
				WHERE 1  '.$filtro.'
				ORDER BY evento ASC
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
						
		// echo "<pre>"; print_r($_POST);
		
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		 $sql = 'INSERT INTO platillo(
			nombre,
			tipoId,
			fechaIngreso

		)
		VALUES(
			"'.$this->nombre.'",
			"'.$this->tipoId.'",
			"'.date("Y-m-d").'"
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
		
		$sql = 'UPDATE platillo SET 
				nombre = "'.utf8_decode($this->nombre).'",
				tipoId = "'.$this->tipoId.'"
				WHERE platilloId = "'.$this->id.'"';
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
		
		$sql = 'UPDATE platillo SET 
				statusEliminado = "si"
				WHERE platilloId = '.$this->id.'';
				
	// exit;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
			
		$this->Util()->setError(10113, 'error', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Delete
	
	
	
	public function addIngrediente(){
						
		// echo "<pre>"; print_r($_POST);
		
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		  $sql = 'INSERT INTO detalle_platillo(
			ingredienteId,
			cantidad,
			unidadId,
			platilloId,
			fecha

		)
		VALUES(
			0,
			"'.$this->cantidad.'",
			"'.$this->unidadId.'",
			"'.$this->platilloId.'",
			"'.date("Y-m-d").'"
		)';
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$this->id = $this->Util()->DB()->InsertData();
			
		// $this->Util()->setError(10112, 'complete', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Save
	
	
	
	
	public function detalleIngredientes(){
		
		$filtro ="";
		
		 $sql = 'SELECT * FROM detalle_platillo WHERE platilloId = '.$this->id.' and statusEliminado = "no"';
		$this->Util()->DB()->setQuery($sql);
		$lst = $this->Util()->DB()->GetResult();
		
		
		return $lst;
	
	}
	
	public function allIngredientes(){
		
		$filtro ="";
		
		 $sql = 'SELECT * FROM ingrediente WHERE 1 order by nombre';
		$this->Util()->DB()->setQuery($sql);
		$lst = $this->Util()->DB()->GetResult();
		
		
		return $lst;
	
	}
	
	public function allUnidad(){
		
		$filtro ="";
		
		$sql = 'SELECT * FROM unidad WHERE 1 order by nombre';
		$this->Util()->DB()->setQuery($sql);
		$lst = $this->Util()->DB()->GetResult();
		
		
		return $lst;
	
	}
	
	public function savePlatillook(){
		
		
		
		
		 $sql = '
					UPDATE 
						platillo 
					SET 
						minimo = '.$_POST["minimo"].'
				WHERE platilloId = '.$_POST["platilloId"].'';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
		
		foreach($_POST as $key=>$aux){
				
			$detalle = explode("_",$key);
			
			if($detalle[0]=="ingredienteId"){
				

				 $sql = '
					UPDATE 
						detalle_platillo 
					SET 
						cantidad = '.$_POST["cantidad_".$detalle[1]].',
						unidadId = '.$_POST["unidadId_".$detalle[1]].',
						platilloId = '.$this->id.',
						ingredienteId = '.$_POST["ingredienteId_".$detalle[1]].'
				WHERE detalle_platilloId = '.$detalle[1].'';

				// echo "<br>";
				// echo "<br>";
				// echo "<br>";
				
				
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->UpdateData();
			}
			
		}
		
	}
	
	
	public function DeleteDetalle(){
		
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		 $sql = 'UPDATE detalle_platillo SET 
				statusEliminado = "si"
				WHERE detalle_platilloId = '.$this->id.'';
				

		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
			
		// $this->Util()->setError(10113, 'error', '');
		// $this->Util()->PrintErrors();
		
		return true;
		
	}//Delete
	
	
	
	public function vistaPreviaAdd(){
		
		$filtro ="";
		
		if($_GET["Id"]){
			$sql = 'SELECT * FROM suma_lista WHERE suma_listaId = '.$_GET["Id"].'';
			$this->Util()->DB()->setQuery($sql);
			$info = $this->Util()->DB()->GetRow();
		}else{
			$sql = 'SELECT * FROM suma_lista WHERE usuarioId = '.$_SESSION['Usr']["usuarioId"].'  and status = "proceso"';
			$this->Util()->DB()->setQuery($sql);
			$info = $this->Util()->DB()->GetRow();
		}
		
		
		

		
		$sql = '
			SELECT 
				*,
				c.nombre as nombreCliente
			FROM 
				detalle_suma as ds
			left join lista as l on l.listaId = ds.listaId
			left join cliente as c on c.clienteId = l.clienteId
			WHERE suma_listaId = '.$info['suma_listaId'].'';
		$this->Util()->DB()->setQuery($sql);
		$ls = $this->Util()->DB()->GetResult();
		
		foreach($ls as $key=>$aux){
			
			 $sql = '
			SELECT 
				* 
			FROM 
				detalle_lista as dp
			left join platillo as p on p.platilloId = dp.platilloId
			WHERE listaId = '.$aux['listaId'].'';
			$this->Util()->DB()->setQuery($sql);
			$ls4 = $this->Util()->DB()->GetResult();
			
			$ls[$key]["platillos"] = $ls4;
		}
		
		
		// echo "<pre>"; print_r($ls );
		// exit;
		$data["data"] = $ls;
		$data["info"] = $info;
		 
		return $data;
	
	}
	
	
	public function EnumerateMayor(){
		
		$filtro ="";
		
		
		
		 $sql = '
		 SELECT 
			COUNT(*) 
		FROM 
			suma_lista as sm 
		left join  usuario as u on u.usuarioId = sm.usuarioId
		 WHERE 1  '.$filtro.'';

		 // exit;
		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		
		$resPage = $this->Util->HandlePagesAjax($this->page, $total , '');		
		$sqlLim = "LIMIT ".$resPage['pages']['start'].", ".$resPage['pages']['items_per_page'];
		 
		  $sql = 'SELECT 
						*,
						suma_listaId as idReg
				FROM suma_lista as sm 
				left join  usuario as u on u.usuarioId = sm.usuarioId
					WHERE 1  '.$filtro.'
				ORDER BY suma_listaId DESC
				'.$sqlLim;

		$this->Util()->DB()->setQuery($sql);
		$data['result'] = $this->Util()->DB()->GetResult();
		
		foreach($data['result'] as $key=>$aux){
			
			$sql = 'SELECT count(*) FROM lista 
				WHERE suma_listaId = '.$aux["suma_listaId"].'';

			$this->Util()->DB()->setQuery($sql);
			$coun = $this->Util()->DB()->GetSingle();
			
			
			$sql = 'SELECT 
						c.nombre 
					FROM lista  as l
					left join cliente as c on c.clienteId = l.clienteId
						WHERE 
					suma_listaId = '.$aux["suma_listaId"].'';

			$this->Util()->DB()->setQuery($sql);
			$clientes = $this->Util()->DB()->GetResult();
			
			$data['result'][$key]["numListas"] = $coun;
			$data['result'][$key]["clientes"] = $clientes;
		}
		
		// echo "<pre>"; print_r($data);
		// exit;
		$data['pages'] = $resPage['pages'];
		$data['info'] = $resPage['info'];
					
		return $data;
		
	}//Enumerate
	
	
	
	public function listaCompras(){
		
		
		
		$sql = '
		SELECT 
			*,
			c.nombre as nombreCliente
		FROM 
			lista as l
		left join cliente as c on c.clienteId = l.clienteId  
		WHERE listaId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$infoLista = $this->Util()->DB()->GetRow();
		
		 $sql = '
			SELECT 
				*,
				pr.nombre as nombreProveedor
			FROM 
				detalle_lista as dl
			left join platillo as p on p.platilloId = dl.platilloId  
			left join detalle_platillo as dp on dp.platilloId = p.platilloId  
			left join ingrediente as i on i.ingredienteId = dp.ingredienteId  
			left join proveedor as pr on pr.proveedorId = i.proveedorId  
			
			WHERE dl.listaId = '.$this->id.' group by i.proveedorId';

		$this->Util()->DB()->setQuery($sql);
		$lst = $this->Util()->DB()->GetResult();
		
		foreach($lst as $key=>$aux){
			
			if($aux["proveedorId"]==null){
				$aux["proveedorId"] = 0;
			}
			
			if($aux["numeroPlatillo"]>=5 and $aux["numeroPlatillo"]<=8){
				$mul = $infoLista["nino"];
			}
			else{
				$mul = $infoLista["personas"];
			}
			
			
		 	 $sql = '
			SELECT 
				*,
				pr.nombre as nombreProveedor,
				i.nombre as nombreIngrediente,
				u.nombre as nombreUnidad,
				sum('.$mul.'*cantidad) as totalIngrediente
			FROM 
				detalle_lista as dl
			left join platillo as p on p.platilloId = dl.platilloId  
			left join detalle_platillo as dp on dp.platilloId = p.platilloId  
			left join unidad as u on u.unidadId = dp.unidadId  
			left join ingrediente as i on i.ingredienteId = dp.ingredienteId  
			left join proveedor as pr on pr.proveedorId = i.proveedorId  
			WHERE dl.listaId = '.$this->id.' and i.proveedorId = '.$aux["proveedorId"].' group by i.ingredienteId';

			$this->Util()->DB()->setQuery($sql);
			$lst2 = $this->Util()->DB()->GetResult();
		
			$lst[$key]["ingredientes"] = $lst2;
			
		}
		
		
		$data["ingrediente"] = $lst;
		$data["info"] = $infoLista;
		return $data; 
		
	}
	
	
	public function listaConProveedores($Id){
		
		 $sql = '
			SELECT 
				*,
				pr.nombre as nombreProveedor
			FROM 
				lista as l
			left join detalle_lista as dl on dl.listaId = l.listaId  
			left join platillo as p on p.platilloId = dl.platilloId  
			left join detalle_platillo as dp on dp.platilloId = p.platilloId  
			left join ingrediente as i on i.ingredienteId = dp.ingredienteId  
			left join proveedor as pr on pr.proveedorId = i.proveedorId  
			
			WHERE l.suma_listaId = '.$Id.' group by i.proveedorId';

		$this->Util()->DB()->setQuery($sql);
		$lst = $this->Util()->DB()->GetResult();
	
		foreach($lst as $key=>$aux){
			
			if($aux["proveedorId"]==null){
				$aux["proveedorId"] = 0;
			}
			
			 
			
			
		  $sql = '
			SELECT 
				*,
				pr.nombre as nombreProveedor,
				i.nombre as nombreIngrediente,
				u.nombre as nombreUnidad
			FROM 
				lista as l
			left join detalle_lista as dl on dl.listaId = l.listaId  
			left join platillo as p on p.platilloId = dl.platilloId  
			left join detalle_platillo as dp on dp.platilloId = p.platilloId  
			left join unidad as u on u.unidadId = dp.unidadId  
			left join ingrediente as i on i.ingredienteId = dp.ingredienteId  
			left join proveedor as pr on pr.proveedorId = i.proveedorId  
			WHERE l.suma_listaId = '.$Id.' and i.proveedorId = '.$aux["proveedorId"].' group by i.ingredienteId';
			$this->Util()->DB()->setQuery($sql);
			$lstIn = $this->Util()->DB()->GetResult();
			
			$sql = '
			SELECT 
				*
			FROM 
				suma_lista
			where suma_listaId = '.$Id.'';
			$this->Util()->DB()->setQuery($sql);
			$infoMay = $this->Util()->DB()->GetRow();
			
			
			
			foreach($lstIn as $key1=>$aux1){
				 $sql = '
					SELECT 
						*,
						pr.nombre as nombreProveedor,
						i.nombre as nombreIngrediente,
						u.nombre as nombreUnidad
					FROM 
						lista as l
					left join detalle_lista as dl on dl.listaId = l.listaId  
					left join platillo as p on p.platilloId = dl.platilloId  
					left join detalle_platillo as dp on dp.platilloId = p.platilloId  
					left join unidad as u on u.unidadId = dp.unidadId  
					left join ingrediente as i on i.ingredienteId = dp.ingredienteId  
					left join proveedor as pr on pr.proveedorId = i.proveedorId  
					WHERE l.suma_listaId = '.$Id.' and i.proveedorId = '.$aux["proveedorId"].' and dp.ingredienteId = '.$aux1["ingredienteId"].'';
					
					$this->Util()->DB()->setQuery($sql);
					$lstS = $this->Util()->DB()->GetResult();
					$total = 0;
					foreach($lstS as $key2=>$aux2){
						$sqlu = '
							SELECT 
								*,
								c.nombre as nombreCliente
							FROM 
								lista as l
							left join cliente as c on c.clienteId = l.clienteId  
							WHERE listaId = '.$aux2["listaId"].'';
							$this->Util()->DB()->setQuery($sqlu);
						$infoLista = $this->Util()->DB()->GetRow();
					
						
						if($aux2["numeroPlatillo"]>=5 and $aux2["numeroPlatillo"]<=8){
							$numPersonas = $infoLista["nino"];
						}
						else{
							$numPersonas = $infoLista["personas"];
						}
						
						$total += $aux2["cantidad"]*$numPersonas;
						
					}
					
					$lstIn[$key1]["totalIngrediente"] =  $total;
			}
			
			
			

		
				
			$lst[$key]["ingredientes"] = $lstIn;
			
		}
		
		$data["ingrediente"]=$lst;
		$data["info"]=$infoMay;
		
		// echo "<pre>"; print_r($data);
		// exit;
		return $data; 
		
	}
	
	public function listadeLista($Id){
		
		if($Id==null){
				
			$sql = 'SELECT * FROM suma_lista WHERE status = "proceso" and usuarioId = '.$_SESSION['Usr']["usuarioId"].'';
			$this->Util()->DB()->setQuery($sql);
			$info = $this->Util()->DB()->GetRow();
			
			if($info["suma_listaId"]==null){
				$Id = 0;
			}else{
				$Id = $info["suma_listaId"];
			}
			
		}else{
			$Id = $Id;
		}
		
		 $sql = 'SELECT 
						*
				FROM 
					detalle_suma 
					WHERE suma_listaId =  '.$Id.'';

		$this->Util()->DB()->setQuery($sql);
		$ls = $this->Util()->DB()->GetResult();
		
		
		return $ls;
		
	}
	
	public function obtenVariable(){
		
		if($this->id){
			$Id = $this->id;
					
		}else{
			$sql = 'SELECT * FROM lista WHERE estatus = "proceso" and usuarioId = '.$_SESSION['Usr']["usuarioId"].'';
			$this->Util()->DB()->setQuery($sql);
			$info = $this->Util()->DB()->GetRow();
				if($info["listaId"]<>null){
					$Id = $info["listaId"];
				}else{
					$Id = 0;
				}
			
		}
		
		return $Id;
	}
	
	public function viewListaAdd(){
		
		if($this->listamayorid){
			
			$sql = '
				SELECT 
					* 
				FROM 
					lista  as l
				left join cliente as c on c.clienteId =  l.clienteId
				WHERE  suma_listaId = '.$this->listamayorid.'';
			$this->Util()->DB()->setQuery($sql);
			$info = $this->Util()->DB()->GetResult();
					
		}else{
			$sql = 'SELECT * FROM suma_lista WHERE status = "proceso" and usuarioId = '.$_SESSION['Usr']["usuarioId"].'';
			$this->Util()->DB()->setQuery($sql);
			$info1 = $this->Util()->DB()->GetRow();
				
			if($info1["suma_listaId"]<>null){
				$sql = '
				SELECT 
					* 
				FROM 
					lista as l
				left join cliente as c on c.clienteId =  l.clienteId
				WHERE  suma_listaId = '.$info1["suma_listaId"].'';
				$this->Util()->DB()->setQuery($sql);
				$info = $this->Util()->DB()->GetResult();
			}	
			
		}
		
		return $info;
			
	}
	
	public function EnumeraSucursales(){
		
		$ikey =  New Ikey;
		
		$sql = '
				SELECT 
					* 
				FROM 
					sucursal  
				WHERE  1 ';
				$this->Util()->DB()->setQuery($sql);
				$info = $this->Util()->DB()->GetResult();
				
		foreach($info as $key=>$aux){
			
			$ikey->setCampo($aux["sucursalid"]);
			$categoriaId =  $ikey->Cifrar();
			$info[$key]["sucursalCId"] = $categoriaId;
		}
				
		return $info;
		
	}
	
	public function EnviaComentario(){
		
		  $mensaje.= "\nNombre: ". $_POST['txtName'];
		  $mensaje.= "\nEmail: ".$_POST['email'];
		  $mensaje.= "\nTelefono: ". $_POST['telefono'];
		  $mensaje.= "\nAsunto: ". $_POST['asunto'];
		  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
		  $destino= "juanjosepm@live.com";
		  $remitente = $_POST['email'];
		  $asunto = "Mensaje enviado por: ".$_POST['txtName'];
		  if(mail($destino,$asunto,$mensaje,"FROM: $remitente")){
			  return true;
		  }else{
			  return false;
		  }
		  
		  
		
	}
	
	
	
	
	public function EnumeraProductos(){
		
		$ikey = New Ikey;
		
		$sql = '
				SELECT 
					* 
				FROM 
					categoria  
				WHERE  1 ';
				$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetResult();
				
		foreach($info as $key=>$aux){

			$ikey->setCampo($aux["categoriaId"]);
			$categoriaId =  $ikey->Cifrar();
			$info[$key]["categoriaCId"] = $categoriaId;
		}
				
		return $info;
		
	}
	
	
	
	public function PromocionIndex(){
		
		$sql = '
				SELECT 
					* 
				FROM 
					  productos_categorias
				WHERE  promocion = "si" ';
				$this->Util()->DB()->setQuery($sql);
				$info = $this->Util()->DB()->GetResult();
				
		return $info;
		
	}
	
	
	
	public function NotadelDia(){
		
		 $sql = '
				SELECT 
					* 
				FROM 
					  blog
				WHERE  apareceIndex = "si" ';
				// exit;
				$this->Util()->DB()->setQuery($sql);
				$info = $this->Util()->DB()->GetRow();
				
		return $info;
		
	}
	
	public function getSliderPrincipal(){
		
		 $sql = '
				SELECT 
					* 
				FROM 
					  imagen
				WHERE  tipo = "slider" and activo = "si"';
				// exit;
				$this->Util()->DB()->setQuery($sql);
				$info = $this->Util()->DB()->GetResult();
				
		
				
		return $info;
		
	}
	
	public function getImages(){
		
		 $sql = '
				SELECT 
					* 
				FROM 
					  imagen
				WHERE  tipo = "index"';
				// exit;
				$this->Util()->DB()->setQuery($sql);
				$info = $this->Util()->DB()->GetResult();
				
		
				
		return $info;
		
	}
	
	
	
	public function InfoImg(){
		
		 $sql = '
				SELECT 
					* 
				FROM 
					  imagen
				WHERE  imagenId = '.$this->id.'';
				// exit;
				$this->Util()->DB()->setQuery($sql);
				$info = $this->Util()->DB()->GetRow();
				
		
				
		return $info;
		
	}
	
	public function upFile(){
	
	// echo "<pre>"; print_r($_FILES);
		// exit;
	
			$aux = explode(".",$_FILES["img"]["name"]);
			$extencion=end($aux);
			$temporal = $_FILES["img"]["tmp_name"];
	
			$url = DOC_ROOT;				
			$foto_name= $this->id.".".$extencion;
			// echo $url."/images/ari/".$foto_name;
			if(move_uploaded_file($temporal,$url."/images/ari/".$foto_name)){		
											
				$sql = 'UPDATE 		
				imagen SET 		
				ruta = "'.$foto_name.'"			      		
				WHERE imagenId = '.$this->id.'';		
					
			$this->Util()->DB()->setQuery($sql);		
			$this->Util()->DB()->UpdateData();

		   }
				   
		return true;
		
	}
	
	public function loadMenu(){
		
		 $sql = '
				SELECT 
					* 
				FROM 
					  menu
				WHERE  dependeId = 0';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetResult();
		
		foreach($info as $key=>$aux){
			
			 $sql = '
				SELECT 
					* 
				FROM 
					  menu
				WHERE  dependeId = '.$aux['menuId'].'';
			$this->Util()->DB()->setQuery($sql);
			$info55 = $this->Util()->DB()->GetResult();	
			$info[$key]['count'] = count($info55);			
			$info[$key]['submenu'] = $info55;
		
		}
		return $info;		
	}

	
	public function loadSubMenu($Id){
		
		
			
		$sql = '
				SELECT 
					* 
				FROM 
					  menu
				WHERE  dependeId = '.$Id.'';
			$this->Util()->DB()->setQuery($sql);
			$info = $this->Util()->DB()->GetResult();	

		return $info;		
	}
}

?>