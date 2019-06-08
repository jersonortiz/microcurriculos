
<?php
$conf= substr(basename($_SERVER['PHP_SELF']), 0,3);
$a=$c='';
$b=' class="submenu"';
/*
if($conf=='con'){
    $b = ' class="active"';
  } else{
     $a = ' class="active"';
  } 
*/
switch($conf){

    case "das":
    $a = ' class="active"';
    break;
    case "seg":
    $b = ' class="active  submenu"';
    break;
    case "con":
    $c=  ' class="active"';
    break;

}  

?>

<!--sidebar-menu-->
<div id="sidebar">
    <a href="#" class="visible-phone">
        <i class="icon icon-home"></i> Dashboard</a>
        
    <ul>
        <li <?php echo $a; ?> >
            <a href="dashboard.php">
                <i class="icon icon-home"></i>
                <span>Pantalla principal</span>
            </a>
        </li>

        <li <?php echo $b; ?> >
            <a href="#">
                <i class="icon icon-pencil"></i>
                <span>Listar cumplimiento</span>
            </a>
            <ul>
                <li><a href="seguimientoestudiante.php">Buscar estudiante</a></li>
                <li><a href="seguimientodocente.php">Buscar Docente</a></li>
                <li><a href="seguimientomateria.php">Buscar Materia</a></li>
            </ul>
            
        </li>

        <li <?php echo $c; ?> >
            <a href="configuracion.php">
                <i class="icon icon-pencil"></i>
                <span>Configuracion</span>
            </a>
        </li>

    </ul>
</div>
<!--sidebar-menu-->