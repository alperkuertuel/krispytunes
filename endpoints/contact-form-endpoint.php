<?php
$receiver = 'alperkuertuel@hotmail.de';
$reference = 'krispytunes.com - CONTACT ' . $_POST['contact-name'];
$contact_email = $_POST['contact-email'];
$message = $_POST['contact-message'] . "\r\n\r\n" . $_POST['contact-subscriber'];
$currentPathname = $_POST['currentPathname'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha-response-contact-form'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Lc74uQZAAAAAJYNuqh8Iv-JLARL4BIryzP6ZgHo';
    $recaptcha_response = $_POST['recaptcha-response-contact-form'];

    $recaptcha_result = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha_data = json_decode($recaptcha_result);

    header('Content-Type: application/json');

    if ($recaptcha_data->score >= 0.5) {
        if ($currentPathname === '/' || $currentPathname === '/index.php') {
            mail($receiver, $reference, $message, "From: $contact_email");
            echo json_encode("<span class='message-box-success'>Message sent successfully!</span>");
        }  else {
            $error_message = "Error: Something went wrong. Current URL: " . $currentPathname;
            error_log($error_message);
            echo json_encode("<span class='message-box-error'>Something went wrong! Reload the page and try again or contact me via Instagram: <a href='https://www.instagram.com/krispy.tunes' target='_blank'>@krispy.tunes</a></span>");
        }
    } 
}
?>