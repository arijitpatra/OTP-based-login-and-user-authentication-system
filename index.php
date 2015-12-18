<?php 
session_start();
?>

<?php
session_unset();  
?>

<!DOCTYPE html>
<head>
    <title>Mobile Number</title>
</head>
<body>
    <form action="checkexisting.php" method="POST">
        <table>
            <tr><td><input type="text" name="mobile" maxlength="10" placeholder="mobile number"></td></tr>
            <tr><td style="float: right"><input style="background-color: green; color: white;" type="submit" name="next" value="next"></td></tr>
        </table>
    </form>
</body>
</html>
