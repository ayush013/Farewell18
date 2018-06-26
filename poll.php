<?php 
	require 'dbconnection.php';
	require 'config.php';

	if (isset($_SESSION['access_token'])) {

	$sql= "SELECT * from poll WHERE email='" . $_SESSION['email'] . "' ";

	$query=mysqli_query($conn,$sql);

	$numrows=mysqli_num_rows($query);
	
			if($numrows==0)
			{
			$vote_m= $_POST['male'];
			$vote_f= $_POST['female'];
			$email = $_SESSION['email'];
			if($vote_f == NULL ) {
				$vote_f= 0;
			}
			if($vote_m == NULL ) {
				$vote_m= 0;
			}


				$sql2="INSERT INTO poll(email,vote_m,vote_f) VALUES('$email','$vote_m','$vote_f')";

				$query2=mysqli_query($conn,$sql2);
	
				echo "Success";
				
				include 'logout.php';

			}
			else {
				// include 'logout.php';
				unset($_SESSION['access_token']);
				$gClient->revokeToken();
				session_destroy();
				echo "<script type='text/javascript'>
				$(document).ready(function(){
				alert('You have already voted');
			  });
				</script>";
			}

	}
	else {
		echo "NOT LOGGED IN";

	}

?>