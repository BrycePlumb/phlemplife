












<?php
    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $experience = $_POST['experience'];
        
        // Set the recipient email address
        $to = "recipient@example.com";

        // Set the subject of the email
        $subject = "Become an Agent Form Submission";

        // Build the message
        $message = "Name: " . $name . "\n";
        $message .= "Email: " . $email . "\n";
        $message .= "Phone: " . $phone . "\n";
        $message .= "Experience: " . $experience . "\n";

        // Set the headers of the email
        $headers = "From: " . $email . "\r\n" . "Reply-To: " . $email . "\r\n" . "X-Mailer: PHP/" . phpversion();

        // Send the email
        mail($to, $subject, $message, $headers);
        
        // Redirect to the thank you page
        header("Location: thank-you.html");
    }
?>
