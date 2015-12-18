<?php 
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
</html>
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
                <!--<tr><td><span><i class="fa fa-user" style="font-size: 100px"></i></span></td></tr>-->
                <tr><td><span class="fa-stack fa-lg" style="font-size: 100px"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-user fa-stack-1x fa-inverse" ></i></span></td></tr>
                <tr><td><?php echo $_SESSION["name"] ?></td></tr>
                <tr><td><input type="password" name="passcheck" placeholder="password"></td></tr>
                <tr><td style="float: right"><input style="background-color: green; color: white;" type="submit" name="login" value="login"></td></tr>
            </table>
        </form>
        
<?php
        
mysqli_close($dbconnection);
?>