<?php
	include("db.php");

    if(isset($_POST['title'])) 
    {        
		
        $SQLGetInfo = $odb -> prepare("SELECT * FROM `users` WHERE `id` = :id");
        $SQLGetInfo -> execute(array(':id' => $_SESSION['ID']));
        $userInfo = $SQLGetInfo -> fetch(PDO::FETCH_ASSOC);

        $author=$userInfo['Username'];
        $titre=$_POST['title'];
        $contenu=$_POST['contenu'];
        $scp=$_POST['scp'];
        $accreditation=$_POST['accreditation'];


        $insertUser = $odb -> prepare("INSERT INTO `rapports`(`IdNews`, `Titre`, `Contenu`, `author`, `scp`, `accreditation`) VALUES (NULL, :titre, :contenu, :author, :scp, :accreditation)");
        $insertUser -> execute(array(':titre' => $titre, ':contenu' => $contenu, ':author' => $author,':scp' => $scp, ':accreditation' => $accreditation));
                                                

		
    }
    else
    {
        
        echo "Erreur!";
    }
?>