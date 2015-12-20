<?php
session_start();
?>

<?php

$servername = "localhost";
$username = "root";
//$password = "password";
$dbname = "record";

$dbconnection = mysqli_connect($servername, $username, "", $dbname);

if (!$dbconnection) {
    die("Database Connection Failed " . mysqli_connect_error());
}

if (isset($_POST['next'])) {
    $mobile = mysqli_real_escape_string($dbconnection, $_POST['mobile']);

    $query = "SELECT name,password FROM users WHERE mobile_number = $mobile";

    $result = mysqli_query($dbconnection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $user = $row["name"];
        $password = $row["password"];
        $_SESSION["mobile"] = $mobile;
        $_SESSION["name"] = $user;
        $_SESSION["pass"] = $password;
        $_SESSION['loggedin'] = true;
        header('location: login.php');
    } else {
        $_SESSION["mobile"] = $mobile;
        header('location: signup.php');
    }
}

mysqli_close($dbconnection);
?>