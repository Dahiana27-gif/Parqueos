<?php
include('conexion.php'); 
session_start(); 



// INS | UDT | DLT

$i = '';
if (isset($_GET['accion'])) {
    $i = $_GET['accion'];
}

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];

}

if ($i == 'RegistrarUser') {

$nombre = $_POST['nombre']; 
$correo   = $_POST['correo'];
$password    = $_POST['password'];


   $sql="INSERT INTO `usuario`
   (`nombre`, 
   `correo`, 
   `password`, 
   `tipo`) VALUES 
   ('$nombre', 
   '$correo',
   SHA1('$password'),
   '0')"; 
       
   if ($mysqli->query($sql)) {
        $msj ='successins'; 


   } else {
       $msj ='errorins';
   }
       echo("Descripcion de Error: " .mysqli_error($mysqli)); 
   

       header("Location: ../login.php?s=".$msj);  
   
}
// if (isset($_SESSION['nombreEnc']) && isset($_SESSION['descripcionEnc']) && isset($_SESSION['cuestionanteEnc']) && isset($_SESSION['votantesEnc']) && isset($_SESSION['privacidadEnc'])){
//     header("location: ../crear4.php");
// }else{
//     echo "error";
// }

   
