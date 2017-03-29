<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>I.S.N.S :: Write Report</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>    
  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
          </div>
          <!--logo start-->
          <a href="index.php" class="logo" >I.S.N.S<span> V1.5</span></a>
          <!--logo end-->
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
        
      <aside>
          <?php
            session_start(); 
            include('inc/header.php');            
           ?>
      </aside>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <br/>
              <!-- page end-->
              <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Système de Rapport
                          </header>
                  
                          <div class="panel-body">
                              <form method="POST">
                                  <div class="form-group">
                                      <label>Nom du Rapport</label>
                                      <input name="title" type="text" class="form-control" id="title" placeholder="">
                                  </div>
                                  <div class="form-group">
                                      <label>SCP</label>
                                      <input name="scp" type="text" class="form-control" id="title" placeholder="">
                                  </div>
								  <div class="form-group">
                                     <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Accreditation</label>
                                     <div class="col-lg-10">
                                         <select name="accreditation" class="form-control m-bot15">
                                        <option value="1">1</option>

                                         </select>
                                     </div>
                                  </div>
								 <div class="row">
                                  <div class="col-lg-12">
                                      <section class="panel">
                                          <div class="panel-body">
                                              <div class="form">
                                                      <div class="form-group">
                                                          <label class="col-sm-2 control-label col-sm-2">Contenu</label>
                                                          <div class="col-sm-10">
                                                              <textarea class="form-control ckeditor" name="contenu" rows="6"></textarea>
                                                          </div>
                                                      </div>
                                              </div>
                                          </div>
                                      </section>
                                  </div>
                              </div>

                                  <button type="submit" class="btn btn-info">Submit</button>
                              </form>

                          </div>
                      </section>
                  </div>
          </section>

        <?php 
          include('inc/rsystem.php');

        ?>
      </section>
      <!--main content end-->
      <!--footer start-->
      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
      <footer class="site-footer">
          <div class="text-center">
              2016 &copy; I.S.N.S by Max13480.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
        <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  </body>
</html>
