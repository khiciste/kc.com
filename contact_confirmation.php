<?php
    if(isset($_POST["submit"])) {
        
        // send email to
        $to = "kevin.cleland@gmail.com";
        // get subject
        $subject = "contact kc.com";
        // begin message by getting name
        $message = "From: " . $_POST["name"] . "\r\n\r\n";
        
        // check gender
        $selected_radio = $_POST['gender'];
        if ($selected_radio == 'male') {
            $gender = 'male';    
        }
        else if ($selected_radio == 'female') {
            $gender = 'female';   
        }
        else {
            $gender = 'null';
        }
        
        // assemble phone number
        $phone = "(" . $_POST["areacode"] . ") " . $_POST["threedigits"] . "-" . $_POST["fourdigits"];
        
        // append message
        $message .= "Gender: " . $gender . "\r\n\r\n";
        $message .= "Email: " . $_POST["email-1"] . "\r\n\r\n";
        $message .= "Phone: " . $phone . "\r\n\r\n";
        $message .= "Message: " . $_POST["commentBox"] . "\r\n\r\n";
        
        $sent = mail($to, $subject, $message);
        
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

<!-- thanks to: http://www.lynda.com/articles/send-email-from-a-web-form-with-php -->