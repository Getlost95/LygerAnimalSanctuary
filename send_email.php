<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "klientp.amparo@gmail.com"; // <-- Replace with your email
    $subject = "New message from website";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if(mail($to, $subject, $body, $headers)){
        echo "<p>Message sent successfully!</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message.</p>";
    }
}
?>
