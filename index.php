<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>I.S.N.S :: Index</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
   <?php 

    session_start();

    if(!isset($_SESSION['ID'])){
      echo('<meta http-equiv="refresh" content="0;url=login.php">');
    }

    include("inc/db.php"); 
    include("inc/header.php");

    $SQLGetInfo = $odb -> prepare("SELECT * FROM `users` WHERE `id` = :id");
    $SQLGetInfo -> execute(array(':id' => $_SESSION['ID']));
    $userInfo = $SQLGetInfo -> fetch(PDO::FETCH_ASSOC);

    $SQLCheckRapport = $odb -> prepare("SELECT COUNT(*) FROM `rapports`");
    $SQLCheckRapport -> execute();
    $countRapports = $SQLCheckRapport -> fetchColumn(0);

    $requete = $odb->prepare("SELECT * FROM progression");
    $requete->execute();

  ?>
  
  <body>
  <section id="container" >
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo">I.S.N.S<span> V1.0</span></a>
            <!--logo end-->
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <span class="username"><?php echo($userInfo['Username']); ?></span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="inc/logout.php"><i class="fa fa-key"></i> Loggout </a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>

          </div>
          

        </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
          
      </aside>
      
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <section class="panel">
                          <div id="c-slide" class="carousel slide auto panel-body">
                              <ol class="carousel-indicators out">
                                  <li class="active" data-slide-to="" data-target="#c-slide"></li>
                                  <li class="" data-slide-to="1" data-target="#c-slide"></li>
                              </ol>
                              <div class="carousel-inner">
                                  <div class="item text-center active">
                                      <h3>Welcome Mr.<?php echo($userInfo['Username']); ?> on the internal secure network foundation research, the I.S.N.S</h3>
									  <small class="text-muted">You have a level of accreditation: <?php echo $userInfo['Level']; ?></small>
									  </br>
                                      <small class="text-muted">Secure and encrypted Session</small>
                                  </div>
									<div class="item text-center">
                                      <h3>No incident is reported</h3>
                                      <small class="text-muted">Database to 10%</small>
                                  </div>
                              </div>
                              <a data-slide="prev" href="#c-slide" class="left carousel-control">
                                  <i class="fa fa-angle-left"></i>
                              </a>
                              <a data-slide="next" href="#c-slide" class="right carousel-control">
                                  <i class="fa fa-angle-right"></i>
                              </a>
                          </div>
                      </section>
              <!--state overview start-->
              <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1>
                                <?php
                                  echo($countRapports);
                                ?>
                              </h1>
                              <p>Totals Reports</p>
                          </div>
                        </section>
                  </div>

                  <div class="col-lg-8">
                      <!--work progress start-->

 
                      <section class="panel">
                          <div class="panel-body progress-panel">
                              <div class="task-progress">
                                  <h1>Accidents en cours</h1>
                                  <br>
                              </div
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                              <?php 
                              while($resultats = $requete->fetch(PDO::FETCH_OBJ))
                              {
                                   $r_id = $resultats->id;
                                   $r_title = $resultats->title;
                                   $r_pourcente = $resultats->pourcente;
                               

                                echo('<tr>');
                                echo('<td>' .  $r_id . '</td>');
                                echo('<td>' .  $r_title . '</td>');
                                echo('<td> <span class="badge bg-important"> ' . $r_pourcente . '% </span> </td>');
                                echo('</tr>');

                              }
                             ?>
                         
                              </tbody>
                          </table>
                      </section>

                      <?php

                      ?>
                  </div>
                   <!--carousel start-->

              </div>
              <!--state overview end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/count.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
