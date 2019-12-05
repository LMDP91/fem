<?php

class Producto extends Main
{
	private $id;
	private $nombre;
	private $presentacion;
	private $costo;
	private $vAdministracion;
	private $direccionId;
	private $rfcId;
	private $rfc;
	private $estadoId;
	private $email;
	private $telefono;
	private $razon;
	private $municipio;
	private $cantidad;
	private $clienteId;
	
	public function setCantidad($value){	
		if($this->Util()->ValidateRequireField($value, 'Cantidad')){
			$this->Util()->ValidateString($value);
			$this->cantidad = $value;	
		}		
	}
	
	public function setClienteId($value){	
		if($this->Util()->ValidateRequireField($value, 'Cliente')){
			$this->Util()->ValidateInteger($value);
			$this->clienteId = $value;	
		}		
	}
	
	public function setEmail($value, $validate = true){	
		if($this->Util()->ValidateRequireField($value, 'Correo Electr&oacute;nico')){
			if($validate)
				$this->Util()->ValidateMail($value);			
			$this->Util()->ValidateString($value, 100, 1, '');
			$this->email = $value;			
		}		
	}
	
	public function setRfc($value){	
		
		if($this->Util()->ValidateRequireField($value, 'RFC')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->rfc = $value;	
		}
	}
	
	public function setRazon($value){	
		
		if($this->Util()->ValidateRequireField($value, 'Razon Social')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->razon = $value;	
		}
	}
	
	public function setRfcId($value){
		$this->rfcId = $value;
	}
	
	public function setDireccionId($value){
		// $this->Util()->ValidateInteger($value);
		$this->direccionId = $value;
	}
	
	public function setId($value){
		$this->Util()->ValidateInteger($value);
		$this->id = $value;
	}
	
	public function setEstabloId($value){
		if($this->Util()->ValidateRequireField($value, 'Seleccione un establo'))
			$this->establoId = $value;
	}
	
	public function setNombre($value){	
		if($this->Util()->ValidateRequireField($value, 'Nombre')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->nombre = $value;
		}		
	}
	
	public function setCalle($value){	
		if($this->Util()->ValidateRequireField($value, 'Calle')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->calle = $value;
		}		
	}
	
	public function setnumeroInterior($value){	
		if($this->Util()->ValidateRequireField($value, 'Numero Interior')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->numeroInterior = $value;
		}		
	}
	
	public function setnumeroExterior($value){	
		if($this->Util()->ValidateRequireField($value, 'Numero Exterior')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->numeroExterior = $value;
		}		
	}
	
	
	public function setentreCalle1($value){	
		if($this->Util()->ValidateRequireField($value, 'Entre Calle 1')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->entreCalle1 = $value;
		}		
	}
	
	
	public function setentreCalle2($value){	
		if($this->Util()->ValidateRequireField($value, 'Entre Calle 2')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->entreCalle2 = $value;
		}		
	}
	
	public function setReferencias($value){	
		if($this->Util()->ValidateRequireField($value, 'Referencias')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->referencias = $value;
		}		
	}
	
	

				
	public function setCp($value){
		if($this->Util()->ValidateRequireField($value, 'Codigo Postal')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->cp = $value;
		}
	}
	
	
	public function setColonia($value){
		if($this->Util()->ValidateRequireField($value, 'Colonia')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->colonia = $value;
		}
	}
	
	public function setMunicipio($value){
		if($this->Util()->ValidateRequireField($value, 'Municipio')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->municipio = $value;
		}
	}
	
	
	public function setEstadoId($value){
		if($this->Util()->ValidateRequireField($value, 'Estado')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->estadoId = $value;
		}
	}
	
	public function setTelefono($value){
		if($this->Util()->ValidateRequireField($value, 'Telefono')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->telefono = $value;
		}
	}
	
	public function setCosto($value, $validate = false){
		if($this->Util()->ValidateRequireField($value, 'Costo')){
			if($this->Util()->ValidateRequireField($value, 'Costo')){
				$this->costo = $value;			
			}		
		}
	}
	
	public function setVAdministracion($value){	
		if($this->Util()->ValidateRequireField($value, 'Via de administracion')){
			$this->Util()->ValidateString($value, 2550, 0, 'Via de administracion');
			$this->vAdministracion = $value;
		}		
	}

		
	public function Info(){
		
		$sql = 'SELECT *, productoId AS idReg FROM producto WHERE productoId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();
				
		$info['estado'] = $this->Util()->GetNomEstado($info['estadoId']);
		$info['municipio'] = $this->Util()->GetNomMunicipio($info['municipioId']);
				
		return $info;
	}//Info
	
	public function CompleteProduct($nombre){
		
		$sql = "SELECT * FROM producto 
				WHERE nombre LIKE '".$nombre."%'
				ORDER BY nombre ASC
				LIMIT 10
		";
		$this->Util()->DB()->setQuery($sql);
		$registros = $this->Util()->DB()->GetResult();
							
		return $registros;
		
	}//EnumerateAll
	
