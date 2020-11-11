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
            <form action="./inscripcion.php" method="post">
            <label for="dni"></label>
            <input type="text" id="dni" name="dni" placeholder="DNI...">
            <br>
            <label for="nom"></label>
            <input type="text" name="nom" id="nom" placeholder="NOM...">
            <br>
            <label for="primer cognom"></label>
            <input type="text" name="cognom1" id="cognom1" placeholder="PRIMER COGNOM...">
            <br>
            <label for="segon cognom"></label>
            <input type="text" name="cognom2" id="cognom2" placeholder="SEGON COGNOM...">
            <br>
            <label for="nacimiento"></label>
            <input type="month" id="nacimiento" name="nacimiento">b
            <br>
            <label for="email"></label>
            <input type="email" id="email" name="email" placeholder="EMAIL...">
            <br>
            <label for="genero"></label>
            <select name="genero">   
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Saab</option>
            </select>
            <select name="categoria">
                <option value="1">0-6</option>
                <option value="2">6-12</option>
            </select>
            </form>
        </div>
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
