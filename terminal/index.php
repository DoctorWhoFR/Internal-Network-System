<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Fallout Terminal Inspired Style</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=VT323);

@keyframes scroll {
	0% { height: 0 }
	100% { height: 100%; }
}

@keyframes type { 
  from { width: 0; } 
} 

@keyframes type2 {
  0%{width: 0;}
  50%{width: 0;}
  100%{ width: 100; } 
} 

@keyframes blink {
  to{opacity: .0;}
}

@keyframes scan {
	from { top: 0 }
	to { top: 100% }
}

@keyframes flicker {
		0% { opacity: 0.15795 }
		5% { opacity: 0.31511 }
		10% { opacity: 0.94554 }
		15% { opacity: 0.2469 }
		20% { opacity: 0.62031 }
		25% { opacity: 0.0293 }
		30% { opacity: 0.00899 }
		35% { opacity: 0.5344 }
		40% { opacity: 0.12778 }
		45% { opacity: 0.52042 }
		50% { opacity: 0.3823 }
		55% { opacity: 0.2198 }
		60% { opacity: 0.9383 }
		65% { opacity: 0.86615 }
		70% { opacity: 0.68695 }
		75% { opacity: 0.55749 }
		80% { opacity: 0.96984 }
		85% { opacity: 0.0361 }
		90% { opacity: 0.24467 }
		95% { opacity: 0.08351 }
		100% { opacity: 0.54813 }
	}

* {
	box-sizing: border-box;
	}
	
html,
body {
	background: #383838;
	color: #00dd00;
	font-size: 64.5%;
	font-size: 1.4em;
	font-family: 'VT323', Courier;
	height: 100%;
	margin: 0;
	padding: 0;
}

h1, h2, h3 h4, h5, h6 { 
	font-weight: normal;
	margin: 0;
	text-transform: uppercase;
}

a {
	color: white;	
	text-decoration: none;	
}

a:hover {
	color: red;
}

p { 
	line-height: 100%;
	margin: 0; 
}
	
span { animation: blink 1s infinite }

ul {
	list-style: none;
}

ul a:before,
p a:before {
	color: #00dd00;
	content: ' [ ';
}

ul a:after,
p a:after {
	color: #00dd00;
	content: ' ] ';	
}

header.site {
	margin: 0 0 40px 0;
	text-transform: uppercase;
}

nav,site { 
	margin: 0 0 40px 0;
}

nav.site ul {
	padding: 0;
}

nav.site ul li {
	display: inline-block;
}

.overlay {
	height: 1px;
	position: absolute;
	top: 0;
	left: 0;
	width: 1px;
}

.overlay:before {
	background: linear-gradient(#101010 50%, rgba(16, 16, 16, 0.2) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.03), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.03));
	background-size: 100% 3px, 6px 100%;
	content: "";
	display: block;
	pointer-events: none;
	position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
	z-index: 2;
}
	
.overlay:after {
	animation: flicker 0.30s infinite;
	background: rgba(16, 16, 16, 0.2);
	content: "";
	display: block;
	pointer-events: none;
	position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
	z-index: 2;
}

.col {
	float: left;
	padding: 0 20px;
}

.col.two { width: auto; }

.wrapper {
  animation: scroll 5s 1;
  margin: 0;
  overflow: hidden;
  padding: 0;
}

.content { 
	animation: scroll 3s 1;
  overflow: hidden;
	padding: 40px; 
	position: relative;
	width: 95%;
}

#logo-v {
	display: block;
	height: auto;
	margin: 0 auto;
	width: 200px;
}

img.pip-hero {
	display: block;
	float: left;
	height: auto;
	margin: 5px 10px 5px 0;
	width: 120px;
}

form {}

label {
	clear: left;
	display: block;
	float: left;
	margin-right: 10px;
	padding-top: 5px;
}

input[type=text],
textarea {
	background: transparent;
	border: none;
	color: #00dd00;
	display: block;
	float: left;
	font-family: 'VT323', Courier;
	font-size: 1.2em;
	position: relative;
	width: 80%;
	z-index: 10
}

textarea {
	margin-bottom: 20px
	overflow: auto;
	resize: none;
}

input[type=text]:focus,
textarea:focus,
input[type=submit]:focus,
a.button:focus {
	outline: 0;
}

input[type=submit],
a.button {
	background: transparent;
	border: 1px solid #00dd00;
	clear: both;
	color: #00dd00;
	cursor: hand;
	display: inline-block;
	font-family: 'VT323', Courier;
	font-size: 1em;
	margin-bottom: 20px;
	opacity: 0.25;
	padding: 10px 100px;
	position: relative;
	text-decoration: none;
	text-transform: uppercase;
	z-index: 10;
}

