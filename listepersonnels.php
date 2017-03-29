<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>I.S.N.S :: Personnel list</title>

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
          <?php include("inc/header.php"); ?>
      </aside>
      
      <?php
        include("inc/database.php")
      ?>      
      	  <?php
         if($level >= 4)
         {
         } else 
         {
		 ?>
            <meta http-equiv="refresh" content="0; url=noaccess.html">
		<?php	
         }
        ?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->

              <br/>
              <!-- page end-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
						<header class="panel-heading">                              
								Personnel list
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Researcher Name</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Accreditation</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                  $requete="SELECT * FROM user";
                                  $exec=mysql_query($requete);
                                  
                                  while($ligne=mysql_fetch_array($exec)) 
                                  {
                                    ?>
                                 <tr>
                                      <td>
                                          <a href="#">
                                              <?php echo $ligne['Username']; ?>
                                          </a>
                                      </td>
                                      <td class="hidden-phone"><?php echo $ligne['Level']; ?></td>
                                      <td>
                                          <form action="editpersonnel.php" method="POST">
                                              <button type="submit" name="action" value="<?php echo $ligne['id']  ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        </form>
                                      </td>
                                  </tr>
                                  
                                  
                                  <?php
                                      
                                      
                                      
                                  }
                              ?>
                              
                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>
          </section>

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

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>


  </body>
</html>
