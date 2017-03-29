<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>I.S.N.S :: Liste des rapports</title>

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

<?php 

    session_start();

    if(!isset($_SESSION['ID'])){
      echo('<meta http-equiv="refresh" content="0;url=login.php">');
    }

    include("inc/db.php"); 
    include("inc/header.php");

    $requete = $odb->prepare("SELECT * FROM rapports");
    $requete->execute();        

    $SQLGetInfo = $odb -> prepare("SELECT * FROM `users` WHERE `id` = :id");
    $SQLGetInfo -> execute(array(':id' => $_SESSION['ID']));
    $userInfo = $SQLGetInfo -> fetch(PDO::FETCH_ASSOC);
    $accred = $userInfo['Level'];


  ?>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
          </div>
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
							               Listes des rapports
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th>Nom du Rapport</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Author</th>
                                  <th class="hidden-phone"><i class="fa fa-cogs"></i> SCP</th>
								  <th class="hidden-phone"><i class="fa fa-cogs"></i> ACCREDITATION</th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
						        <?php


                      while($resultats = $requete->fetch(PDO::FETCH_OBJ))
                      {
                        $r_titre = $resultats->Titre;
                        $r_contenu = $resultats->Contenu;
                        $r_author = $resultats->author;
                        $r_scp = $resultats->scp;
                        $r_accred = $resultats->accreditation;
                               

                      echo('<tr>');
                      echo('<td>' . $r_titre . '</td>');
                      echo('<td class="hidden-phone">' . $r_author . '</td>');
                      echo('<td><span class="label label-inverse">' . $r_scp . '</span></td>');
                      echo('<td><span class="label label-inverse">' . $r_accred . '</span></td>');
                      echo('<td>');
                      echo ('<form action="viewrapport.php" method="POST">');
                      echo ('<button type="submit" name="action" value="'. $r_titre . '" class="btn btn-success"><i class="fa fa-eye"></i></button>');
                      echo ('</form>');
                      echo ('</td>');
                      echo('<td>');
                      echo ('<form action="editrapport.php" method="POST">');
                      echo ('<button class="btn btn-info" name="action"
                       value="'. $r_titre . '"><i class="fa fa-pencil"></i></button>');
                      echo ('</form>');
                      echo ('</td>');
                      echo('<td>');
                      if($accred >= 5){
                        echo ('<form method="POST">');
                        echo ('<button class="btn btn-danger" name="remove"
                       value="'. $r_titre . '"><i class="fa fa-times"></i></button>');
                        echo ('</form>');
                      }
                      echo ('</td>');
                      
                      echo ('</tr>');
                    }
                      ?>
                         </tbody>
                       </table>
                      </section>
                  </div>
              </div>
              <button class="btn btn-success" href="#">Rédiger un Rapport</button>
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
