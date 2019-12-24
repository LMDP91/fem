<?php

class Victima extends main
{
    private $nombre;
    private $apaterno;
    private $amaterno;
    private $edad;
    private $estadoCivil;
    private $nacionalidad;
    private $gradoEstudio;
    private $ocupacion;
    private $lugarNacimiento;
    private $municipio;
    private $colonia;
    private $victimaId;
    private $tipo;

    public function setVictimaId($value){
        $this->Util()->ValidateInteger($value);
        $this->victimaId= $value;
    }
    public function setNombre($value){
        $this->Util()->ValidateRequireField($value, 'Nombre');
        $this->nombre = $value;

    }
    public function setAparterno($value){
        $this->Util()->ValidateRequireField($value, 'Apellido Paterno');
        $this->apaterno = $value;

    }
    public function setAmaterno($value){
        $this->Util()->ValidateRequireField($value, 'Apellido Materno');
        $this->amaterno = $value;

    }
    public function setEdad($value){
        $this->Util()->ValidateRequireField($value, 'Edad');
        $this->edad = $value;

    }
    public function setEstadoCivil($value){
        $this->Util()->ValidateRequireField($value, 'Estado Civil');
        $this->estadoCivil = $value;
    }
    public function setNacionalidad($value){
        $this->Util()->ValidateRequireField($value, 'Nacionalidad');
        $this->nacionalidad = $value;

    }
    public function setGradoEstudio($value){
        $this->Util()->ValidateRequireField($value, 'Grado de Estudios');
        $this->gradoEstudio = $value;
    }
    public function setOcupacion($value){
        $this->Util()->ValidateRequireField($value, 'Ocupacion');
        $this->ocupacion = $value;

    }
    public function setLugarNacimiento($value){
        $this->Util()->ValidateRequireField($value, 'Lugar de Nacimiento');
        $this->lugarNacimiento = $value;
    }
    public function setMunicipio($value){
        $this->Util()->ValidateRequireField($value, 'Municipio');
        $this->municipio = $value;
    }
    public function setColonia($value){
        $this->Util()->ValidateRequireField($value, 'Colonia');
        $this->colonia = $value;

    }
    public function setTipo($value){
        $this->Util()->ValidateRequireField($value, 'Tipo contexto');
        $this->tipo = $value;

    }
    public function save(){
        if($this->Util()->PrintErrors()){
            return false;
        }
        $nombre =  $this->nombre;
        $apaterno = $this->apaterno;
        $amaterno = $this->amaterno;
        $edad = $this->edad;
        $estadoCivil = $this->estadoCivil;
        $nacionalidad = $this->nacionalidad;
        $gradoEstudio = $this->gradoEstudio;
        $ocupacion = $this->ocupacion;
        $lugarNacimiento = $this->lugarNacimiento;
        $municipio = $this->municipio;
        $colonia = $this->colonia;
        $tipo = $this->tipo;

       $sql ="insert into victima(
                    nombre,
                    apaterno,
                    amaterno,
                    edad,
                    estadoCivil,
                    nacionalidad,
                    gradoEstudio,
                    ocupacion,
                    lugarNacimiento,
                    municipio,
                    colonia,
                    tipo
                    )values(
                     '$nombre',
                     '$apaterno',
                     '$amaterno',
                     '$edad',
                     '$estadoCivil',
                     '$nacionalidad',
                     '$gradoEstudio',
                     '$ocupacion',
                     '$lugarNacimiento',
                     '$municipio',
                     '$colonia',
                     '$tipo'
                    )";
        $this->Util()->DB()->setQuery($sql);
        $id = $this->Util()->DB()->InsertData();

        return $id;
    }
    public function update(){
        if($this->Util()->PrintErrors()){
            return false;
        }

        $nombre =  $this->nombre;
        $apaterno = $this->apaterno;
        $amaterno = $this->amaterno;
        $edad = $this->edad;
        $estadoCivil = $this->estadoCivil;
        $nacionalidad = $this->nacionalidad;
        $gradoEstudio = $this->gradoEstudio;
        $ocupacion = $this->ocupacion;
        $lugarNacimiento = $this->lugarNacimiento;
        $municipio = $this->municipio;
        $colonia = $this->colonia;
        $tipoContexto = $this->tipoContexto;

       $sql ="update victima set 
                    nombre = '$nombre',
                    apaterno = '$apaterno',
                    amaterno = '$amaterno',
                    edad = '$edad',
                    estadoCivil = '$estadoCivil',
                    nacionalidad = '$nacionalidad',
                    gradoEstudio = '$gradoEstudio',
                    ocupacion = '$ocupacion',
                    lugarNacimiento = '$lugarNacimiento',
                    municipio = '$municipio',
                    colonia = '$colonia',
                    tipoContexto = '$tipoContexto'
                    where victimaId ='".$this->victimaId."' ";
        $this->Util()->DB()->setQuery($sql);
        $this->Util()->DB()->UpdateData();

        return true;
    }
    public function info(){
        $sql  = "select * from victima where victimaId= '".$this->victimaId."' ";
        $this->Util()->DB()->setQuery($sql);
        return $this->Util()->DB()->GetRow();
    }
    public function Enumerate(){
        global $question;
        $sql  = "select * from victima ";
        $this->Util()->DB()->setQuery($sql);
        $victimas = $this->Util()->DB()->GetResult();
        foreach($victimas as $key=> $value){
              $question->setVictimaId($value["victimaId"]);
              $question->setContexto($value["tipo"]);
              $victimas[$key]["completePoll"] = $question->validateFullResolvePoll();
        }
        return $victimas;
    }
}