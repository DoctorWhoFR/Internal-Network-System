<?php
	session_start();
    include("database.php");
   
    $titre=$_POST['name'];
	$scp=$_POST['scp'];
	$accrediation=$_POST['accreditation'];
	$contenu=$_POST['description'];
	
	
	$sql="UPDATE rapports SET Titre='$titre', Contenu='$contenu', scp='$scp', accred='$accrediation'  WHERE Titre='$titre'";
	$exec=mysql_query($sql);	
	
	echo('<meta http-equiv="refresh" content="0; url=../index.php">');


?>