	public function EnumerateAll(){
	
		if(!empty($this->establoId)){
			$dato = " AND establoId = '".$this->establoId."'";
		}
		
		$sql = "SELECT *, productoId AS idReg FROM producto 
				WHERE statusReg = 'activo'
				".$dato."
				ORDER BY nombre ASC";
		$this->Util()->DB()->setQuery($sql);
		$registros = $this->Util()->DB()->GetResult();
							
		return $registros;
		
	}//EnumerateAll
		
	public function Enumerate($parametro = array() ){
		
		if($parametro['filtro']){

			if(!empty($parametro['nombre'])){
				$sqlF .= " AND nombre LIKE '".$parametro['nombre']."%'";
			}
			if(!empty($parametro['vAdministracion'])){
				$sqlF .= " AND vAdministracion = '".$parametro['vAdministracion']."' ";
			}
			
			if(!empty($parametro['establoId'])){
				$sqlF .= " AND establoId = '".$parametro['establoId']."' ";
			}
		
		}

		
		$sql = "SELECT COUNT(*)	FROM producto WHERE statusReg = 'activo' ".$sqlF."";
		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		
		$resPage = $this->Util->HandlePagesAjax($this->page, $total , '');		
		
		$sqlLim = "LIMIT ".$resPage['pages']['start'].", ".$resPage['pages']['items_per_page'];
		 
		$sql = "SELECT *, productoId AS idReg FROM producto 
				WHERE statusReg = 'activo'
				".$sqlF."
				ORDER BY nombre ASC
				".$sqlLim;
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
		
		$sql = '
			INSERT INTO producto 
			(
				nombre, 
				presentacion,
				costo, 
				vAdministracion,
				establoId
			)
			VALUES(
				"'.$this->nombre.'", 
				"'.$this->presentacion.'",
				"'.$this->costo.'", 
				"'.$this->vAdministracion.'",
				"'.$this->establoId.'"
			)
		';
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

		$sql = 'UPDATE producto SET 
				nombre = "'.$this->nombre.'", 
				presentacion = "'.$this->presentacion.'", 
				costo = "'.$this->costo.'", 
				vAdministracion = "'.$this->vAdministracion.'",
				establoId = "'.$this->establoId.'"
				
				WHERE productoId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
			
		$this->Util()->setError(10113, 'error', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Update
	
	public function Delete(){
		
		$sql = 'UPDATE producto SET 
				statusReg = "inactivo"
				WHERE productoId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
		
		$this->Util()->setError(10114, 'error', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Delete
	
	public function appdetalleCarrito($clienteId){
		
		 $sql = "SELECT * FROM detalleventas as d
				left join productos_categorias as pc on pc.producto_categoria_id = d.productoId
				WHERE d.clienteId	= ".$clienteId." and estatus  = 'captura'";
			$this->Util()->DB()->setQuery($sql);
		$lts = $this->Util()->DB()->GetResult();
		
		$total = 0;
		foreach($lts as $key=>$aux){
			
			$lts[$key]["total"] = $aux["cantidad"]*$aux["precio"];
			$total += $aux["cantidad"]*$aux["precio"];
		}
		
		$data["carrito"] = $lts;
		$data["total"] = number_format($total,2);
		
		// echo "<pre>"; print_r($data);
		// exit;
		
		return $data;
		
	}
	
	public function detalleCarrito(){
		
		$ikey =  New Ikey;
		
		if(!is_array($_SESSION["carrito"]))
		$_SESSION["carrito"]=array();
		
		$total = 0;
		foreach($_SESSION["carrito"] as $key=>$aux){
			
			$ikey->setValor($aux["Id"]);
			$ikey->setCampo('producto_categoria_id');
			$mykey = $ikey->Descifrar();
			
			 $sql = "SELECT * FROM productos_categorias 
				WHERE 1	".$mykey."";
			$this->Util()->DB()->setQuery($sql);
			$info = $this->Util()->DB()->GetRow();
			
			$carrito[$key]["key"] = $key;
			$carrito[$key]["nombre_archivo"] = $info["nombre_archivo"];
			$carrito[$key]["extension"] = $info["extension"];
			$carrito[$key]["nombre"] = $info["nombre"];
			$carrito[$key]["precioActual"] = $info["precioActual"];
			$carrito[$key]["cantidad"] = $aux["cantidad"];
			$carrito[$key]["productoId"] = $aux["Id"];
			$carrito[$key]["total"] = $aux["cantidad"]*$info["precioActual"];
			
			$total += $aux["cantidad"]*$info["precioActual"];
		}
		
		$data["carrito"] = $carrito;
		$data["total"] = number_format($total,2);
		
		// echo "<pre>"; print_r($data);
		// exit;
		
		return $data;
		
	}
	
	public function CountCarrito(){
		
		$num =  count($_SESSION["carrito"]);
		
		return $num;
		
	}
	
	
	
	public function updateCarrito(){
		
		$ikey =  New Ikey;
		
		if(!is_array($_SESSION["carrito"]))
		$_SESSION["carrito"]=array();
		
		foreach($_SESSION["carrito"] as $key=>$aux){
			
			$_SESSION["carrito"][$key]["cantidad"] = $_POST["cantidad_".$key];
			$carrito[$key]["total"] =  $_POST["cantidad_".$key]*$info["precioActual"];
		}

		return $carrito;
		
	}
	
	
	public function appNextPedido($clienteId){
		
		
		
		

		
		// echo "<pre>"; print_r($_POST);
		// exit;
		switch($_POST['Id']){
	
			case "1":
		
				
				$this->setCalle($_POST["calle"]);
				$this->setnumeroInterior($_POST["numInterior"]);
				$this->setnumeroExterior($_POST["numExterior"]);
				$this->setentreCalle1($_POST["entre1"]);
				$this->setentreCalle2($_POST["entre2"]);
				$this->setReferencias($_POST["referencia"]);
				$this->setCp($_POST["cp"]);
				$this->setColonia($_POST["colonia"]);
				// $this->setEstadoId($_POST["estadoId"]);
				$this->setMunicipio($_POST["municipio"]);
				// $this->setTelefono($_POST["telefono"]);
				
				if($this->Util()->PrintErrors()){ 
						return false; 
					}
					
					if($_POST["direccionId"]==null){
								$sql = '
							INSERT INTO direcciones 
							(
								calle, 
								numeroInterior,
								numeroExterior, 
								entreCalle1,
								entreCalle2,
								referencias,
								cp,
								colonia,
								estadoId,
								municipio,
								clienteId
							)
							VALUES(
								"'.$this->calle.'", 
								"'.$this->numeroInterior.'",
								"'.$this->numeroExterior.'", 
								"'.$this->entreCalle1.'",
								"'.$this->entreCalle2.'",
								"'.$this->referencias.'",
								"'.$this->cp.'",
								"'.$this->colonia.'",
								"'.$this->estadoId.'",
								"'.$this->municipio.'",
								"'.$clienteId.'"
							)
						';
						$this->Util()->DB()->setQuery($sql);
						$Id = $this->Util()->DB()->InsertData();
						
					}else{
						
						 $sql = '
						UPDATE 
							direcciones 
						SET 
								calle = "'.$this->calle.'", 
								numeroInterior = "'.$this->numeroInterior.'",
								numeroExterior = "'.$this->numeroExterior.'", 
								entreCalle1 = "'.$this->entreCalle1.'",
								entreCalle2 = "'.$this->entreCalle2.'",
								referencias = "'.$this->referencias.'",
								cp = "'.$this->cp.'",
								colonia = "'.$this->colonia.'",
								estadoId = "'.$this->estadoId.'",
								municipio = "'.$this->municipio.'"			
						WHERE direccionId = "'.$direccioId.'"';
						$this->Util()->DB()->setQuery($sql);
						$this->Util()->DB()->UpdateData();
						
						$Id = $direccioId;
						$municipioId = $this->municipio;
					}
					
				
			$sql = "SELECT * FROM ventas 
				WHERE estatus = 'captura' and clienteId = ".$clienteId."";
			$this->Util()->DB()->setQuery($sql);
			$infovta = $this->Util()->DB()->GetRow();	

			if($infovta["ventaId"]==null){
				 $sql = '
					INSERT INTO ventas 
					(
						fecha, 
						subtotal,
						iva, 
						montoTotal,
						clienteId,
						direccionId,
						municipioId,
						facturacionId,
						paso
					)
					VALUES(
						"'.date("Y-m-d").'", 
						"'.$subtotal.'",
						"'.$iva.'", 
						"'.$montoTotal.'",
						"'.$clienteId.'",
						"'.$Id.'",
						"'.$municipioId.'",
						"0",
						"2"
						
					)
				';
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->InsertData();
			}else{
				if($infoDir["direccionId"]==null){
					$Id = $Id;
					$municipioId = $municipioId;
				}else{
					$Id = $infoDir["direccionId"];
					$municipioId = $infoDir["municipio"];
				}
				
				
				
				 $sql = '
						UPDATE 
							ventas 
						SET 
								direccionId = "'.$Id.'",	
								municipioId = "'.$municipioId.'"		
						WHERE ventaId = "'.$infovta["ventaId"].'"';
						$this->Util()->DB()->setQuery($sql);
						$this->Util()->DB()->UpdateData();
						
						
			}
				
				 

				return true;
			
			break;
			
			case 2:
			
			if($_POST["rfcId"]==null){
				$this->setRazon($_POST["nombreFac"]);
				$this->setCalle($_POST["calleFac"]);
				$this->setRFC($_POST["rfcFac"]);
				$this->setnumeroInterior($_POST["numInteriorFac"]);
				$this->setnumeroExterior($_POST["numExteriorFac"]);
				$this->setCp($_POST["cpFac"]);
				$this->setColonia($_POST["coloniaFac"]);
				$this->setEstadoId($_POST["estadoIdFac"]);
				$this->setMunicipio($_POST["municipioFac"]);
				$this->setTelefono($_POST["telefonoFac"]);
				$this->setEmail($_POST["correoFac"]);
				
				if($this->Util()->PrintErrors()){ 
						return false; 
					}
					
			
				 $sql = '
					INSERT INTO rfc 
					(
						razonSocial, 
						rfc, 
						calle, 
						numeroInterior,
						numeroExterior, 
						colonia,
						municipio,
						estadoId,
						cp,
						telefono,
						correo,
						clienteId
					)
					VALUES(
						"'.$this->razon.'", 
						"'.$this->rfc.'", 
						"'.$this->calle.'", 
						"'.$this->numeroInterior.'",
						"'.$this->numeroExterior.'",
						"'.$this->colonia.'",		
						"'.$this->municipio.'",		
						"'.$this->estadoId.'",		
						"'.$this->cp.'",
						"'.$this->telefono.'",
						"'.$this->email.'",
						"'.$clienteId.'"
					)
				';
				
				// exit;
				$this->Util()->DB()->setQuery($sql);
				$rfcId = $this->Util()->DB()->InsertData();
				
					$infoRfc["rfcId"] = $rfcId;
				}
				
				$sql = 'UPDATE ventas SET 
				rfcId = '.$infoRfc["rfcId"].'				
				WHERE estatus = "captura" and clienteId = '.$clienteId.'';
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->UpdateData();
				
			
				$sql = 'UPDATE ventas SET 
				paso = 3				
				WHERE estatus = "captura" and clienteId = '.$clienteId.'';
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->UpdateData();
				
				return true;
			
			break;
		
		}
		
		
	}
	
	public function NextPedido(){
		
		
		$ikey = New Ikey;
		
		$ikey->setValor($_SESSION['Usr']["usuarioId"]);
		$ikey->setCampo('clienteId');
		$usuarioky = $ikey->Descifrar();
		
		$ikey->setValor($_POST["rfcId"]);
		$ikey->setCampo('rfcId');
		$rfcDId = $ikey->Descifrar();
		
		$ikey->setValor($_POST["direccionId"]);
		$ikey->setCampo('direccionId');
		$direccioDId = $ikey->Descifrar();
		
		$sql = "SELECT * FROM clientes 
				WHERE 1  ".$usuarioky."";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetRow();
		
		$sql = "SELECT * FROM rfc 
				WHERE 1  ".$rfcDId."";
			$this->Util()->DB()->setQuery($sql);
		$infoRfc = $this->Util()->DB()->GetRow();
		
		$sql = "SELECT * FROM direcciones 
				WHERE 1  ".$direccioDId."";
			$this->Util()->DB()->setQuery($sql);
		$infoDir = $this->Util()->DB()->GetRow();
		

		
		// echo "<pre>"; print_r($_POST);
		// exit;
		switch($_POST['Id']){
	
			case "1":
		
				
				$this->setCalle($_POST["calle"]);
				$this->setnumeroInterior($_POST["numInterior"]);
				$this->setnumeroExterior($_POST["numExterior"]);
				$this->setentreCalle1($_POST["entre1"]);
				$this->setentreCalle2($_POST["entre2"]);
				$this->setReferencias($_POST["referencia"]);
				$this->setCp($_POST["cp"]);
				$this->setColonia($_POST["colonia"]);
				// $this->setEstadoId($_POST["estadoId"]);
				$this->setMunicipio($_POST["municipio"]);
				// $this->setTelefono($_POST["telefono"]);
				
				if($this->Util()->PrintErrors()){ 
						return false; 
					}
					
					if($_POST["direccionId"]==null){
								$sql = '
							INSERT INTO direcciones 
							(
								calle, 
								numeroInterior,
								numeroExterior, 
								entreCalle1,
								entreCalle2,
								referencias,
								cp,
								colonia,
								estadoId,
								municipio,
								clienteId
							)
							VALUES(
								"'.$this->calle.'", 
								"'.$this->numeroInterior.'",
								"'.$this->numeroExterior.'", 
								"'.$this->entreCalle1.'",
								"'.$this->entreCalle2.'",
								"'.$this->referencias.'",
								"'.$this->cp.'",
								"'.$this->colonia.'",
								"'.$this->estadoId.'",
								"'.$this->municipio.'",
								"'.$infoClt["clienteId"].'"
							)
						';
						$this->Util()->DB()->setQuery($sql);
						$Id = $this->Util()->DB()->InsertData();
						
					}else{
						
						 $sql = '
						UPDATE 
							direcciones 
						SET 
								calle = "'.$this->calle.'", 
								numeroInterior = "'.$this->numeroInterior.'",
								numeroExterior = "'.$this->numeroExterior.'", 
								entreCalle1 = "'.$this->entreCalle1.'",
								entreCalle2 = "'.$this->entreCalle2.'",
								referencias = "'.$this->referencias.'",
								cp = "'.$this->cp.'",
								colonia = "'.$this->colonia.'",
								estadoId = "'.$this->estadoId.'",
								municipio = "'.$this->municipio.'"			
						WHERE direccionId = "'.$infoDir["direccionId"].'"';
						$this->Util()->DB()->setQuery($sql);
						$this->Util()->DB()->UpdateData();
						
						$Id = $infoDir["direccionId"];
						$municipioId = $this->municipio;
					}
					
				
			$sql = "SELECT * FROM ventas 
				WHERE estatus = 'captura' and clienteId = ".$infoClt["clienteId"]."";
			$this->Util()->DB()->setQuery($sql);
			$infovta = $this->Util()->DB()->GetRow();	

			if($infovta["ventaId"]==null){
				 $sql = '
					INSERT INTO ventas 
					(
						fecha, 
						subtotal,
						iva, 
						montoTotal,
						clienteId,
						direccionId,
						municipioId,
						facturacionId,
						paso
					)
					VALUES(
						"'.date("Y-m-d").'", 
						"'.$subtotal.'",
						"'.$iva.'", 
						"'.$montoTotal.'",
						"'.$infoClt["clienteId"].'",
						"'.$Id.'",
						"'.$municipioId.'",
						"0",
						"2"
						
					)
				';
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->InsertData();
			}else{
				if($infoDir["direccionId"]==null){
					$Id = $Id;
					$municipioId = $municipioId;
				}else{
					$Id = $infoDir["direccionId"];
					$municipioId = $infoDir["municipio"];
				}
				
				
				
				 $sql = '
						UPDATE 
							ventas 
						SET 
								direccionId = "'.$Id.'",	
								municipioId = "'.$municipioId.'"		
						WHERE ventaId = "'.$infovta["ventaId"].'"';
						$this->Util()->DB()->setQuery($sql);
						$this->Util()->DB()->UpdateData();
						
						
			}
				
				 

				return true;
			
			break;
			
			case 2:
			
			if($_POST["rfcId"]==null){
				$this->setRazon($_POST["nombreFac"]);
				$this->setCalle($_POST["calleFac"]);
				$this->setRFC($_POST["rfcFac"]);
				$this->setnumeroInterior($_POST["numInteriorFac"]);
				$this->setnumeroExterior($_POST["numExteriorFac"]);
				$this->setCp($_POST["cpFac"]);
				$this->setColonia($_POST["coloniaFac"]);
				$this->setEstadoId($_POST["estadoIdFac"]);
				$this->setMunicipio($_POST["municipioFac"]);
				$this->setTelefono($_POST["telefonoFac"]);
				$this->setEmail($_POST["correoFac"]);
				
				if($this->Util()->PrintErrors()){ 
						return false; 
					}
					
			
				 $sql = '
					INSERT INTO rfc 
					(
						razonSocial, 
						rfc, 
						calle, 
						numeroInterior,
						numeroExterior, 
						colonia,
						municipio,
						estadoId,
						cp,
						telefono,
						correo,
						clienteId
					)
					VALUES(
						"'.$this->razon.'", 
						"'.$this->rfc.'", 
						"'.$this->calle.'", 
						"'.$this->numeroInterior.'",
						"'.$this->numeroExterior.'",
						"'.$this->colonia.'",		
						"'.$this->municipio.'",		
						"'.$this->estadoId.'",		
						"'.$this->cp.'",
						"'.$this->telefono.'",
						"'.$this->email.'",
						"'.$infoClt["clienteId"].'"
					)
				';
				
				// exit;
				$this->Util()->DB()->setQuery($sql);
				$rfcId = $this->Util()->DB()->InsertData();
				
					$infoRfc["rfcId"] = $rfcId;
				}
				
				$sql = 'UPDATE ventas SET 
				rfcId = '.$infoRfc["rfcId"].'				
				WHERE estatus = "captura" and clienteId = '.$infoClt["clienteId"].'';
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->UpdateData();
				
			
				$sql = 'UPDATE ventas SET 
				paso = 3				
				WHERE estatus = "captura" and clienteId = '.$infoClt["clienteId"].'';
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->UpdateData();
				
				return true;
			
			break;
		
		}
		
		
	}
	
	
	
	public function infoVenta(){
		
		$ikey = New Ikey;
		
		
		 $_SESSION['Usr']["usuarioId"];
		
		
		
		$ikey->setValor($_SESSION['Usr']["usuarioId"]);
		$ikey->setCampo('clienteId');
		$usuarioId = $ikey->Descifrar();
	
	
		$sql = "SELECT * FROM clientes 
				WHERE 1  ".$usuarioId."";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetRow();
	
	// exit;
		 $sql = '
			SELECT 
				v.*,
				d.*, 
				r.razonSocial as rs ,
				r.calle as cf, 
				r.rfc as rfc, 
				r.numeroInterior as ni, 
				r.numeroExterior as ne, 
				r.cp as cpf, 
				r.colonia as cf, 
				r.estadoId as ef, 
				r.municipio as mf,
				r.telefono as tf,
				r.correo as cf
			FROM ventas as v
			left join 	direcciones as d on d.direccionId = v.direccionId 
			left join 	rfc as r on r.rfcId = v.rfcId 
			WHERE estatus =  "captura" and v.clienteId = '.$infoClt["clienteId"].'';
// exit;
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();
		
		$ikey->setCampo($info["direccionId"]);
		$direccionId =  $ikey->Cifrar();
		
		
		$ikey->setCampo($info["rfcId"]);
		$rfcId =  $ikey->Cifrar();
		
		$info["direccionCId"] = $direccionId;
		$info["rfcCId"] = $rfcId;
		
		// echo "<pre>"; print_r($info);
		// exit;
						
		return $info; 
	}
	
	
	public function appinfoVenta($clienteId){

	
	// exit;
		 $sql = '
			SELECT 
				v.*,
				d.*, 
				r.razonSocial as rs ,
				r.calle as cf, 
				r.rfc as rfc, 
				r.numeroInterior as ni, 
				r.numeroExterior as ne, 
				r.cp as cpf, 
				r.colonia as cf, 
				r.estadoId as ef, 
				r.municipio as mf,
				r.telefono as tf,
				r.correo as cf
			FROM ventas as v
			left join 	direcciones as d on d.direccionId = v.direccionId 
			left join 	rfc as r on r.rfcId = v.rfcId 
			WHERE estatus =  "captura" and v.clienteId = '.$clienteId.'';
// exit;
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();
		
		// if ($info["direccionId"]<>null){
		// $ikey->setCampo($info["direccionId"]);
		// $direccionId =  $ikey->Cifrar();
		// }
		// if ($info["rfcId"]<>null){
		// $ikey->setCampo($info["rfcId"]);
		// $rfcId =  $ikey->Cifrar();
		// }
		$info["direccionCId"] = $info["direccionId"];
		$info["rfcCId"] = $info["rfcId"];
		
		// echo "<pre>"; print_r($info);
		// exit;
						
		return $info; 
	}
	
	
	public function misDirecciones(){
		
		
		$ikey = New Ikey;
		
		$ikey->setValor($_SESSION['Usr']["usuarioId"]);
		$ikey->setCampo('clienteId');
		$usuarioky = $ikey->Descifrar();
		
		$sql = "SELECT * FROM direcciones 
				WHERE 1  ".$usuarioky."";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetResult();
		
		foreach($infoClt as $key=>$aux){
			$ikey->setCampo($aux["direccionId"]);
			$IdCifrado =  $ikey->Cifrar();
			$infoClt[$key]["direccionCId"] = $IdCifrado ;
		}
		
		return $infoClt;
	}
	
	public function appmisDirecciones($clienteId){
		
		
		
		
		$sql = "SELECT * FROM direcciones 
				WHERE clienteId =  ".$clienteId."";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetResult();
		
		// foreach($infoClt as $key=>$aux){
			// $ikey->setCampo($aux["direccionId"]);
			// $IdCifrado =  $ikey->Cifrar();
			// $infoClt[$key]["direccionCId"] = $IdCifrado ;
		// }
		
		return $infoClt;
	}
	
	// appmisRFC
	public function appmisRFC($clienteId){
		
		
		
		
		$sql = "SELECT * FROM rfc 
				WHERE clienteId =  ".$clienteId."";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetResult();
		
		// foreach($infoClt as $key=>$aux){
			// $ikey->setCampo($aux["rfcId"]);
			// $IdCifrado =  $ikey->Cifrar();
			// $infoClt[$key]["rfcCId"] = $IdCifrado ;
		// }
		
		return $infoClt;
	}
	
	public function misRFC(){
		
		
		$ikey = New Ikey;
		
		$ikey->setValor($_SESSION['Usr']["usuarioId"]);
		$ikey->setCampo('clienteId');
		$usuarioky = $ikey->Descifrar();
		
		$sql = "SELECT * FROM rfc 
				WHERE 1  ".$usuarioky."";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetResult();
		
		foreach($infoClt as $key=>$aux){
			$ikey->setCampo($aux["rfcId"]);
			$IdCifrado =  $ikey->Cifrar();
			$infoClt[$key]["rfcCId"] = $IdCifrado ;
		}
		
		return $infoClt;
	}
	
	public function infoDireccion(){
		
		
		$ikey = New Ikey;
		
		$ikey->setValor($this->direccionId);
		$ikey->setCampo('direccionId');
		$usuarioky = $ikey->Descifrar();
		
		 $sql = "SELECT * FROM direcciones 
				WHERE 1  ".$usuarioky."";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetRow();
		
		return $infoClt;
	}
	
	
	public function infoRfc(){
		
		
		$ikey = New Ikey;
		
		$ikey->setValor($this->rfcId);
		$ikey->setCampo('rfcId');
		$usuarioky = $ikey->Descifrar();
		
		 $sql = "SELECT 
					r.razonSocial as rs ,
					r.calle as cf, 
					r.rfc as rfc, 
					r.numeroInterior as ni, 
					r.numeroExterior as ne, 
					r.cp as cpf, 
					r.colonia as cf, 
					r.estadoId as ef, 
					r.municipio as mf,
					r.telefono as tf,
					r.correo as cf
				FROM rfc as r 
				WHERE 1  ".$usuarioky."";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetRow();
		
		
		return $infoClt;
	}
	
	public function enviarPedido(){
		
		$ikey = New Ikey;
		
		$ikey->setValor($_SESSION['Usr']["usuarioId"]);
		$ikey->setCampo('clienteId');
		$usuarioky = $ikey->Descifrar();
	

		$sql = "SELECT * FROM clientes 
				WHERE 1  ".$usuarioky."";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetRow();

		 $sql = "SELECT * FROM ventas 
				WHERE clienteId = '".$infoClt["clienteId"]."' and estatus = 'captura'";
			$this->Util()->DB()->setQuery($sql);
		$infoVta = $this->Util()->DB()->GetRow();
		
		//asignamos sucursal
		
		 $sql = "SELECT * FROM sucursal 
				WHERE municipioId = '".$infoVta["municipioId"]."'";
			$this->Util()->DB()->setQuery($sql);
		$infoSc = $this->Util()->DB()->GetRow();
		
		
		$infoSc["sucursalid"] = 1;
		foreach($_SESSION["carrito"] as $key=>$aux){
			
			$ikey->setValor($aux["Id"]);
			$ikey->setCampo('producto_categoria_id');
			$mykey = $ikey->Descifrar();
			
			 $sql = "SELECT * FROM productos_categorias 
				WHERE 1	".$mykey."";
			$this->Util()->DB()->setQuery($sql);
			$info = $this->Util()->DB()->GetRow();
			
			$carrito[$key]["key"] = $key;
			$carrito[$key]["nombre"] = $info["nombre"];
			$carrito[$key]["precioActual"] = $info["precioActual"];
			$carrito[$key]["cantidad"] = $aux["cantidad"];
			$carrito[$key]["productoId"] = $aux["Id"];
			$carrito[$key]["total"] = $aux["cantidad"]*$info["precioActual"];
			
				$sql = '
			INSERT INTO detalleventas 
			(
				productoId, 
				cantidad,
				precio, 
				ventaId
			)
			VALUES(
				"'.$info["producto_categoria_id"].'", 
				"'.$aux["cantidad"].'",
				"'.$info["precioActual"].'", 
				"'.$infoVta["ventaId"].'"
			)
			';
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->InsertData();
			
			$total += $aux["cantidad"]*$info["precioActual"];
		}
		

		$data["carrito"] = $carrito;
		$data["total"] = $total;
		
		
		//asignamos folio
		
		$sql = 'SELECT * FROM folios where sucursalId =  '.$infoSc["sucursalid"].' and anio = "'.date("Y").'"';
		$this->Util()->DB()->setQuery($sql);
		$infoFoli = $this->Util()->DB()->GetRow();
		
		$sql = 'UPDATE ventas SET 
				estatus = "enviado",
				hora = "'.date("H:i:s").'",
				subtotal = "'.$total.'",
				folio = "'.$infoFoli["folioSiguiente"].'",
				montoTotal = "'.$total.'",
				sucursalId = "'.$infoSc["sucursalid"].'"
				WHERE clienteId = "'.$infoClt["clienteId"].'" and estatus = "captura"';
				
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
		
		 $sql = 'UPDATE folios SET 
				folioActual = "'.($infoFoli["folioActual"]+1).'",
				folioSiguiente =  "'.($infoFoli["folioSiguiente"]+1).'"
				WHERE sucursalId = "'.$infoSc["sucursalid"].'" and anio = "'.date("Y").'"';
				
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
		
		unset($_SESSION["carrito"]);
		
		
		return true;
		
	}
	
	public function appenviarPedido($clienteId){
		
		$infoSc["sucursalid"] = 1;
		
		$sql = "SELECT * FROM ventas 
				WHERE clienteId = '".$clienteId."' and estatus = 'captura'";
			$this->Util()->DB()->setQuery($sql);
		$infoVta = $this->Util()->DB()->GetRow();
		
		$sql = 'UPDATE detalleventas SET 
				estatus = "vendido",
				ventaId = '.$infoVta['ventaId'].'
				WHERE clienteId = "'.$clienteId.'" and estatus = "captura"';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
		
		$sql = "SELECT * FROM detalleventas 
				WHERE ventaId = '".$infoVta['ventaId']."'";
			$this->Util()->DB()->setQuery($sql);
		$lstProductos = $this->Util()->DB()->GetRow();
		
		
		foreach($lstProductos as $key=>$aux){
			$total += $aux["cantidad"]*$info["precio"];
		}

		//asignamos folio
		$sql = 'SELECT * FROM folios where sucursalId =  '.$infoSc["sucursalid"].' and anio = "'.date("Y").'"';
		$this->Util()->DB()->setQuery($sql);
		$infoFoli = $this->Util()->DB()->GetRow();
		
		$sql = 'UPDATE ventas SET 
				estatus = "enviado",
				hora = "'.date("H:i:s").'",
				subtotal = "'.$total.'",
				folio = "'.$infoFoli["folioSiguiente"].'",
				montoTotal = "'.$total.'",
				sucursalId = "'.$infoSc["sucursalid"].'"
				WHERE clienteId = "'.$clienteId.'" and estatus = "captura"';
			// exit;	
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
		
		 $sql = 'UPDATE folios SET 
				folioActual = "'.($infoFoli["folioActual"]+1).'",
				folioSiguiente =  "'.($infoFoli["folioSiguiente"]+1).'"
				WHERE sucursalId = "'.$infoSc["sucursalid"].'" and anio = "'.date("Y").'"';
				
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();

		return true;
		
	}
	
	public function detalleVta(){
		
		$ikey = New Ikey;
		
		$ikey->setValor($_SESSION['Usr']["usuarioId"]);
		$ikey->setCampo('clienteId');
		$usuarioky = $ikey->Descifrar();
	

		$sql = "SELECT * FROM clientes 
				WHERE 1  ".$usuarioky."";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetRow();
		

		
		
		$sql = "SELECT * FROM ventas 
				WHERE clienteId = '".$infoClt["clienteId"]."' and estatus <> 'captura'";
		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		
		$resPage = $this->Util->HandlePagesAjax($this->page, $total , '');		
		
		$sqlLim = "LIMIT ".$resPage['pages']['start'].", ".$resPage['pages']['items_per_page'];
		 
		$sql = "SELECT * FROM ventas 
				WHERE clienteId = '".$infoClt["clienteId"]."' and estatus <> 'captura'".$sqlLim;
		$this->Util()->DB()->setQuery($sql);
		$data['result'] = $this->Util()->DB()->GetResult();
		
		foreach($data['result'] as $key=>$aux){
			
			$sql = "SELECT count(*) FROM detalleventas  
				WHERE ventaId = '".$aux["ventaId"]."'";
			$this->Util()->DB()->setQuery($sql);
			$counts = $this->Util()->DB()->GetSingle();
			$data['result'][$key]['countVta'] = $counts ;
		}
		
		$data['pages'] = $resPage['pages'];
		$data['info'] = $resPage['info'];
					
		return $data;
		
		
		
		
		return $infoVta;
		
	}
	
	
	
	public function enumerateMunicipio(){
		
		$ikey = New Ikey;
		
		$ikey->setValor($_SESSION['Usr']["usuarioId"]);
		$ikey->setCampo('clienteId');
		$usuarioky = $ikey->Descifrar();
	

		$sql = "SELECT * FROM municipio 
				WHERE 1  order by nombre asc";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetResult();
		
		return $infoClt;
		
	}
	
	public function verVta($Id){
		
		
		$sql = "SELECT 
					*
				FROM 
					detalleventas as dv
				left join productos_categorias as p on dv.productoId = p.producto_categoria_id
				WHERE ventaId =  ".$Id."";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetResult();
		
		return $infoClt;
		
	}
	
	
	public function InfoProducto(){
		
		
		$sql = "SELECT 
					*
				FROM 
					productos_categorias 
				WHERE producto_categoria_id =  ".$this->id."";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetRow();
		
		return $infoClt;
		
	}
	
	public function countProductosinCar($Id){
		
		
		$sql = "SELECT 
					count(*)
				FROM 
					detalleventas as dv
				WHERE clienteId =  ".$Id." and estatus = 'captura'";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetSingle();
		
		return $infoClt;
		
	}
	
	public function appAddCar(){
						
		
		
		 $sql = '
			INSERT INTO detalleventas 
			(
				productoId, 
				cantidad,
				precio, 
				clienteId,
				estatus
			)
			VALUES(
				"'.$this->id.'", 
				"'.$this->cantidad.'",
				"'.$this->costo.'", 
				"'.$this->clienteId.'",
				"captura"
			)
		';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->InsertData();
			
		
		
		return true;
		
	}//Save
	
	
	public function misPedidos(){
		
		
		$sql = "SELECT 
					*
				FROM 
					ventas 
				WHERE clienteId =  ".$this->clienteId."";
			$this->Util()->DB()->setQuery($sql);
		$infoClt = $this->Util()->DB()->GetResult();
		
		return $infoClt;
		
	}
}

?>