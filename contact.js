$(document).ready(function(){
    // CHECK FOR MATCHING EMAILS
	
    // once the user advances to the next field
    $("#email-2").blur(function() {
        
        // get emails
        var email = $("#email-1").val();
        var confirmEmail = $("#email-2").val();
        
        // check that emails match
        if (email != confirmEmail) {
            // if they do not match, display emailAlert in bold red
            $('#emailAlert').css("display", "inline-block");
            // hide emailsMatch
            $('#emailsMatch').css("display", "none");
            // disable the submit button
            $("#submitButton").prop("disabled", true);
        }
        else {
            // display emailsMatch in bold green
            $('#emailsMatch').css("display", "inline-block");
            // hide emailAlert
            $('#emailAlert').css("display", "none");
            // enable the submit button
            $("#submitButton").prop("disabled", false);
        }
        
    });
    
});