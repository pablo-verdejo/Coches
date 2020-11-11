<?php

class Participante{
    public $DNI_participante;
    public $nombre_participante;
    public $apellido1_participante;
    public $apellido2_participante;
    public $fecha_nacimiento;
    public $email_participante;
    public $genero_participante;
    public $id_categ;

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
     * Get the value of apellido1_participante
     */ 
    public function getApellido1_participante()
    {
        return $this->apellido1_participante;
    }

    /**
     * Set the value of apellido1_participante
     *
     * @return  self
     */ 
    public function setApellido1_participante($apellido1_participante)
    {
        $this->apellido1_participante = $apellido1_participante;

        return $this;
    }

    /**
     * Get the value of apellido2_participante
     */ 
    public function getApellido2_participante()
    {
        return $this->apellido2_participante;
    }

    /**
     * Set the value of apellido2_participante
     *
     * @return  self
     */ 
    public function setApellido2_participante($apellido2_participante)
    {
        $this->apellido2_participante = $apellido2_participante;

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
     * Get the value of email_participante
     */ 
    public function getEmail_participante()
    {
        return $this->email_participante;
    }

    /**
     * Set the value of email_participante
     *
     * @return  self
     */ 
    public function setEmail_participante($email_participante)
    {
        $this->email_participante = $email_participante;

        return $this;
    }

    /**
     * Get the value of id_categ
     */ 
    public function getId_categ()
    {
        return $this->id_categ;
    }

    /**
     * Set the value of id_categ
     *
     * @return  self
     */ 
    public function setId_categ($id_categ)
    {
        $this->id_categ = $id_categ;

        return $this;
    }
}

?>