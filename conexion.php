<?php
  class Conexion extends mysqli
  {
    public function construct()
    {
      $servidor="localhost";
      $basedatos="usuarios";
      $usuario="JhonOseida";
      $contraseña="123";

      parent::construct($servidor,$usuario,$contraseña,$basedatos);
      $this->query("SET NAMES 'utf8';");
      $this->connect_errno ? die("Error") : $error="Conectado a " .$basedatos;
      unset($error);
    }
  }
?>