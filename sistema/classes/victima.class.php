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

    public function setVictimaId($value){
        $this->Util()->ValidateInteger($value);
        $this->victimaId= $value;
    }
    public function setNombre($value){
        if($this->Util()->ValidateRequireField($value, 'Nombre')){
            $this->nombre = $value;
        }
    }
    public function setAparterno($value){
        if($this->Util()->ValidateRequireField($value, 'Apellido Paterno')){
            $this->apaterno = $value;
        }
    }
    public function setAmaterno($value){
        if($this->Util()->ValidateRequireField($value, 'Apellido Materno')){
            $this->amaterno = $value;
        }
    }
    public function setEdad($value){
        if($this->Util()->ValidateRequireField($value, 'Edad')){
            $this->edad = $value;
        }
    }
    public function setEstadoCivil($value){
        if($this->Util()->ValidateRequireField($value, 'Estado Civil')){
            $this->estadoCivil = $value;
        }
    }
    public function setNacionalidad($value){
        if($this->Util()->ValidateRequireField($value, 'Nacionalidad')){
            $this->nacionalidad = $value;
        }
    }
    public function setGradoEstudio($value){
        if($this->Util()->ValidateRequireField($value, 'Grado de Estudios')){
            $this->gradoEstudio = $value;
        }
    }
    public function setOcupacion($value){
        if($this->Util()->ValidateRequireField($value, 'Ocupacion')){
            $this->ocupacion = $value;
        }
    }
    public function setLugarNacimiento($value){
        if($this->Util()->ValidateRequireField($value, 'Lugar de Nacimiento')){
            $this->lugarNacimiento = $value;
        }
    }
    public function setMunicipio($value){
        if($this->Util()->ValidateRequireField($value, 'Municipio')){
            $this->municipio = $value;
        }
    }
    public function setColonia($value){
        if($this->Util()->ValidateRequireField($value, 'Colonia')){
            $this->colonia = $value;
        }
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
                    colonia
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
                     '$colonia'
                    )";
        $this->Util()->DB()->setQuery($sql);
        $this->Util()->DB()->InsertData();

        return true;
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
                    colonia = '$colonia'
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
}