<?php
require_once 'participante.php';

class ParticipanteDAO{
    private $pdo;
    public function __construct(){
        include '../controller/conexion.php';
        $this->pdo=$pdo;
    }

    public function crearparticpante(){
        try {
            $this->pdo->beginTransaction();
            $dni=$_POST['dni'];
            $nom=$_POST['nom'];
            $apellido=$_POST['apellido'];
            $nacimiento=$_POST['nacimiento'];
            $genero=$_POST['genero'];
    
            $query="INSERT INTO tbl_participante (DNI_participante,nombre_participante,apellido_participante,fecha_nacimiento,genero_participante)
            VALUES (?,?,?,?,?);";
            $sentencia=$this->pdo->prepare($query);
            $sentencia->bindParam(1,$dni);
            $sentencia->bindParam(2,$nom);
            $sentencia->bindParam(3,$apellido);
            $sentencia->bindParam(4,$nacimiento);
            $sentencia->bindParam(5,$genero);
            $sentencia->execute();
            
            echo "<br>";
            echo "Has sido inscrito";
            $this->pdo->commit();

            
        } catch (Exception $e) {
            $this->pdo->rollBack();
        }
    }
}
