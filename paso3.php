<?php
include ("./php/cabezera.php");
session_start();
$_SESSION["email"] = $_REQUEST["correoelec"];
$_SESSION["tel-linea"] = $_REQUEST["linea"];
$_SESSION["movil"] = $_REQUEST["celular"];
$_SESSION["domicilio"] = $_REQUEST["domicilio"];
$_SESSION["provincia"] = $_REQUEST["provincia"];
$_SESSION["localidad"] = $_REQUEST["localidad"];

?>
<link rel="stylesheet" href="./includes/style.css">

<ul>
    <fieldset >
        <h3>informacion personal</h3>
    <li>Usuario: <?php echo $_SESSION["NombreUsuario"]?></li>
    <li>Contraseña: <?php echo $_SESSION["Contraseña"]?></li>
    <li>Documento: <?php echo $_SESSION["documento"]?></li>
    <li>Telefono: <?php echo $_SESSION["telefono"]?></li>
    <li>Sexo: <?php echo $_SESSION["sexo"]?></li>
    <li>Nacionalidad: <?php echo $_SESSION["nacionalidad"]?></li>
    </fieldset>

    <br>
    <br>

    <fieldset >
        <h3>informacion de contacto</h3>
    <li>Email: <?php echo $_SESSION["email"]?></li>
    <li>Tel-linea: <?php echo $_SESSION["tel-linea"]?></li>
    <li>Movil: <?php echo $_SESSION["movil"]?></li>
    <li>Domicilio: <?php echo $_SESSION["domicilio"]?></li>
    <li>Provincia: <?php echo $_SESSION["provincia"]?></li>
    <li>Localidad: <?php echo $_SESSION["localidad"]?></li>
    </fieldset>
</ul>

    <form action="./finalizar.php" method="post">
    <input type="submit" value="Reset">
    </form>
    
<?php

  include ("./php/pie.php")
?>