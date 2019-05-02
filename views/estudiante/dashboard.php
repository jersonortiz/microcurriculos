<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/fullcalendar.css" />
    <link rel="stylesheet" href="css/matrix-style.css" />
    <link rel="stylesheet" href="css/matrix-media.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="css/jquery.gritter.css" />
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' >
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
          <a href="index.html" title="Go to Home" class="tip-bottom">
            <i class="icon-home"></i> Home
          </a>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span6">
       
        
          </div>
          
            <div class="widget-box collapsible">
              <div class="widget-title">
                <a data-toggle="collapse" href="#collapseOne">
                  <span class="icon"><i class="icon-arrow-right"></i></span>
                  <h5>Pruebas pendientes/h5>
                </a>
              </div>
              <div id="collapseOne" class="collapse in">

                        <div class="widget-box">
                          <div class="widget-title">
                            <span class="icon"><i class="icon-th"></i></span>
                            <h5>Static table</h5>
                          </div>
                          <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                  <th>Codigo</th>
                                  <th>Nombre</th>
                                  <th>Grupo</th>
                                  <th>Docente</th>
                                  <th>Prueba</th>
                                  <th>Estado</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="odd gradeX">
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

           
              </div>


              <div class="widget-title">
                <a data-toggle="collapse" href="#collapseTwo">
                  <span class="icon"><i class="icon-remove"></i></span>
                  <h5>Pruebas realizadas</h5>
                </a>
              </div>
              <div id="collapseTwo" class="collapse">
                                               <div class="widget-box">
                          <div class="widget-title">
                            <span class="icon"><i class="icon-th"></i></span>
                            <h5>Static table</h5>
                          </div>
                          <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                  <th>Codigo</th>
                                  <th>Nombre</th>
                                  <th>Grupo</th>
                                  <th>Docente</th>
                                  <th>Prueba</th>
                                  <th>Estado</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="odd gradeX">
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>


              </div>       

            </div>

      </div>
    </div>

    <!--end-main-container-part-->

    <!--Footer-part-->

    <div class="row-fluid">
      <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
    </div>

    <!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

</body>
</html>