input[type=submit]:hover,
a.button:hover {
	background: #00dd00;
	color: #383838;
	opacity: 0.8;
}

.expandingArea { position: relative }
	
.scanline {
	animation: scroll 10s 5s infinite;
	background: -moz-linear-gradient(top,  rgba(0,221,0,0) 0%, rgba(0,221,0,1) 50%, rgba(0,221,0,0) 100%);
	background: -webkit-linear-gradient(top,  rgba(0,221,0,0) 0%,rgba(0,221,0,1) 50%,rgba(0,221,0,0) 100%);
	background: linear-gradient(to bottom,  rgba(0,221,0,0) 0%,rgba(0,221,0,1) 50%,rgba(0,221,0,0) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0000dd00', endColorstr='#0000dd00',GradientType=0 );
	display: block;
	height: 20px;
	opacity: 0.05;
	position: absolute;
		left: 0;
		right: 0;
		top: -5%;
	z-index: 2;
}

.clear {
	clear: both;
}

.clearfix {
  overflow: auto;
  zoom: 1;
}

.upper { text-transform: uppercase; }
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  	<div class="overlay"></div>
	<div class="scanline"></div>
<div class="wrapper">	
<div class="content clearfix">

		<?php
		if(isset($_POST['action']))
     	{
        @session_start();
        include('../inc/db.php');       

        $idNews=$_POST['action'];

        $SQLGetInfo = $odb -> prepare("SELECT * FROM `rapports` WHERE `Titre` = :id");
        $SQLGetInfo -> execute(array(':id' => $idNews));
        $RapportsInfo = $SQLGetInfo -> fetch(PDO::FETCH_ASSOC);

        $rb_titre = $RapportsInfo['Titre'];
        $rb_contenu = $RapportsInfo['Contenu'];
        $rb_author = $RapportsInfo['author'];
        $rb_scp = $RapportsInfo['scp'];
        $rb_accreditation = $RapportsInfo['accreditation'];

        $id = $_SESSION['ID'];
        $SQLGetInfo = $odb -> prepare("SELECT * FROM `users` WHERE `id` = :id");
        $SQLGetInfo -> execute(array(':id' => $id));
        $usersInfo = $SQLGetInfo -> fetch(PDO::FETCH_ASSOC);       
	       
        $author = $usersInfo['Username'];	
    } else {
            echo '<meta http-equiv="refresh" content="0;url=../index.php">';
    }
		?>
		
		<header class="site clearfix">
		<div class="col one">
			<img src="https://upload.wikimedia.org/wikipedia/commons/e/ec/SCP_Foundation_%28emblem%29.svg" alt="591 Industries" width="740" height="729" id="logo-v" />
		</div>
			<div class="col two">
				<h4>Lockdown Industries (tm) <br /> Système de Rapport SCP V.10</h4>
				<p>----------------------------------------</p>
				<p>HEROS v 1.0.0</p>
				<p>(c)2017 Lockdown Industries</p>
				<p>- Server Lockdown -</p>
			</div>
		</header>
		
		<nav class="site clear">
			<ul>
				<li><a href="#" title="">Return Home</a></li>
				<li><a href="#" title="">Our Clients</a></li>
				<li><a href="#" title="">Contact Us</a></li>
			</ul>
		</nav>
				
		<p>System Administrator Integrated Message System (SAIMS)</p>
		<p>System Administrator (SYSADM) - Mack Richardson</p>

		<p class="clear"><br /></p>

		<p>Bienvenue dans le système de rapport. Veuillez s'il vous plaît vérifier d'avoir bien la bonne autorisation d'accéder à ce fichier toute personne prise entrain de lire un fichier supérieur à son accréditation se verra expulser du bâtiment.</p><br />
		
		<form>
			<label><?php echo("Titre: ".$rb_titre);?></label><br />
			<label><?php echo("Auteur: ".$rb_author);?></label><br />
			<label><?php echo("SCP: ".$rb_scp);?></label><br />
			<label><?php echo("Accreditation: ".$rb_accreditation);?></label>
			<label><?php echo($rb_contenu);?></label><br /><br /><br /><br /><br /><br /><br />
			<input type="submit" value="Submit" />
			<a class="button" alt="" href="index.html">Cancel</a>
		</form>
	</div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://static.tumblr.com/maopbtg/oimmiw86r/jquery.autosize-min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
