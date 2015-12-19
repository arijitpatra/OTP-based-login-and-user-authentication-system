<?php 
session_start();
?>
<head>
    <title>Mobile Number</title>
</head>
<body>
    <form action="dataentry.php" method="POST">
        <table>
            <tr><td><input type="text" name="name" placeholder="full name" required></td></tr>
            <tr><td><input type="text" id="mobile" name="mobile" maxlength="10" placeholder="mobile number" value="<?php echo $_SESSION["mobile"]; ?>" readonly></td></tr>
            <tr><td><input type="password" id="password" name="pass" placeholder="password" required></td></tr>
            <tr><td><input type="password" id="confirm_password" name="cnfpass" placeholder="confirm password" required></td></tr>
            <tr><td style="float: right"><input style="background-color: green; color: white;" type="submit" value="next"></td></tr>
        </table>
    </form>
    <script type="text/javascript">
        var password = document.getElementById("password");
        var confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } 
            else {
            confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
        
        var matchNumber = /^[0-9]*$/;
        var numberLength = /^d{10}$/;
        
        $("#mobile")
            .data("oldValue", '')
            .bind('input propertychange', function () {
                var $this = $(this);
                var newValue = $this.val();
                if (!matchNumber.test(newValue))
                    return($this.val($this.data('oldValue')));

                if (!numberLength.test(newValue))
                    return $this.data('oldValue', newValue);
        });
    </script>
</body>
</html>
