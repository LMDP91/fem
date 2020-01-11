<?php


class Question extends Encuesta
{
    private $currentAnswers = [];
    private $answersExist = [];
    private $victimaId;
    private $pollVictimaId;
    public function setVictimaId($value){
        $this->Util()->ValidateRequireField($value, 'Favor de ingresar los datos personales');
        $this->victimaId = $value;
    }
    public function getVictimaId(){
        return $this->victimaId;
    }
    public function resetCurrentAnswers(){
        $this->currentAnswers = [];
    }
    public function resetAnswerExist(){
        $this->answersExist = [];
    }
    public function getArrayCurrentAnswers(){
        return $this->currentAnswers;
    }
    public function setPollVictimaId($value){
        $this->pollVictimaId = $value;
    }
    public function getPollVictimaId(){
        return $this->pollVictimaId;
    }
    public function createArrayCurrentAnswers(){
        $this->resetCurrentAnswers();
        foreach($_POST as $key => $var){
            $key_explode  = explode("_",$key);
            if($key_explode[0] == "question"){
                $cad["id"] = $key_explode[1];
                $cad["resp"] = $_POST[$key];
                $this->currentAnswers[]= $cad;
            }
        }
    }
    public function validateTotalAnswers()
    {
        if($this->totalQuestionsPoll() != count($this->getArrayCurrentAnswers()))
            $this->Util()->setError(0,"error","Faltan preguntas por responder");
    }

