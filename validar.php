<?php
   include ('validar.php');

   class validar
   {
      public function validar ($user, $pass)
      {
        $us = new validar();
        $q= "SELECT * FROM usuarios WHERE usuario='$user' AND contraseņa='$pass';";
        $usuario=$us->query($q);
        $us->close();
        return $usuario;
      }
   }
?>