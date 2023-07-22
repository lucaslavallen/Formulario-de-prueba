<?php
include ("./php/cabezera.php");
    session_start();
    $_SESSION["NombreUsuario"] = $_REQUEST["usuario"];
    $_SESSION["Contraseña"] = $_REQUEST["contraseña"];
    $_SESSION["documento"] = $_REQUEST["Documento"];
    $_SESSION["telefono"] = $_REQUEST["numero"];
    $_SESSION["sexo"] = $_REQUEST["genero"];
    $_SESSION["nacionalidad"] = $_REQUEST["nacionalidad"];

    
?>
<link rel="stylesheet" href="./includes/style.css">

<div class="formulario">
<form action="./paso3.php" method="post">
    <h4>Correo electronico</h4>
    <input type="text" name="correoelec"> 
    <br>
    <h4>Telefono</h4>
    <input type="number" name="linea"> 
    <br>
    <h4>Celular</h4>
    <input type="number" name="celular"> 
    <br>
    <h4>domicilio</h4>
    <input type="text" name="domicilio"> 
    <br>
    <h4>provincia</h4>
    <select name="provincia">
    <option>--Seleccione una opcion--</option>
    <option>Entre Rios</option>
    <option>Buenos Aires</option>
    <option>Santa Fe</option>
    <option>Otra</option>
    </select>
    <br>
    <h4>localidad</h4>
    <input type="text" name="localidad"> 
    <br>
    <button type="submit">Enviar</button>
</form>
</div>
<?php
  include ("./php/pie.php")
?>