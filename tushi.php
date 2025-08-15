<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    $to = "kawsar.hasan@gmail.com";
    $subject = "New message from $name via website";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "success";
    } else {
        echo "error";
    }
}
?>
