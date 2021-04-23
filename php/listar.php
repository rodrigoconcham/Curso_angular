<?php
// incluir archivo de conexión
include('conexion.php');
  // asignamos la función de conexion a una variable
  $con = conexion();
  // realizamos la consulta SQL para recuperar todos los registros de la tabla
  $resultado = $con-&gt;query("SELECT * FROM usuarios");
  // creamo una variable del tipo array la cual almacena todos los registros
  $datos = array();
  // iteramos todos los registros devueltos y llenamos el array
  while ($row = $resultado-&gt;fetch_assoc()){

   $datos[] = $row;
   
  }

  // convertimos el array al formato json y mostramos para que angular JS pueda formatear la información
  echo json_encode($datos);

?>