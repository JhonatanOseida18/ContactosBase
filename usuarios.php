<?php
  include('validar.php');

  $val =new validar;

  $NOMBRE=$_POST['NOMBRE'];
  $CONTRASE�A=$_POST['CONTRASE�A'];

  $resultado=$val-> validar($NOMBRE, $CONTRASE�A);

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