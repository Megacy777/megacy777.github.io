<?php
function sendEmailFromForm($name, $email, $message) {
    $to = "megacy777@gmail.com"; // Change this to the recipient email address
    $subject = "Message from Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Call the function to send email
    sendEmailFromForm($name, $email, $message);
}
?>
