<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = trim($_POST['mail']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

    // Receiver email
    $to = "mihirjariwala399@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "
        <h3>New Contact Form Message</h3>
        <p><strong>Email:</strong> {$mail}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Message:</strong><br>{$message}</p>
    ";

    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: {$mail}" . "\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Message sent successfully!";
    } else {
        echo "⚠️ Something went wrong. Please try again.";
    }
} else {
    echo "⚠️ Invalid request.";
}
?>
