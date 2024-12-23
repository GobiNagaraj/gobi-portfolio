<?php

    if( isset($_REQUEST) && !empty($_REQUEST) ) {
        // Get data from form  
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $user_message = htmlspecialchars($_POST['message']);

        $to = "ngobicse@gmail.com";
        $subject = "Gobi Personal Portfolio - Form Submission";

        $message = "
        <html>
        <head>
        <title>Response Email</title>
        </head>
        <body>
        <p>Dear Gobi, You've received the response!!</p>
        <table>
        <tr>
        <th>Name</th>
        <th>Email Address</th>
        <th>Subject</th>
        <th>Message</th>
        </tr>
        <tr>
        <td>".$name."</td>
        <td>".$email."</td>
        <td>".$subject."</td>
        <td>".$user_message."</td>
        </tr>
        </table>
        </body>
        </html>";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <gobi1529@gmail.com>' . "\r\n";
        
        $mail_status = mail($to, $subject, $message, $headers);

        if( $mail_status ) {
            // Redirect to
            echo 'OK';
        }
    }

?>