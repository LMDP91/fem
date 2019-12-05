<?php

class ReporteCosto extends Main
{
	private $establoId;
	private $fechaInicio;
	private $fechaFin;
	private $diagnosticoId;


	
	public function setEstabloId($value){
		$this->establoId = $value;
	}
	public function setFechaInicio($value){
		$this->fechaInicio = $value;
	}
	public function setFechaFin($value){
		$this->fechaFin = $value;
	}
	public function setDiagnosticoId($value){
		$this->diagnosticoId = $value;
	}
	
	public function ConsultarCalendario( $parametro ){
		
		if(!empty($parametro['accionSoloNumero'])){
			$datos .= " AND IC.accion REGEXP '^[0-9]+$' = 1";
		}
		if(!empty($parametro['accion'])){
			$datos .= " AND IC.accion = '".$parametro['accion']."'";
		}
		if(!empty($this->diagnosticoId)){
			$datos .= " AND I.diagnosticoId = '".$this->diagnosticoId."'";
		}
		
		
	 	$sql = "
			SELECT 
				IC.*,
				I.produccionLeche
			FROM incidencia_calendario IC
			INNER JOIN incidencia I ON IC.incidenciaId = I.incidenciaId
			WHERE 1
			".$datos."
			AND IC.statusDia = 'si'
			AND I.establoId = '".$this->establoId."'
			AND IC.tratamientoId = '".$this->tratamientoId."'
			AND (IC.fecha BETWEEN '".$this->fechaInicio."' AND '".$this->fechaFin."')
			ORDER BY I.incidenciaId  DESC
		";
		$this->Util()->DB()->setQuery($sql);
		
		return $result = $this->Util()->DB()->GetResult();
	
	}
	
	public function TotalesCalendario( $infoCalendarioDescarte ){
	
	
		$array_totales = array();
		if(!is_array($infoCalendarioDescarte)){ $infoCalendarioDescarte = array(); }
		foreach($infoCalendarioDescarte as $key => $row){
		
			$array_totales['litroDescarte'] += $row['produccionLeche'];
		
		}
		
		return $array_totales;
	}
	
