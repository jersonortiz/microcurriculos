<!DOCTYPE html>
<html lang="en">
    <?php
    $cod = $_GET["cod"];
    require_once '../../model/DAO/asignaturaDAO.php';
    require_once '../../model/DTO/asignaturaDTO.php';
    require_once '../../controllers/consultaseguimientocontroller.php';
    $algo = new consultaController();
    $list = $algo->consultaestudiante($cod);
    ?>

    <head>
        <title>Admin</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="../css/fullcalendar.css" />
        <link rel="stylesheet" href="../css/matrix-style.css" />
        <link rel="stylesheet" href="../css/matrix-media.css" />
        <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/jquery.gritter.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <?php
        include("../includes/navadmin.php");
        include("../includes/sideadmin.php");
        ?>

        <!--main-container-part-->
        <div id="content">
  <div id="content-header">
              
            </div>

            <div class="container-fluid">
                <div class="row-fluid">

                    <div class="span6">
                    <a href="#">
                        <span class="label label-info">exportar datos de estudiante</span>
                    </a>
                    </div>


                <div class="widget-box">
                    <div class="widget-title">
                        <h5>Informacion de estudiante</h5>
                    </div>
                    <div class="widget-content">

                        codigo:  <span class="label">115001</span>
                        <br>
                        nombre: <span class="label">estudiante 1</span>
                        <br>
                        apellido <span class="label">apellido 1</span>
                        <br>
                        correo<span class="label">persona@ufps.edu.co</span>
                        <br>
                        numero de materias matriculadas <span class="label">2</span>
                        <br>
                        
                    </div>
                </div>

                     <div class="span6">
                    <h3>
                        Materias matriculadas
                    </h3>
                    </div>
              

                    <div class="widget-box collapsible">

                        <div class="widget-title">
                            <a data-toggle="collapse" href="#collapseOne">
                            <h5> materia 1</h5>
                            </a>
                        </div>

                        <div id="collapseOne" class="collapse">

                        <div class="widget-content">

                            <div class="widget-box collapsible">

                                <div class="widget-title">
                                    <a data-toggle="collapse" href="#collapsesem1">
                                        <h5>Unidad 1</h5>
                                    </a>
                                </div>
                                <div id="collapsesem1" class="collapse">
                                    <div class="widget-content">

                                        <div class="widget-box">
                                            <div class="widget-title">
                                                <span class="icon"><i class="icon-th"></i></span>
                                                <h5>Cumplimiento por estudiante</h5>
                                            </div>

                                            <div class="widget-content nopadding">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Tema</th>
                                                            <th>Calificacion</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeA">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr class="even gradeB">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr class="odd gradeC">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr class="even gradeD">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>



                                    </div>
                                </div>


                                <div class="widget-title">
                                    <a data-toggle="collapse" href="#collapsesem2">
                                        <h5>Unidad 2</h5>
                                    </a>
                                </div>
                                <div id="collapsesem2" class="collapse">
                                    <div class="widget-content">
                                        <div class="widget-box">
                                            <div class="widget-title">
                                                <span class="icon"><i class="icon-th"></i></span>
                                                <h5>Cumplimiento por estudiante</h5>
                                            </div>

                                            <div class="widget-content nopadding">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Tema</th>
                                                            <th>Calificacion</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeA">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr class="even gradeB">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr class="odd gradeC">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr class="even gradeD">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-title">
                                    <a data-toggle="collapse" href="#collapsesem3">
                                        <h5>Unidad 3</h5>
                                    </a>
                                </div>
                                <div id="collapsesem3" class="collapse">

                                    <div class="widget-box">
                                        <div class="widget-title">
                                            <span class="icon"><i class="icon-th"></i></span>
                                            <h5>Cumplimiento por estudiante</h5>
                                        </div>

                                        <div class="widget-content nopadding">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Tema</th>
                                                        <th>Calificacion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeA">
                                                        <td>Tema 1</td>
                                                        <td>80%</td>
                                                    </tr>
                                                    <tr class="even gradeB">
                                                        <td>Tema 1</td>
                                                        <td>80%</td>
                                                    </tr>
                                                    <tr class="odd gradeC">
                                                        <td>Tema 1</td>
                                                        <td>80%</td>
                                                    </tr>
                                                    <tr class="even gradeD">
                                                        <td>Tema 1</td>
                                                        <td>80%</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>




                        </div>    








                        <div class="widget-title">
                            <a data-toggle="collapse" href="#collapseOn">
                            <h5> materia 2</h5>
                            </a>
                        </div>


                        <div id="collapseOn" class="collapse">

                        <div class="widget-content">

                            <div class="widget-box collapsible">

                                <div class="widget-title">
                                    <a data-toggle="collapse" href="#collapsesem1">
                                        <h5>Unidad 1</h5>
                                    </a>
                                </div>
                                <div id="collapsesem1" class="collapse">
                                    <div class="widget-content">

                                        <div class="widget-box">
                                            <div class="widget-title">
                                                <span class="icon"><i class="icon-th"></i></span>
                                                <h5>Cumplimiento por estudiante</h5>
                                            </div>

                                            <div class="widget-content nopadding">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Tema</th>
                                                            <th>Calificacion</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeA">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr class="even gradeB">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr class="odd gradeC">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr class="even gradeD">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>



                                    </div>
                                </div>


                                <div class="widget-title">
                                    <a data-toggle="collapse" href="#collapsesem2">
                                        <h5>Unidad 2</h5>
                                    </a>
                                </div>
                                <div id="collapsesem2" class="collapse">
                                    <div class="widget-content">
                                        <div class="widget-box">
                                            <div class="widget-title">
                                                <span class="icon"><i class="icon-th"></i></span>
                                                <h5>Cumplimiento por estudiante</h5>
                                            </div>

                                            <div class="widget-content nopadding">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Tema</th>
                                                            <th>Calificacion</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeA">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr class="even gradeB">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr class="odd gradeC">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr class="even gradeD">
                                                            <td>Tema 1</td>
                                                            <td>80%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-title">
                                    <a data-toggle="collapse" href="#collapsesem3">
                                        <h5>Unidad 3</h5>
                                    </a>
                                </div>
                                <div id="collapsesem3" class="collapse">

                                    <div class="widget-box">
                                        <div class="widget-title">
                                            <span class="icon"><i class="icon-th"></i></span>
                                            <h5>Cumplimiento por estudiante</h5>
                                        </div>

                                        <div class="widget-content nopadding">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Tema</th>
                                                        <th>Calificacion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeA">
                                                        <td>Tema 1</td>
                                                        <td>80%</td>
                                                    </tr>
                                                    <tr class="even gradeB">
                                                        <td>Tema 1</td>
                                                        <td>80%</td>
                                                    </tr>
                                                    <tr class="odd gradeC">
                                                        <td>Tema 1</td>
                                                        <td>80%</td>
                                                    </tr>
                                                    <tr class="even gradeD">
                                                        <td>Tema 1</td>
                                                        <td>80%</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>




                        </div>  

                    </div>
                </div>
            </div>
        </div>


        <!--end-main-container-part-->

        <!--Footer-part-->
        <?php
        include("../includes/footer.php");
        ?>
        <!--end-Footer-part-->

        <script src="../js/excanvas.min.js"></script> 
        <script src="../js/jquery.min.js"></script> 
        <script src="../js/jquery.ui.custom.js"></script> 
        <script src="../js/bootstrap.min.js"></script> 
        <script src="../js/jquery.flot.min.js"></script> 
        <script src="../js/jquery.flot.resize.min.js"></script> 
        <script src="../js/jquery.peity.min.js"></script> 
        <script src="../js/fullcalendar.min.js"></script> 
        <script src="../js/matrix.js"></script> 
        <script src="../js/matrix.dashboard.js"></script> 
        <script src="../js/jquery.gritter.min.js"></script> 
        <script src="../js/matrix.interface.js"></script> 
        <script src="../js/matrix.chat.js"></script> 
        <script src="../js/jquery.validate.js"></script> 
        <script src="../js/matrix.form_validation.js"></script> 
        <script src="../js/jquery.wizard.js"></script> 
        <script src="../js/jquery.uniform.js"></script> 
        <script src="../js/select2.min.js"></script> 
        <script src="../js/matrix.popover.js"></script> 
        <script src="../js/jquery.dataTables.min.js"></script> 
        <script src="../js/matrix.tables.js"></script> 

    </body>
</html>