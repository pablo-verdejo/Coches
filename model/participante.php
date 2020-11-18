<?php

class Participante{
    public $DNI_participante;
    public $nombre_participante;
    public $apellido_participante;
    public $fecha_nacimiento;
    public $genero_participante;

    function __construct($DNI_participante){
        $this->$DNI_participante=$DNI_participante;
    }



    /**
     * Get the value of DNI_participante
     */ 
    public function getDNI_participante()
    {
        return $this->DNI_participante;
    }

    /**
     * Set the value of DNI_participante
     *
     * @return  self
     */ 
    public function setDNI_participante($DNI_participante)
    {
        $this->DNI_participante = $DNI_participante;

        return $this;
    }

    /**
     * Get the value of nombre_participante
     */ 
    public function getNombre_participante()
    {
        return $this->nombre_participante;
    }

    /**
     * Set the value of nombre_participante
     *
     * @return  self
     */ 
    public function setNombre_participante($nombre_participante)
    {
        $this->nombre_participante = $nombre_participante;

        return $this;
    }

    /**
     * Get the value of apellido_participante
     */ 
    public function getApellido_participante()
    {
        return $this->apellido_participante;
    }

    /**
     * Set the value of apellido_participante
     *
     * @return  self
     */ 
    public function setApellido_participante($apellido_participante)
    {
        $this->apellido_participante = $apellido_participante;

        return $this;
    }

    /**
     * Get the value of fecha_nacimiento
     */ 
    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * Set the value of fecha_nacimiento
     *
     * @return  self
     */ 
    public function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;

        return $this;
    }

    /**
     * Get the value of genero_participante
     */ 
    public function getGenero_participante()
    {
        return $this->genero_participante;
    }

    /**
     * Set the value of genero_participante
     *
     * @return  self
     */ 
    public function setGenero_participante($genero_participante)
    {
        $this->genero_participante = $genero_participante;

        return $this;
    }
}