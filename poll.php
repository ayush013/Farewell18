<?php 
	require 'dbconnection.php';

	$vote_m= $_POST['male'];
	$vote_f= $_POST['female'];
	$ipaddress = 'test';

    $sql2="INSERT INTO poll(ip_addr,vote_m,vote_f) VALUES('$ipaddress','$vote_m','$vote_f')";

    $query2=mysqli_query($conn,$sql2);

    echo "Success";
?>