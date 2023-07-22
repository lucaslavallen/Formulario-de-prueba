<?php
session_start(); 

session_unset();

session_destroy(); 


header("Location: ./paso1.php");

exit;
?>
