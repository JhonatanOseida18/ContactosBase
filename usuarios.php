<?php
  include('validar.php');

  $val =new validar;

  $NOMBRE=$_POST['NOMBRE'];
  $CONTRASEŅA=$_POST['CONTRASEŅA'];

  $resultado=$val-> validar($NOMBRE, $CONTRASEŅA);

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