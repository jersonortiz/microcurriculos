<!DOCTYPE html>
<html lang="en">
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
            <!--breadcrumbs-->
            <div id="content-header">
                <div id="breadcrumb">
                    <a href="index.html" title="Go to Home" class="tip-bottom">consulta microcurriculo</a>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span6">

                    </div>

                    <div class="widget-box collapsible">
                        <div class="widget-title">
                            <a data-toggle="collapse" href="#collapseOne">
                                <h5>Ingenieria en sistemas</h5>
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse in">

                            <div class="widget-content">

                                <div class="widget-box collapsible">

                                    <div class="widget-title">
                                        <a data-toggle="collapse" href="#collapsesem1">
                                            <h5>Semestre 1</h5>
                                        </a>
                                    </div>
                                    <div id="collapsesem1" class="collapse">
                                        <div class="widget-content">

                                            <div class="widget-box">

                                                <div class="widget-content nopadding">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Codigo</th>
                                                                <th>Nombre</th>
                                                                <th>Grupo</th>
                                                                <th>Docente</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd gradeA">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="even gradeB">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeC">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="even gradeD">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>



                                        </div>
                                    </div>


                                    <div class="widget-title">
                                        <a data-toggle="collapse" href="#collapsesem2">
                                            <h5>Semestre 2</h5>
                                        </a>
                                    </div>
                                    <div id="collapsesem2" class="collapse">
                                        <div class="widget-content">
                                            <div class="widget-box">

                                                <div class="widget-content nopadding">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Codigo</th>
                                                                <th>Nombre</th>
                                                                <th>Grupo</th>
                                                                <th>Docente</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd gradeA">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="even gradeB">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeC">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="even gradeD">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-title">
                                        <a data-toggle="collapse" href="#collapsesem3">
                                            <h5>Semestre 3</h5>
                                        </a>
                                    </div>
                                    <div id="collapsesem3" class="collapse">
                                        <div class="widget-content">
                                            <div class="widget-box">

                                                <div class="widget-content nopadding">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Codigo</th>
                                                                <th>Nombre</th>
                                                                <th>Grupo</th>
                                                                <th>Docente</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd gradeA">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="even gradeB">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeC">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="even gradeD">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
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


                        <div class="widget-title">
                            <a data-toggle="collapse" href="#collapseTwo">
                                <h5>Ingenieria el algo mas</h5>
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse">
                            <div class="widget-content">

                                <div class="widget-box collapsible">

                                    <div class="widget-title">
                                        <a data-toggle="collapse" href="#collapse2sem1">
                                            <h5>Semestre 1</h5>
                                        </a>
                                    </div>
                                    <div id="collapse2sem1" class="collapse">
                                        <div class="widget-content">

                                            <div class="widget-box">

                                                <div class="widget-content nopadding">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Codigo</th>
                                                                <th>Nombre</th>
                                                                <th>Grupo</th>
                                                                <th>Docente</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd gradeA">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="even gradeB">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeC">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="even gradeD">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>



                                        </div>
                                    </div>


                                    <div class="widget-title">
                                        <a data-toggle="collapse" href="#collapse2sem2">
                                            <h5>Semestre 2</h5>
                                        </a>
                                    </div>
                                    <div id="collapse2sem2" class="collapse">
                                        <div class="widget-content">
                                            <div class="widget-box">

                                                <div class="widget-content nopadding">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Codigo</th>
                                                                <th>Nombre</th>
                                                                <th>Grupo</th>
                                                                <th>Docente</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd gradeA">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="even gradeB">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeC">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="even gradeD">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-title">
                                        <a data-toggle="collapse" href="#collapse2sem3">
                                            <h5>Semestre 3</h5>
                                        </a>
                                    </div>
                                    <div id="collapse2sem3" class="collapse">
                                        <div class="widget-content">
                                            <div class="widget-box">

                                                <div class="widget-content nopadding">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Codigo</th>
                                                                <th>Nombre</th>
                                                                <th>Grupo</th>
                                                                <th>Docente</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd gradeA">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="even gradeB">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeC">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr class="even gradeD">
                                                                <td>1150001</td>
                                                                <td>Materia 1</td>
                                                                <td>A</td>
                                                                <td>profesor 1</td>
                                                                <td>
                                                                    <a href="materia.php">
                                                                        <span class="label label-info">ver info</span>
                                                                    </a>
                                                                </td>
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