<?php 
    require 'dbconnection.php';
    $votes_m= array();

    $votes_f= array();

    $sql2="SELECT * FROM poll";

    $query2=mysqli_query($conn,$sql2);

    $count=mysqli_num_rows($query2);

    for($x=1;$x<=5;x++)
    {
        $sql3="SELECT * FROM poll WHERE vote_m='".$x."'";

        $query3=mysqli_query($conn,$sql3);

        $count_vote=mysqli_num_rows($query3);

        $votes_m[$x]= ($count_vote/$count)*100;
    }

    for($x=1;$x<=5;x++)
    {
        $sql4="SELECT * FROM poll WHERE vote_f='".$x."'";

        $query4=mysqli_query($conn,$sql4);

        $count_vote=mysqli_num_rows($query4);

        $votes_f[$x]= ($count_vote/$count)*100;
    }

    echo($votes_m);
    echo($votes_f);
    

?>