<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>I.S.N.S :: Edit a Report</title>

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
          <?php include("inc/header.php"); ?>
      </aside>
      </aside>
	     <?php
        session_start();

        include('inc/db.php');

        if(isset($_POST['action'])){

          $_SESSION['RAPPORT'] = $_POST['action'];

          $titre = $_POST['action'];

          $SQLGetInfo = $odb -> prepare("SELECT * FROM `rapports` WHERE `Titre` = :title");
          $SQLGetInfo -> execute(array(':title' => $titre));
          $RapportsInfo = $SQLGetInfo -> fetch(PDO::FETCH_ASSOC);

          $rb_titre = $RapportsInfo['Titre'];
          $rb_contenu = $RapportsInfo['Contenu'];
          $rb_author = $RapportsInfo['author'];
          $rb_scp = $RapportsInfo['scp'];
          $rb_accreditation = $RapportsInfo['accreditation'];

         

        }



       ?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->

              <br/>

              <?php 
                
                if(isset($_POST['titre'])) 
                {

                 $SQLEdit = $odb -> prepare("UPDATE `rapports` SET `Titre`= :titre , `scp` = :scp, `Contenu` = :contenu WHERE `Titre` = :rtitre");
                 $SQLEdit -> execute(array(':titre' => $_POST['titre'], ':rtitre' => $_SESSION['RAPPORT'], ':scp' => $_POST['scp'], ':contenu' => $_POST['contenu']));
                 echo('<div class="alert alert-success"><strong>Success : </strong> Successful editing...</div><meta http-equiv="refresh" content="1;url=../lrapports.php">');

                }



              ?>
              <!-- page end-->
              <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">                              
							             Edition Report: <?php if(isset($rb_titre)) echo($rb_titre); ?> 
                          </header>
                          <div class="panel-body">
                              <form method="POST">
							               <div class="form-group">
                                      <label>Title <small>Thank you not to change the title!</small></label>
                                      <input name="titre" type="text" class="form-control" id="title" value="<?php if(isset($rb_titre)) echo($rb_titre); ?>" >
                                  </div>
                                  <div class="form-group">
                                      <label>SCP</label>
                                      <input name="scp" type="text" class="form-control" id="title" value="<?php if(isset($rb_scp)) echo($rb_scp); ?>" >
                                  </div>
								  <div class="form-group">
                                     <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Accreditation</label>
                                     <div class="col-lg-10">
                                         <select name="accreditation"  class="form-control m-bot15">	
                                             <option value="1">1</option>										 
                                             <option value="2">2</option>
                                             <option value="3">3</option>
                                             <option value="4">4</option>
											 <option value="5">5</option>
                                         </select>
                                     </div>
                                  </div>
								 <div class="row">
                                  <div class="col-lg-12">
                                      <section class="panel">
                                          <header class="panel-heading">
                                              Description of the SCP
                                          </header>
                                          <div class="panel-body">
                                              <div class="form">
                                                      <div class="form-group">
                                                          <div class="col-sm-10">
                                                              <textarea class="form-control ckeditor" name="contenu" rows="6"> <?php if(isset($rb_contenu)) echo($rb_contenu); ?></textarea>
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
