<?php
  include('validar.php');

  $val =new validar;

  $NOMBRE=$_POST['NOMBRE'];
  $CONTRASEÑA=$_POST['CONTRASEÑA'];

  $resultado=$val-> validar($NOMBRE, $CONTRASEÑA);

  var_dump($resultado);



  if($resultado->num_rows == 1)
  {
    header("location:index.html");
  }

  else 
  {
   header("location:lobby.php");
  } 
?>