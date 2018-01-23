$(document).ready(function () {

  $('#contactForm').on('submit', function(e){

    var emailReg = /\S+@\S+\.\S+/;
    var emailaddress = $("input[name=emailInput]").val();
    var phone = $("input[name=telephoneInput]").val();

    if
        ($.trim($("input[name=fullNameInput]").val()) === "" ||
        $.trim($("input[name=telephoneInput]").val()) === "" ||
        $.trim($("input[name=emailInput]").val()) === "" ||
        $.trim($(".messageInput").val()) === "")

    {
        showNotFilledIn();
        return false;
    }

    else if
        (!emailReg.test(emailaddress))

    {
        showEmailInvalid();
        return false;
    }

    else if
        (!$.isNumeric(phone))

    {
        showPhoneInvalid();
        return false;
    }


    else

    {
        return true;
    }
});
});

    function showNotFilledIn()
{
 $(".notFilledIn").css({"visibility":"visible"});
}

function showEmailInvalid()
{
$(".emailInvalid").css({"visibility":"visible"});
}

function showPhoneInvalid()
{
$(".phoneInvalid").css({"visibility":"visible"});
}
