<?php
require_once '../model/util/Conexion.php';
require_once '../model/DAO/personaDAO.php';

$nom = $_POST["cod"];
$pass = $_POST["con"];

$ped= new personaDAO();
$vr = $ped->consultar($nom);

$hash=$vr->getContrasena();
echo $hash;

if (password_verify($pass, $hash)) {
    echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}
?>