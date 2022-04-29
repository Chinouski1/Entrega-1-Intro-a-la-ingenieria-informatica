<?php
 require 'conexion.php';
  
$temperatura  = $_POST['temperatura'];


$insertar = "INSERT INTO gatos VALUES ('$temperatura'";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../index.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.html';
    </script>";
}




?>