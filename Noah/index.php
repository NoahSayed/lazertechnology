
<?php
session_start();

// Validate form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $contact = htmlspecialchars(trim($_POST['contact']));
    $organization = htmlspecialchars(trim($_POST['organization']));
    $remark = htmlspecialchars(trim($_POST['remark']));
    $email = htmlspecialchars(trim($_POST['email']));
    $captcha = htmlspecialchars(trim($_POST['captcha']));

    // Validate Captcha
    if ($captcha == $_SESSION['captcha']) {
        // Process form data (e.g., save to database, send email, etc.)
        echo "Form submitted successfully!";
    } else {
        echo "<div class='error'>Captcha verification failed.</div>";
    }
} else {
    echo "<div class='error'>Invalid form submission.</div>";
}
?>