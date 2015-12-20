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
                message.innerHTML = "Perfect! Click 'next' to proceed...";                
            }
            else {
                message.innerHTML = "Number is less than 10 digits!";
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
                message.innerHTML = "Number is less than 10 digits!";
                return false;
                //alert("less than 10 digit");
            }
        }
        
                