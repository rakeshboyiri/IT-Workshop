<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admin";

        $con = mysqli_connect($servername,$username,$password,$dbname);

        if(!$con){
            echo "Failure";
            die("Connection failed : ". mysqli_connect_error());
        }else{
          #  echo "connected hello";
        }
?>
