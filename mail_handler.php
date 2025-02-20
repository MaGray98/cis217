<?php



if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $errors = [];


    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    }

    if (empty($message)) {
        $errors[] = 'Message field is empty';
    }

    if (!$errors) {
        $to = "MGTest_09251998@outlook.com";
        $subject = "PIG DICE Contact Form Submission";
        $headers = "From: $email";




        echo mail($to, $subject, $emailContent, $headers) ? "Form submitted successfully!" : "Failed to submit form.";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red'>$error</p>";
        }
        ;
    }
    ;
}