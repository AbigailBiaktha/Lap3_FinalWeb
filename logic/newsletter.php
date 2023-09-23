<?php

// @include 'config.php';

// if (isset($_POST['subscribe'])) {
//     $userEmail = $_POST['email'];

//     if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
//         // Check if the email is not already subscribed
//         $checkQuery = "SELECT * FROM subscribers WHERE email = ?";
//         $stmt = $conn->prepare($checkQuery);
//         $stmt->bind_param("s", $userEmail);
//         $stmt->execute();
//         $result = $stmt->get_result();

//         if ($result->num_rows == 0) {
//             // Email is not already subscribed, insert it into the subscribers table
//             $insertQuery = "INSERT INTO subscribers (email) VALUES (?)";
//             $stmt = $conn->prepare($insertQuery);
//             $stmt->bind_param("s", $userEmail);

//             if ($stmt->execute()) {
//                 // Subscription successful
//                 $message = "Thank you for subscribing to our newsletter!";
//             } else {
//                 // Subscription failed
//                 $error = "Subscription failed: " . $stmt->error;
//             }
//         } else {
//             // Email is already subscribed
//             $message = "You are already subscribed to our newsletter.";
//         }

//         // Close the database connection
//         $stmt->close();
//     } else {
//         // Invalid email format
//         $error = "Invalid email address. Please enter a valid email.";
//     }
// }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Opening Envelope</title>
</head>
<link rel="stylesheet" type="text/css" href="./assets/css/newsletter.css">

<body>
    <div class="letter-image">
        <div class="animated-mail">
            <div class="back-fold"></div>
            <div class="letter">
                <div class="letter-border"></div>
                <div class="letter-title"></div>
                <div class="letter-context"></div>
                <div class="letter-stamp">
                    <div class="letter-stamp-inner"></div>
                </div>
            </div>
            <div class="top-fold"></div>
            <div class="body"></div>
            <div class="left-fold"></div>
        </div>
        <div class="shadow"></div>
    </div>
</body>

</html>