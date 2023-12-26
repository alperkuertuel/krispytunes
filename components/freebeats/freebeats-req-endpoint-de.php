<?php
$empfaenger = 'contact@krispytunes.com';
$betreff = 'NEUE DOWNLOAD ANFRAGE';
$header = $_POST['email'];
$text = $_POST['name'] . "\r\n" . $_POST['email'] . "\r\n\r\n" . $_POST['freebeats-subscriber'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha-response-freebeats'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Lc74uQZAAAAAJYNuqh8Iv-JLARL4BIryzP6ZgHo';
    $recaptcha_response = $_POST['recaptcha-response-freebeats'];

    $recaptcha_result = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha_data = json_decode($recaptcha_result);

    header('Content-Type: application/json');

    if ($recaptcha_data->score >= 0.5) {
        mail($empfaenger, $betreff, $text, "From: $header");
        echo json_encode("<span class='message-box-success'>Deine Anfrage wurde versendet! Bitte gedulde dich, du wirst deine pers&ouml;nliche E-Mail bekommen!</span>");
    } else {
        echo json_encode("<span class='message-box-error'>Es ist etwas schief gelaufen! Lade die Seite erneut oder schreibe mir über Instagram: <a href='https://www.instagram.com/krispy.tunes' target='_blank'>@krispy.tunes</a></span>");
    }
}
?>