    public function savePollVictima(){
        $sql = "insert into pollVictima(encuestaId,victimaId,fechaAplicacion)
                values('".$this->getEncuestaId()."','".$this->getVictimaId()."','".date("Y-m-d")."')";
        $this->Util()->DB()->setQuery($sql);
        $last = $this->Util()->DB()->InsertData();
        $this->setPollVictimaId($last);
    }
    public function saveCurrentAnswersVictima(){
        $this->createArrayCurrentAnswers();
        $this->validateTotalAnswers();
        if(!$this->pollVictimaId){
            $this->setVictimaId($_POST["victimaId"]);
        }

        if($this->Util()->PrintErrors())
            return false;

        if(!$this->pollVictimaId)
            $this->savePollVictima();

        $pVId  = $this->pollVictimaId;
        $sql  ="replace into answerPollVictima(pollVictimaId,preguntaId,respuesta) VALUES";
        foreach ($this->currentAnswers as $key => $var){
            $pId = $var["id"];
            $res = $var["resp"];
            $sql .= "('$pVId','$pId','$res'),";
        }
        $sql = substr($sql,0,-1);
        $this->Util()->DB()->setQuery($sql);
        $this->Util()->DB()->InsertData();
        $sql  ="update pollVictima set status ='Finalizado' where pollVictimaId = '".$this->pollVictimaId."' ";
        $this->Util()->DB()->setQuery($sql);
        $this->Util()->DB()->UpdateData();

        $this->generateResultPoll($this->pollVictimaId);

        $this->Util()->setError(0,"complete","Se ha guardado correctamente");
        $this->Util()->PrintErrors();

        return true;

    }
    public function getAnswersIfExist(){
        $this->resetAnswerExist();
        $sql  ="select * from pollVictima where victimaId = '".$this->victimaId."' and encuestaId='".$this->getEncuestaId()."' ";
        $this->Util()->DB()->setQuery($sql);
        $row = $this->Util()->DB()->GetRow();
        if(!$row)
            return false;

        $this->setPollVictimaId($row["pollVictimaId"]);
        $sql = "select * from answerPollVictima where pollVictimaId = '".$row["pollVictimaId"]."' ";
        $this->Util()->DB()->setQuery($sql);
        $answers = $this->Util()->DB()->GetResult();
        foreach($answers as $key => $var){
            $this->answersExist[$var["preguntaId"]] = $var["respuesta"];
        }
    }
    public function questionsByPoll(){
        $this->getAnswersIfExist();

        $sql = "SELECT * 
				from
				encuesta 
				where encuestaId ='".$this->getEncuestaId()."' ";

        $this->Util()->DB()->setQuery($sql);
        $infoEncuesta = $this->Util()->DB()->GetRow();
        $sql = 'SELECT * 
				from
				pregunta 
				where
				encuestaId = '.$infoEncuesta['encuestaId'].'';
        $this->Util()->DB()->setQuery($sql);
        $answers = $this->Util()->DB()->GetResult();

        foreach($answers as $key=>$aux){
            if($aux["tiporespuesta"]=="opcional"){
                unset($opciones);
                $selfOptions = explode("_",$aux["opcional"]);

                for($i=0;$i<=count($selfOptions);$i++){
                    if($selfOptions[$i]<>""){
                        $opciones[] = $selfOptions[$i];
                    }
                }
                $answers[$key]["opciones"] = $opciones;
                if(array_key_exists($aux["preguntaId"],$this->answersExist))
                    $answers[$key]["currentAnswer"] = $this->answersExist[$aux["preguntaId"]];

            }else if($aux["tiporespuesta"]=="punto"){
                $r = explode("_",$aux["rango"]);
                $answers[$key]["rango1"] = $r[0];
                $answers[$key]["rango2"] = $r[1];
            }

        }
        return $answers;
    }
    public function validateFullResolvePoll(){
        $pendiente = 0;
        $this->Util()->DB()->setQuery("select * from encuesta where tipo = '".$this->getContexto()."' ");
        $result = $this->Util()->DB()->GetResult();
        foreach ($result as $key => $value){
            $sql  ="select status from pollVictima where encuestaId='".$value["encuestaId"]."' and victimaId = '".$this->victimaId."' ";
            $this->Util()->DB()->setQuery($sql);
            $row = $this->Util()->DB()->GetRow();
            if(!$row || $row["status"] =='Pendiente')
                $pendiente++;
        }
        if($pendiente>0)
            return false;

        return true;
    }
    public function getResultPollVictima(){
        global $victima;
        $victima->setVictimaId($this->victimaId);
        $infoVictima = $victima->Info();

        $this->Util()->DB()->setQuery("select * from encuesta where tipo = '".$infoVictima['tipo']."' ");
        $encuestas = $this->Util()->DB()->GetResult();
        foreach($encuestas as $key =>$value){
            $this->setEncuestaId($value["encuestaId"]);
            $this->setVictimaId($this->victimaId);
            $encuestas[$key]["resultado"] = $this->getResultPoll();
            $encuestas[$key]["preguntas"] = $this->questionsByPoll();
        }
        return $encuestas;
    }
    public function getResultPoll(){
        $sql  ="select resultadoEncuesta from pollVictima where encuestaId='".$this->getEncuestaId()."' and victimaId = '".$this->victimaId."' ";
        $this->Util()->DB()->setQuery($sql);
        return  !$this->Util()->DB()->GetSingle()? "Pendiente" : $this->Util()->DB()->GetSingle();
    }
    public function generateResultPoll($pollVictimaId){
        $frecuencias = ["Siempre"=>1,"Frecuentemente"=>.75,"Por lo menos una vez"=>.50,"Nunca"=>.25];
        $sumMat = 0;
        $totalPreguntas =0;

        $sql = "select a.*,b.riesgo,b.orden from answerPollVictima a inner join pregunta b on a.preguntaId=b.preguntaId where a.pollVictimaId = '$pollVictimaId' ";
        $this->Util()->DB()->setQuery($sql);
        $answers = $this->Util()->DB()->GetResult();
        foreach($answers as $key => $var){
            $sumMat =$sumMat + (float)$var["orden"] + (float) $frecuencias[ucfirst(strtolower($var["respuesta"]))];
            $totalPreguntas++;
        }
        $resultadoEncuesta = $this->getValueResultByPoint($totalPreguntas,$sumMat);
        $sql  ="update pollVictima set resultadoEncuesta ='$resultadoEncuesta', puntos = '$sumMat' where pollVictimaId = '".$this->pollVictimaId."' ";
        $this->Util()->DB()->setQuery($sql);
        $this->Util()->DB()->UpdateData();
    }
    function getValueResultByPoint($totalQuestion =0,$point= 0){
        switch ($totalQuestion){
            case 12:
                if($point>=84)
                    return "Severa";
                elseif($point>81.01&&$point<=83.9)
                    return "Moderada";
                else return "Baja";
            case 9:
                if($point>=49.6)
                    return "Severa";
                elseif($point>47.26&&$point<=49.5)
                    return "Moderada";
                else return "Baja";
            case 7:
                if($point>=31.6)
                    return "Severa";
                elseif($point>29.76&&$point<=31.5)
                    return "Moderada";
                else return "Baja";
            default:
                return "Baja";
        }
    }
}