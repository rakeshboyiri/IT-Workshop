<?php
    include("db_connection.php");
    $query = "select * from users";
    $result = mysqli_query($con,$query);
    echo "<br/><br/>";
    foreach($result as $row){
        echo $row['fname']."  ".$row['lname'];
        echo "<br/>";
    }
    $r = mysqli_query($con,"INSERT INTO `users`(`id`, `fname`, `lname`, `gender`, `address`, `email`, `password`, `contact_address`) VALUES ('009977','ramya','name','female','mancherial','ramya@gmail.com','123123123','9553518523');");
    $query = "select * from users";
    $result = mysqli_query($con,$query);

    foreach($result as $row){
        echo $row['fname']."  ".$row['lname'];
        echo "<br/>";
    }

?>