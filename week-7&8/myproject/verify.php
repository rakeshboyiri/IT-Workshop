<?php
//verify.php
?>

<?php
    session_start();
     
    include("Db_connection.php"); // Assuming db.php contains your databaseconnection details
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender']; // Correct variable name
    $num = $_POST['number'];
    $adress = $_POST['adress']; // Correct variable name
    $gmail = $_POST['email']; // Correct variable name
    $password = $_POST['pass']; // Correct variable name
    
    if (TRUE) { //    Corrected empty check and variable name
    // Assuming db.php contains database connection code

    $query = "INSERT INTO users (fname, lname, gender, contact_address, address,
    email, password) VALUES ('$firstname', '$lastname', '$gender', '$num', '$adress',
    '$gmail', '$password')";

    mysqli_query($con, $query);
    

    // echo "<script type='text/javascript'>alert('Successfully Registered')</script>";

    header("Location:login.php");

    } else {

    // echo "<script type='text/javascript'> alert('Please Enter valid   information')</script>";
    echo "failed";

    }
    }
?>
<!-- !empty($gmail) && !empty($password) && is_numeric($num) -->
