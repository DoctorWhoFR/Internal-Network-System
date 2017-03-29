<?php 
	

    if(isset($_POST['remove']))
    {
       $insertUser = $odb -> prepare("DELETE FROM `rapports` WHERE `Titre` = :titre");
       $insertUser -> execute(array(':titre' => $_POST['remove']));
    }


 ?>