var matchNumber = /^[0-9]*$/;
var numberLength = /^d{10}$/;

//to avoid taking alphabet inputs in the phone number field, below code
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

var message = document.getElementById('message');

//checking phone number is exactly 10 digits, code below

function maxlength_validate() {

    if (mobile.value.length === 10) {
        message.innerHTML = "Perfect! Click 'next' to proceed...";
    }
    else {
        message.innerHTML = "Number is less than 10 digits!";
    }
}

function length_check() {
    if (mobile.value.length === 10) {
        return true;
    }
    else {
        message.innerHTML = "Number is less than 10 digits!";
        return false;
    }
}

                