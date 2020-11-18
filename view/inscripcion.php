<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Top Cars</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
    <script src='./javascript/javascript.js'></script>
</head>
<body>  
    <div class="header">
        <div class="topnav">
            <a href="index.php">Inici</a>
            <a href="#">Classificacions</a>
            <a href="./inscripcion.php">Inscripcions</a>
            <a href="#">Noticies</a>
            <a href="#">Galeria</a>
        </div> 
        <div class="form">
            <form action="./inscripcion.php" method="POST" onsubmit="return validacionForm()">
            <label for="dni"></label>
            <input type="text" id="dni" name="dni" placeholder="DNI...">
            <br>
            <label for="nom"></label>
            <input type="text" name="nom" id="nom" placeholder="NOM...">
            <br>
            <label for="apellido"></label>
            <input type="text" name="apellido" id="apellido" placeholder="Apellido...">
            <br>
            <label for="nacimiento"></label>
            <input type="date" id="nacimiento" name="nacimiento">
            <br>
            <label for="genero"></label>
            <select name="genero">   
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select>
            <br>
            <input type="submit" value="enviar">
            </form>
        </div>
        
        <?php
        require_once  '../model/participanteDAO.php';
        if (isset($_POST['dni'])){
            $participanteDAO = new ParticipanteDAO();
            $participanteDAO->crearparticpante();
        } 
        ?>
        
    </div>
<footer>
    <div>
        <div class="topnav">
            <a href="index.html">Inici</a>
            <a href="#">Classificacions</a>
            <a href="./inscripcion.php">Inscripcions</a>
            <a href="#">Noticies</a>
            <a href="#">Galeria</a>
        </div> 
    </div>
</footer>
</body>
</html>
