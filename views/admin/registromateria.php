<!DOCTYPE html>
<html lang="en">
    <?php
    require_once '../../model/DAO/programaDAO.php';
    require_once '../../model/DTO/programaDTO.php';
    require_once '../../model/DTO/planEstudiosDTO.php';
    require_once '../../model/DAO/planestudioDAO.php';
    $fdao = new planestudioDAO();

    if (isset($_GET['fac'])) {
      $plan = $_GET['fac'];
      $panest = $fdao->consultar($plan);
      $list = array($panest);
    } else {
      $list = $fdao->listar();
    }
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
            <!--breadcrumbs-->
            <div id="content-header">

            </div>

            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span6">

                    </div>

                    <div class="widget-box">
                        <div class="widget-title">
                            <h5>Registrar Materia</h5>
                        </div>
                        <div class="widget-content">
                            <div class="widget-box">
                                <div class="widget-content nopadding">
                                    <form action="../../controllers/acad/controladormateria.php?acc=reg" method="post" class="form-horizontal">

                                        <div class="control-group">
                                            <label class="control-label">Codigo materia:</label>
                                            <div class="controls">
                                                <input type="number" name="cod" id="cod" class="span11" placeholder="First name" />
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Nombre materia:</label>
                                            <div class="controls">
                                                <input type="text" name="nom" id="nom" class="span11" placeholder="First name" />
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Semestre materia:</label>
                                            <div class="controls">
                                                <input type="number" name="sem" id="sem" class="span11" placeholder="First name" />
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Intensidad horaria:</label>
                                            <div class="controls">
                                                <input type="number" name="ihor" id="ihor" class="span11" placeholder="First name" />
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Creditos:</label>
                                            <div class="controls">
                                                <input type="number" name="cre" id="cre" class="span11" placeholder="First name" />
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Plan de estudios</label>
                                            <div class="controls">
                                                <select id="pla" name="pla">
                                                    <?php foreach ($list as $key) { ?>
                                                      <option value="<?php echo $key->getNombre(); ?>" ><?php echo $key->getNombre(); ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <input type="submit" value="Guardar" class="btn btn-success">
                                        </div>

                                    </form>
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