<?php 
	require 'dbconnection.php';

	if (isset($_SESSION['access_token'])) {

	$sql= "SELECT * from poll WHERE email='" . $_SESSION['email'] . "' ";

	$query=mysqli_query($conn,$sql);

	$numrows=mysqli_num_rows($query);
	
			if($numrows==0)
			{
				$newuser= 1;
			}
			else {
				$newuser= 0;
			}

	}
?>