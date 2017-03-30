<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>I.N.S :: Personnel Managment</title>

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
          <a href="index.php" class="logo" >I.N.S<span> V1.5</span></a>
          <!--logo end-->
      </header>
      <!--header end-->
      <!--sidebar start-->
      
      <aside>
          <?php include("inc/header.php"); ?>
      </aside>
      
      <?php 
            session_start();

            if(!isset($_SESSION['ID'])){
              echo('<meta http-equiv="refresh" content="0;url=login.php">');
            }

            include("inc/db.php"); 

            $requete = $odb->prepare("SELECT * FROM rapports");
            $requete->execute();        

            $SQLGetInfo = $odb -> prepare("SELECT * FROM `users` WHERE `id` = :id");
            $SQLGetInfo -> execute(array(':id' => $_SESSION['ID']));
            $userInfo = $SQLGetInfo -> fetch(PDO::FETCH_ASSOC);
            $accred = $userInfo['Level'];

            if($accred >= 4)
            {
              
            } else {
              echo('<meta http-equiv="refresh" content="0;url=noaccess.php">');
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
                                  <th><i class="fa fa-bolt"></i> Accreditation</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                 
                                $requete = $odb->prepare("SELECT * FROM users");
                                $requete->execute();  
                                while($resultats = $requete->fetch(PDO::FETCH_OBJ))
                                  {
                                    $r_username = $resultats->Username;
                                    $r_level = $resultats->Level;
                                           

                                  echo('<tr>');
                                  echo('<td>' . $r_username . '</td>');
                                  echo('<td class="hidden-phone">' . $r_level . '</td>');
                                  echo('<td>');
                                  echo ('<form action="editpersonnel.php" method="POST">');
                                  echo('<button type="submit" name="action" value="<?php echo($r_username); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>');
                                  echo('</td>');                                  
                                  echo ('</tr>');
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
              2016 &copy; I.N.S by Max13480.
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
