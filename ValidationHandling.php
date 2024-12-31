<?php
// Include the necessary files
include "StoreDatafile.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize input data
    $username = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Check if any field is empty
    if (empty($username) || empty($email) || empty($message)) {
        header("Location: index.php?error=missing_field");
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=invalid_email");
        exit();
    }

    // Store the data in a file
    saveFromData($username, $email, $message);

    // Send email
    $sender = "bishal123prac@gmail.com";
    $to = $email; // Send email to the provided address
    $subject = "New Message from $username";
    $body = "Name: $username\nEmail: $email\nMessage: $message";
    $header = "From: $sender\r\n"; 
    $header .= "Reply-To: $email\r\n";  // Correctly append the Reply-To header

    // Send the email
    if(mail($to, $subject, $body, $header)) {
        // Redirect to success page
        header("Location: index.php?success=true");
    } else {
        // Redirect to error page
        header("Location: index.php?error=email_failed");
    }

    exit();
}
