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
    <form onsubmit="return length_check()" action="checkexisting.php" method="POST">
        <table>
            <tr><td><input type="text" id="mobile" onkeyup="maxlength_validate()" name="mobile" maxlength="10" placeholder="mobile number" required></td></tr>
            <tr><td style="float: right"><input style="background-color: green; color: white;" type="submit" name="next" value="next"></td></tr>
        </table>
    </form>
    <p id="message"></p>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
    <script type="text/javascript">
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
        
//            val = $("#mobile").value;
//            alert(val);
            
//            if($("#mobile").length == 10) {
//                return true;
//            }
//            else {
//                return false;
//                alert("less than 10 digit");
//            }
        
        var message = document.getElementById('message');
        
        function maxlength_validate() {
            //var temp = document.getElementById("mobile").value;
            if(mobile.value.length === 10) {                
                //return true;
                message.innerHTML = "good!";                
            }
            else {
                message.innerHTML = "number is less than 10 digits, enter 10 digits!";
                //return false;
                //alert("less than 10 digit");
            }
        }
        
        function length_check() {
            if(mobile.value.length === 10) {                
                //return true;
                return true;                
            }
            else {
                message.innerHTML = "number is less than 10 digits, enter 10 digits!";
                return false;
                //alert("less than 10 digit");
            }
        }
        
                
    </script>
</body>
</html>

