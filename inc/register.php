
<?php
    session_start();
    include("db.php");
    
if(isset($_POST['submit'])){
 	$username = htmlspecialchars($_POST['username']);
   	$password = htmlspecialchars($_POST['password']);

    if(!empty($username) && !empty($password)){

    	if(!ctype_alnum($username) || strlen($username) < 4 || strlen($username) > 15)
    	{
	    	echo('<div class="alert alert-warning"><strong>Success : </strong> Choose a user between 4 and 15  ! </div>');
	    } else {

	    	$SQLCheckLogin = $odb -> prepare("SELECT COUNT(*) FROM `users` WHERE `Username` = :username");
		   	$SQLCheckLogin -> execute(array(':username' => $username));
		 	$countLogin = $SQLCheckLogin -> fetchColumn(0);

		 	if($countLogin == 0){

		 	$insertUser = $odb -> prepare("INSERT INTO `users`(`id`, `Username`, `Password`, `Level`) VALUES (NULL, :username, :password, 1)");
			$insertUser -> execute(array(':username' => $username, ':password' => $password));

			$SQLGetInfo = $odb -> prepare("SELECT * FROM `users` WHERE `username` = :username AND `password` = :password");
		 	$SQLGetInfo -> execute(array(':username' => $username, ':password' => $password));
		 	$userInfo = $SQLGetInfo -> fetch(PDO::FETCH_ASSOC);

		 	$_SESSION['ID'] = $userInfo['id'];
									    	    
		 	echo('<div class="alert alert-success"><strong>Success : </strong> Successful Connection...</div><meta http-equiv="refresh" content="2;url=../index.php">');

		 	} else {
		 		echo('<div class="alert alert-warning"><strong>Success : </strong> Username already used! </div>');
		 	}

    	}


	    	
    }
}

   
?>