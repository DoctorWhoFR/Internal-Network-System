<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>I.S.N.S :: Connection</title>

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

    <?php include('inc/login.php'); ?>

    <style>
    
        .login-body {
            background: black;
        }
    </style>
  <body class="login-body">

    <div class="container">

      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">CONNECTING TO SECURE NETWORK</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
            <input  type="password" class="form-control" name="password" placeholder="Password">
            <button class="btn btn-lg btn-login btn-block" name="submit" type="submit">CONNECTION</button>	
            <h6>Si vous n'avez pas de compte - <a href="register.php">Inscription</a> </h6>
        </div>
      </form>
    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
