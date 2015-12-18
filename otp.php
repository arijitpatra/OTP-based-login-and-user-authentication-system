<?php 
session_start();
?>
<html>
    <head>
        <title>OTP</title>
    </head>
    <body>
        <?php echo "YOUR OTP: ".$_SESSION["otp"]; ?>
        <form action="otpverify.php" method="POST">
            <table>
                <tr>
                    <td><input type="password" maxlength="1" name="one" required></td>
                    <td><input type="password" maxlength="1" name="two" required></td>
                    <td><input type="password" maxlength="1" name="three" required></td>
                    <td><input type="password" maxlength="1" name="four" required></td></tr>
                    <tr><td><input type="submit" value="verify" name="verify"></td></tr> 
                          </table>
        </form>
    </body>
</html>