<?php
// include the savedataForm in file 
include "StoreDatafile.php";

// first check the server request 
// after that sanatize 
// after getting store the data in text file
// after sent it to an email(use PHP's mail() function)



if($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // store the value in variable and use htmlspecialChars for sanitize and security
    $username = htmlspecialchars($_POST["name"]); 
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // now check the value is empty or not
    if(empty($username) || empty($message) || empty($message)) {
        header("Location : index.php?error=missing field");
        exit();
    }

    // now check the email validation and use FILTER_VALIDATE_EMAIL
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=invalid email");
        exit();
    }

    // store the value in file first
    if($username || $email || $message) {
        saveFromData($username, $email, $message);
    };
    

    // send the email using PHP's email mail() function
    $to = $email; //send email to the address provided in the fomr
    #subject = "New Message from $username";
    $body = "Name : $username\nEmail: $email\nMessage: $message";
    $header = "From: $email";

    if(mail($to, $subject, $body, $header)) {
        header("Location: index.php?success=true");

    } else {
        header("Location: index.php?error=email_failed");
    }

    exit();


}