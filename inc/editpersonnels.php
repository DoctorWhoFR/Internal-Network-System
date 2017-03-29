<?php
	include("database.php");

    $usernames=$_POST['usernames'];
    $level=$_POST['nlevel'];
    $requete="UPDATE user SET Level='$level' WHERE Username='$usernames'";
    $exec=mysql_query($requete);  
	echo('<meta http-equiv="refresh" content="0; url=../index.php">');
	
?>