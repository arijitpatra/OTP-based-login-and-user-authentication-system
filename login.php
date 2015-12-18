<?php
$servername = "localhost";
$username = "root";
//$password = "password";
$dbname = "record";

$dbconnection = mysqli_connect($servername, $username, "", $dbname);

if (!$dbconnection) {
    die("Database Connection Failed " . mysqli_connect_error());
}

$user = $_GET['user'];
?> 

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <table>
                <tr><td><?php echo $user ?></td></tr>
                <tr><td><input type="password" name="passcheck" placeholder="password" required></td></tr>
                <tr><td style="float: right"><input style="background-color: green; color: white;" type="submit" name="login" value="login"></td></tr>
            </table>
        </form>


<?php
mysqli_close($dbconnection);
?>