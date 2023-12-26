<?php
$empfaenger = 'contact@krispytunes.com';
$betreff = 'NEW DOWNLOAD REQUEST';
$header = $_POST['email'];
$text = $_POST['name'] . "\r\n" . $_POST['email'] . "\r\n\r\n" . $_POST['freebeats-subscriber'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptchaResponse'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Lc74uQZAAAAAJYNuqh8Iv-JLARL4BIryzP6ZgHo';
    $recaptcha_response = $_POST['recaptchaResponse'];

    $recaptcha_result = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha_data = json_decode($recaptcha_result);

    header('Content-Type: application/json');

    if ($recaptcha_data->score >= 0.5) {
        mail($empfaenger, $betreff, $text, "From: $header");
        echo json_encode("<span class='message-box'>Message sent successfully. Please be patient, you are going to receive your personal download e-mail!</span>");
    } else {
        echo json_encode("<span class='message-box-error'>Something went wrong! Reload the page and try it again or contact me via Instagram: <a href='https://www.instagram.com/krispy.tunes' target='_blank'>@krispy.tunes</a></span>");
    }
}
?>
