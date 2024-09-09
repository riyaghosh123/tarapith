<?php
    $username="root";
    $serverName="localhost";
    $password="";
    $db="login_db";

    $con=mysqli_connect($serverName,$username,$password,$db);
    echo "connection success!";

   

?>