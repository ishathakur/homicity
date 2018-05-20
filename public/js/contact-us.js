$(document).ready(function(){
    $('#submit-contact').on('click',function(e){
        var name = $('#name').val();
        var email = $('#email').val();
        if ($.trim($('#name').val()).length == 0) {
            $('#error-name').text('Please enter name.').css('color','red');
            $('#error-name').fadeIn('fast').delay(5000).fadeOut();
        }
        else if ($.trim(email).length == 0) {
            $('#error-email').text('Please enter email.').css('color','red');
            $('#error-email').fadeIn('fast').delay(5000).fadeOut();
        }
        else if (validateEmail(email)==false) {
            $('#error-email').text('Please enter valid email.').css('color','red');
            $('#error-email').fadeIn('fast').delay(5000).fadeOut();
        }else{
            $('#submit-contact-form').submit();
        }
    });
});
// Function that validates email address through a regular expression.
function validateEmail(email) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(email)) {
        return true;
    }
    else {
        return false;
    }
}
