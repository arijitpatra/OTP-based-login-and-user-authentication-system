<?php
session_start();
?>
<head>
    <title>Mobile Number</title>
    <link rel="stylesheet" type="text/css" href="assets/css/task.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="task-center">
        <form action="dataentry.php" method="POST">
            <table>
                <tr><td><input class="task-form-fields" type="text" name="name" placeholder="full name" required autofocus></td></tr>
                <tr><td><input class="task-form-fields" type="text" id="mobile" name="mobile" maxlength="10" placeholder="mobile number" value="<?php echo $_SESSION["mobile"]; ?>" readonly></td></tr>      <!--phone number inserted in the index page is directly forwarded in this field-->
                <tr><td><input class="task-form-fields" type="password" id="password" name="pass" placeholder="password" required></td></tr>
                <tr><td><input class="task-form-fields" type="password" id="confirm_password" name="cnfpass" placeholder="confirm password" required></td></tr>
                <tr><td><input class="task-click-btn" type="submit" value="next"></td></tr>
            </table>
        </form>
    </div>
    <script type="text/javascript">
        
        //to confirm passwords, code below
        var password = document.getElementById("password");
        var confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            }
            else {
                confirm_password.setCustomValidity('');
            }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>
</html>
