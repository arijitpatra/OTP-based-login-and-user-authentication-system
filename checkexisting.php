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

//echo $query;

    $result = mysqli_query($dbconnection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
     
        $username = $row["name"];
        $password = $row["password"];
        $_SESSION["mobile"] = $mobile;
        $_SESSION["user"] = $username;
        $_SESSION["password"] = $password;
//        echo "OK "."User ".$username." Password ".$password." Mobile ".$mobile;   
        echo "OK "."User ".$_SESSION["user"]." Password ". $_SESSION["password"]." Mobile ".$_SESSION["mobile"];
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <table>
                <tr><td><?php echo $username ?></td></tr>
                <tr><td><input type="password" name="passcheck" placeholder="password"></td></tr>
                <tr><td style="float: right"><input style="background-color: green; color: white;" type="submit" name="login" value="login"></td></tr>
            </table>
        </form>


        
        <?php
    } else
        header('location: signup.php');
}

        if(isset($_POST['login'])){
            $passcheck = mysqli_real_escape_string($dbconnection, $_POST['passcheck']); 
            
            //echo $passcheck;
            //echo $_SESSION["password"];

            if($passcheck == $_SESSION["password"])         //need to unset the session
                echo "OK";      
            else
                echo "NOT OK";
        }
      mysqli_close($dbconnection);
?>