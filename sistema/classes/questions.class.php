<?php


class Question extends Encuesta
{
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
}