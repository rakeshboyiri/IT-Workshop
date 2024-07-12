<?php
    $servername = "localhost";
    $username = "admin";
    $password = "";
    $dbname = "admin";

        $con = mysqli_connect($servername,$username,$password,$dbname);

        if(!$con){
            echo "Failure";
            die("Connection failed : ". mysqli_connect_error());
        }else{
            echo "connected";
        }
?>