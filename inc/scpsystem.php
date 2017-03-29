<?php
	include("database.php");

    if(isset($_POST['name'])) 
    {        
        $name=$_POST['name'];
        $class=$_POST['class'];
        $identifiant=$_POST['identifiant'];
        $accreditation=$_POST['accreditation'];
		$image=$_POST['images'];
		$description=$_POST['accreditation'];

        $requete="INSERT INTO scp VALUES('', '$name', '$class', '$accreditation', '$identifiant','$description', '$image')";
        $exec=mysql_query($requete);

		echo('<meta http-equiv="refresh" content="0; url=../index.php">');

    }
    else
    {
        
        echo "Erreur!";
    }
?>