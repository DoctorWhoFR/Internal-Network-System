
<?php
    session_start();
    include("db.php");
    
    if(isset($_POST['submit'])){
    	 $username = htmlspecialchars($_POST['username']);
    	$password = htmlspecialchars($_POST['password']);

	    if(!empty($username) && !empty($password)){
	    	$SQLCheckLogin = $odb -> prepare("SELECT COUNT(*) FROM `users` WHERE `Username` = :username AND `Password` = :password");
	    	$SQLCheckLogin -> execute(array(':username' => $username, ':password' => $password));
		 	$countLogin = $SQLCheckLogin -> fetchColumn(0);

		 	if($countLogin == 1){

		 		$SQLGetInfo = $odb -> prepare("SELECT * FROM `users` WHERE `username` = :username");
		 		$SQLGetInfo -> execute(array(':username' => $username));
		 		$userInfo = $SQLGetInfo -> fetch(PDO::FETCH_ASSOC);

		 		$_SESSION['ID'] = $userInfo['id'];


	    
	   		 echo('<div class="alert alert-success"><strong>Success : </strong> Successful Connection...</div><meta http-equiv="refresh" content="2;url=../index.php">');

		 	} else {
		 		echo("No account!");
		 	}
	    }
    }

   
?>