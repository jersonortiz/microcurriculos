<?php
require_once '../model/util/Conexion.php';
require_once '../model/DAO/personaDAO.php';

$nom = $_POST["cod"];
$pass = $_POST["con"];

$ped= new personaDAO();
$vr = $ped->consultar($nom);

$hash=$vr->getContrasena();
$tipo=$vr->getTipo();

if ($pass==$hash) {
    echo '¡La contraseña es válida!';
    if($tipo==2){
    header( 'Location: ../views/estudiante/dashboard.php');
    }
    else{
	header( 'Location: ../views/docente/docdash.php');
    }
 }   

 else {
    echo 'La contraseña no es válida.';
}
?>