	public function Enumerate(){
		
		
		$tratamiento = new Tratamiento;
		$incidencia = new Incidencia;
		$establo = new Establo;
		
		$establo->setId($this->establoId);
		$infoEstablo = $establo->info();
		
		
		$incidencia->setEstabloId( $this->establoId ,false );
		$incidencia->setFechaInicio( $this->fechaInicio );
		$incidencia->setFechaFin( $this->fechaFin);
		$incidencia->setDiagnosticoId( $this->diagnosticoId);

		$listaTratamiento = $tratamiento->EnumerateAll();
		if(!is_array($listaTratamiento)){ $listaTratamiento = array(); }
		//totalAdministradoProtocolo
		$array_totales = array();
		foreach($listaTratamiento as $key => $row){
		
			$incidencia->setTratamientoId( $row['tratamientoId'], false );
			$infoIncidencia = $incidencia->BuscarIncidencia();
			
			$totalIncidencia = sizeof($infoIncidencia);			
			$listaTratamiento[$key]['totalIncidencia'] = $totalIncidencia;
			
			$this->tratamientoId = $row['tratamientoId'];
			
			$parametro = array('accionSoloNumero' => 1);

			$infoCalendarioTratamiento = $this->ConsultarCalendario( $parametro );
			
			$totalAdministradoProtocolo = sizeof($infoCalendarioTratamiento);	
			$listaTratamiento[$key]['totalAdministradoProtocolo'] = $totalAdministradoProtocolo;
		
		
			$tratamiento->setId($row['tratamientoId']);
			$productos = $tratamiento->ListaProductoTratameinto();
			$listaTratamiento[$key]['productos'] = $productos;

			$listaTratamiento[$key]['costoTotalProtocolo'] = $row['costo'] * $totalAdministradoProtocolo;
		
			$array_totales['totalIncidencia'] += $totalIncidencia;
			$array_totales['totalAdministradoProtocolo'] += $totalAdministradoProtocolo;
			$array_totales['costo'] += $row['costo'];
			$array_totales['costoTotalProtocolo'] += $listaTratamiento[$key]['costoTotalProtocolo'];
			
			
		##costo DESCARTE	
		 	$parametro = array('accion' => 'D');
			$infoCalendarioDescarte = $this->ConsultarCalendario( $parametro );
			$totalAdministradoDescarte = sizeof($infoCalendarioDescarte);
			
			$totalCalendario = $this->TotalesCalendario( $infoCalendarioDescarte );
			
			$listaTratamiento[$key]['totalAdministradoDescarte'] = $totalAdministradoDescarte;
			
			
			$listaTratamiento[$key]['litroDescarte'] = $totalCalendario['litroDescarte'];
			$listaTratamiento[$key]['costoDescarte'] = $totalCalendario['litroDescarte'] * $infoEstablo['costoLitro'];
			//$listaTratamiento[$key]['infoCalendarioDescarte'] = $infoCalendarioDescarte;

			$array_totales['totalAdministradoDescarte'] += $totalAdministradoDescarte;
			$array_totales['litroDescarte'] += $totalCalendario['litroDescarte'];
			$array_totales['costoDescarte'] += $listaTratamiento[$key]['costoDescarte']; 
			
			##costo por Mastitis
			$listaTratamiento[$key]['costoTotalMastis'] = $listaTratamiento[$key]['costoDescarte'] + $listaTratamiento[$key]['costoTotalProtocolo'];
			$array_totales['costoTotalMastis'] += $listaTratamiento[$key]['costoTotalMastis'];
		
			$grafica['protocolo'][$key] = $listaTratamiento[$key]['numTratamiento'];
			$grafica['costoTotalProtocolo'][$key] = $listaTratamiento[$key]['costoTotalProtocolo'];
			$grafica['costoDescarte'][$key] = $listaTratamiento[$key]['costoDescarte'];
			$grafica['costoTotalMastis'][$key] = $listaTratamiento[$key]['costoTotalMastis'];
		}
		
		
		if(!empty($grafica)){
			$this->Graficar( $grafica );
		}
		// echo'<PRE>';
		// print_r($grafica);
		// exit; 
		
		$dato['listaTratamiento'] = $listaTratamiento;
		$dato['array_totales'] = $array_totales;
		$dato['infoEstablo'] = $infoEstablo;

					
		return $dato;
		
	}//Enumerate
	
	public function Graficar( $grafica = array() ){
		// $datay1 = array(20,15,23,15);
		// $datay2 = array(12,9,42,8);
		// $datay3 = array(5,17,32,24);

		// Setup the graph
		$graph = new Graph(300,250);
		$graph->SetScale("textlin");

		$theme_class=new UniversalTheme;

		$graph->SetTheme($theme_class);
		$graph->img->SetAntiAliasing(false);
		$graph->title->Set('Grafica de Costos');
		$graph->SetBox(false);

		$graph->img->SetAntiAliasing();

		$graph->yaxis->HideZeroLabel();
		$graph->yaxis->HideLine(false);
		$graph->yaxis->HideTicks(false,false);

		$graph->xgrid->Show();
		$graph->xgrid->SetLineStyle("solid");
		//$graph->xaxis->SetTickLabels(array('A','B','C','D'));
		$graph->xaxis->SetTickLabels( $grafica['protocolo'] );
		$graph->xgrid->SetColor('#E3E3E3');

		// Create the first line
		//$p1 = new LinePlot($datay1);
		$p1 = new LinePlot($grafica['costoTotalProtocolo']);
		$graph->Add($p1);
		$p1->SetColor("#6495ED");
		$p1->SetLegend('Tratamiento');

		// Create the second line
		//$p2 = new LinePlot($datay2);
		$p2 = new LinePlot($grafica['costoDescarte']);
		$graph->Add($p2);
		$p2->SetColor("#B22222");
		$p2->SetLegend('Descarte');

		// Create the third line
		//$p3 = new LinePlot($datay3);
		$p3 = new LinePlot($grafica['costoTotalMastis']);
		$graph->Add($p3);
		$p3->SetColor("#FF1493");
		$p3->SetLegend('Total');

		$graph->legend->SetFrameWeight(1);

		// Output line
		
		@unlink(DOC_ROOT."/grafica/reporte_costo.png");
		$graph->Stroke(DOC_ROOT."/grafica/reporte_costo.png");
	
	
	
	}
	

						
}

?>