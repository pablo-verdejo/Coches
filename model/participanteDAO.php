<?php
require_once 'participante.php';

class ParticipanteDAO{
    private $pdo;
    public function __construct(){
        include '../controller/conexion.php';
        $this->pdo=$pdo;
    }

    public function crearparticpante(){
        $dni=$_POST['dni'];
        $nom=$_POST['nom'];
        $cognom1=$_POST['cognom1'];
        $cognom2=$_POST['cognom2'];
        $nacimiento=$_POST['nacimiento'];
        $email=$_POST['email'];
        $genero=$_POST['genero'];
        $categoria=$_POST['categoria'];

        $query="INSERT INTO tbl_participante (DNI_participante,nombre_participante,apellido1_participante,apellido2_participante,fecha_nacimiento,email_participante,genero_participante)
        VALUES (?,?,?,?,?,?,?,?);";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindParam(1,$dni);
        $sentencia->bindParam(2,$nom);
        $sentencia->bindParam(3,$cognom1);
        $sentencia->bindParam(4,$cognom2);
        $sentencia->bindParam(5,$nacimiento);
        $sentencia->bindParam(6,$email);
        $sentencia->bindParam(7,$genero);
        $sentencia->execute();
    }
}