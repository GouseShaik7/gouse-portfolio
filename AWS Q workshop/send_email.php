<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Set recipient email (your email where you want to receive messages)
    $to = "shaikgouse760@gmail.com.com";
    
    // Set email subject
    $subject = "New Contact Form Message from $name";
    
    // Create email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Set email headers
    $headers = "From: $name <$email>";

    // Send email
    if(mail($to, $subject, $email_content, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent.";
    }
}
?>
