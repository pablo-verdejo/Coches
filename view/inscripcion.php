<!DOCTYPE html>
<html>
<head>
<title>Inscripcion</title>
<script type="text/javascript" src="../js/code.js"></script>
<link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
</head>

<body>
<div class="header">
    <div class="topnav">
        <a href="./index.html">Inici</a>
        <a href="#">Classificacions</a>
        <a href="./inscripcion.php">Inscripcions</a>
        <a href="#">Noticies</a>
        <a href="#">Galeria</a>
    </div>
    <div class="form">
        <form action="./inscripcion.php" method="POST" onsubmit="return validacionForm()">
            <p>Nombre: </p> 
            <input type="text" name="name" size="40" id="1">
            <p>Apellido: </p>
            <input type="text" name="apellido" size="40" id="2">
            <p>DNI: </p>
            <input type="text" name="dni" size="40" id="3">
            <p>Fecha de nacimiento: </p>
            <input type="date" name="nacido" id="4">
            <p>Sexo:<br><br>
                <input type="radio" name="sexo" value="Masculino"> Masculino
                <input type="radio" name="sexo" value="Femenino"> Femenino
            </p>
            <p>
                <input type="submit" value="Enviar">
            </p>
        </form>
        <div class="mensaje">
            <a href='./index.html'>Volver al inicio</a>
        </div>
    </div>

    <?php
        if (isset($_REQUEST['name'])) {
            require_once '../model/participante.php';
            require_once '../model/participanteDAO.php';
            $participante = new participante($_REQUEST['name'], $_REQUEST['apellido'], $_REQUEST['dni'], $_REQUEST['nacido'], $_REQUEST['sexo']);
            $participanteDAO = new participanteDAO;
            $participanteDAO->addParticipante($participante);
            $participanteDAO->addInscripcion($participante);
        }
    ?>
</body>
</html>