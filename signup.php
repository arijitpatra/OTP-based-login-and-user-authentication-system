<!DOCTYPE html>
<head>
    <title>Mobile Number</title>
</head>
<body>
    <form action="dataentry.php" method="POST">
        <table>
            <tr><td><input type="text" name="name" placeholder="full name" required></td></tr>
            <tr><td><input type="text" name="mobile" maxlength="10" placeholder="mobile number" required></td></tr>
            <tr><td><input type="password" name="pass" placeholder="password" required></td></tr>
            <tr><td><input type="password" name="cnfpass" placeholder="confirm password" required></td></tr>
            <tr><td style="float: right"><input style="background-color: green; color: white;" type="submit" value="next"></td></tr>
        </table>
    </form>
</body>
</html>
