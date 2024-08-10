<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "obosohio@gmail.com";
    $subject = "Alumni Association Form Submission";
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $preference = $_POST['preference'];
    $additionalInput = $_POST['additionalInput'];
    $volunteer = $_POST['volunteer'];
    $suggestions = $_POST['suggestions'];
    $events = $_POST['events'];
    $support = $_POST['support'];
    $directory = $_POST['directory'];

    $message = "
    Name: $name\n
    Contact: $contact\n
    Preferred Contact Method: $preference\n
    Additional Info: $additionalInput\n
    Volunteer Interest: $volunteer\n
    Suggestions: $suggestions\n
    Events Interest: $events\n
    Support Ideas: $support\n
    Directory Info: $directory\n
    ";

    $headers = "From: https://jerrys-project.vercel.app/";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
