<?php
include ("./php/cabezera.php");
?>

<link rel="stylesheet" href="./includes/style.css">
<div class="formulario">

<form action="./paso2.php" method="post">

    <h4>Nombre de usuario</h4>
    <input type="text" name="usuario">    

    <h4>contraseña</h4>
    <input type="password" name="contraseña"> 
    <br>
    <br>

    <h4>Tipo de documento</h4>
    <select name="Documento">
    <option>-- eliga una opcion --</option>
    <option>DNI</option>
    <option>LC</option>
    <option>LE</option>
    </select>
    <br>

    <h4>Numero de Documento</h4>
    <input type="numbre" name="numero">
    <br>
    <br>

    <h4>sexo:</h4>
  <input type="radio" name="genero" value="masculino" required>
  <label >masculino</label><br>

  <input type="radio" name="genero" value="femenino" >
  <label >femenino</label><br>

    <h4>Nacionalidad</h4>
    <input type="text" name="nacionalidad">

    <button type="submit">Enviar</button>
</form>

</div>

<?php
  include ("./php/pie.php")
?>