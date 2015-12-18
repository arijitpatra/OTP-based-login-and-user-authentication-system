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

        if(isset($_POST['login'])){
            $passcheck = mysqli_real_escape_string($dbconnection, $_POST['passcheck']); 
            
            //echo $passcheck;
            //echo $_SESSION["password"];

            if($passcheck == $_SESSION["pass"])   {      //need to unset the session
                //echo "OK";
                //echo $_SESSION["mobile"]." ".$_SESSION["user"]." ".$_SESSION["password"];
                header('location: success.php');
            }
            else
                echo "NOT OK";
        }

?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <table>
                <tr><td><?php echo $_SESSION["name"] ?></td></tr>
                <tr><td><input type="password" name="passcheck" placeholder="password"></td></tr>
                <tr><td style="float: right"><input style="background-color: green; color: white;" type="submit" name="login" value="login"></td></tr>
            </table>
        </form>
        
<?php
        
mysqli_close($dbconnection);
?>