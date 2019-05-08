
<?php
$conf= substr(basename($_SERVER['PHP_SELF']), 0,3);
$a=$b='';
$c=' class="submenu"';
/*
if($conf=='con'){
    $b = ' class="active"';
  } else{
     $a = ' class="active"';
  } 
*/
switch($conf){
    case "con":
    $a = ' class="active"';
    break;
    case "bus":
    $c = ' class="active  submenu"';
    break;
    default:
    $b= ' class="active"';

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
                <span>Listar cumplimiento</span>
            </a>
        </li>

        <li <?php echo $b; ?> >
            <a href="configuracion.php">
                <i class="icon icon-pencil"></i>
                <span>Configuracion</span>
            </a>
        </li>

        <li <?php echo $c; ?> >
            <a href="#"><span>Addons</span></a>
            <ul>
                <li><a href="busestudiante.php">Buscar estudiante</a></li>
                <li><a href="busdocente.php">Buscar Docente</a></li>
                <li><a href="busmateria.php">Buscar Materia</a></li>
            </ul>
        </li>


    </ul>
</div>
<!--sidebar-menu-->