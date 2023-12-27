<?php
$receiver = 'contact@krispytunes.com';
$reference = 'NEW MESSAGE FROM '.$_POST['contact-name'];

$contact_email = $_POST['contact-email'];
$message = $_POST['contact-message']."\r\n\r\n".$_POST['contact-subscriber'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha-response-contact-form'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Lc74uQZAAAAAJYNuqh8Iv-JLARL4BIryzP6ZgHo';
    $recaptcha_response = $_POST['recaptcha-response-contact-form'];

    $recaptcha_result = file_get_contents($recaptcha_url.'?secret='.$recaptcha_secret.'&response='.$recaptcha_response);
    $recaptcha_data = json_decode($recaptcha_result);

    if ($recaptcha_data->score >= 0.5) { 
        mail($receiver, $reference, $message, "From: $contact_email");
        echo json_encode("<span class='message-box-success'>Deine Nachricht wurde erfolgreich versendet.</span>");
    } else {
        echo json_encode("<span class='message-box-error'>Es ist etwas schief gelaufen! Lade die Seite erneut oder kontaktiere mich über Instagram: <a href='https://www.instagram.com/krispy.tunes' target='_blank'>@krispy.tunes</a></span>");
    }
}
?>