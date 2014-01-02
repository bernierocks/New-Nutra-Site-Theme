$(document).ready(function() {
	$("body").ezBgResize({
		img : "images/bg.jpg", // Relative path example.  You could also use an absolute url (http://...).
		opacity : 1, // Opacity. 1 = 100%.  This is optional.
		center  : true // Boolean (true or false). This is optional. Default is true.
	});
    $('#submitLogin').click(function()
    {
        var values = {};
        $("#loadingDiv").css('display', 'block');
        values['email']     = $('#email').val();
        values['password']  = $("#password").val();
        values['action']    = $("#page").val();
        
        $.ajax(
        {
            type: "GET",
            url: 'http://xfitnesstutor.com/loadCMS.php',
            crossDomain : true,
            data: values
            //context: $('#content'+wHandleID)
        })
        .done(function(msg) 
        {
            $("#loadingDiv").css('display', 'none');
            // detect success, redirect
            if(msg>1)
            {
                window.location.href = "http://xfitnesstutor.com/desktop.php";
                return false;
            }
            else if(msg>0)
            {
                window.location.href = "http://xfitnesstutor.com/desktop.php";
                return false;
            }
            else
                $('#emailErrorDiv').css('display', 'block');
            
        });
    });
    $('#submitForgotPassword').click(function()
    {
        var values = {};
        values['email']     = $('#emailFP').val();
        values['action']    = $('#pageFP').val();
        $.ajax(
        {
            type: "GET",
            url: 'http://xfitnesstutor.com/loadCMS.php',
            crossDomain : true,
            data: values
            //context: $('#content'+wHandleID)
        })
        .done(function(msg) 
        {
            $("#loadingDiv").css('display', 'none');
            // detect success, redirect
            if(msg>0)
            {
                $('#emailSuccessFP').css('display', 'block');
                var email = $('#emailFP').val();
                $('#email').val(email);
                $('#password').focus();
            }
            else
            {
                $('#emailErrorDivFP').css('display', 'block');
            }
        });
    });
    $('#showPasswordLink').click(function()
    {
        $('#forgotPassword').css("display","block");
        $('#showPasswordLink').css('display', 'none');
        $('#emailFP').focus();
    });
});
/*$("<img>").attr("src", jqez.img).load(function() {

jqez.width = this.width;

jqez.height = this.height;

// Create a unique div container

$("body").append('<div id="jq_ez_bg"></div>');
});
*/
