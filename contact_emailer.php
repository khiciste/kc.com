<?php
    if(isset($_POST["submit"])) {
        
        // send email to
        $to = "kevin.cleland@gmail.com";
        // get subject
        $subject = "contact kc.com";
        // begin message by getting name
        $message = "From: " . $_POST["name"] . "\r\n\r\n";
        
        // assemble phone number
        $phone = "(" . $_POST["areacode"] . ") " . $_POST["threedigits"] . "-" . $_POST["fourdigits"];
        
        // want to be kept up to date??
        if ($_POST["updates"] === "updates") {
            $onMailingList = "Yes";
        }
        else {
            $onMailingList = "No";
        }
        
        // append message
        $message .= "Email: " . $POST["email-1"] . "\r\n\r\n";
        $message .= "Phone: " . $phone . "\r\n\r\n";
        $message .= "Message: " . $_POST["commentBox"] . "\r\n\r\n";
        $message .= "On mailing list? " . $onMailingList;
        
        // $headers = "From: kevin.cleland@gmail.com";
        $headers .= 'Content-type: text/plain; charset=utf-8';
        
        // get email, filter for spam
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($email) {
            $headers .= "\r\nReply-To: $email";
        }
        
        $sent = mail($to, $subject, $message, $headers, '-fkevin.cleland@gmail.com');
        
        if($sent) {
            header("refresh: 4; url = index.php");
            echo "Message sent successfully! Thanks for contacting us! \r\n\r\n
            Redirecting you now (depending on how fast you read this)...";
        }
        else {
            header("refresh: 4; url = contact.php");
            echo "We encountered an error sending your mail. Please try again.";
        }
    }
?>

<!-- thanks to: https://learning.linkedin.com/blog/tech-tips/send-email-from-a-web-form-with-php -->