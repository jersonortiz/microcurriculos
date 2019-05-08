
<?php
$conf= substr(basename($_SERVER['PHP_SELF']), 0,3);
$a=$b='';
if($conf=='con'){
    $b = ' class="active"';
  } else{
     $a = ' class="active"';
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

    </ul>
</div>
<!--sidebar-menu-->