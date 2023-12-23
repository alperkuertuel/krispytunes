<?php

$empfaenger = 'contact@krispytunes.com';
$betreff = 'NEW MESSAGE FROM '.$_POST['absendername'];

$absenderemail = $_POST['absenderemail'];
$text = $_POST['nachricht']."\r\n\r\n".$_POST['subscribe_box'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response2'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Lc74uQZAAAAAJYNuqh8Iv-JLARL4BIryzP6ZgHo';
    $recaptcha_response2 = $_POST['recaptcha_response2'];

    $recaptcha2 = file_get_contents($recaptcha_url.'?secret='.$recaptcha_secret.'&response='.$recaptcha_response2);
    $recaptcha2 = json_decode($recaptcha2);

    if ($recaptcha2->score >= 0.5) { // BOTS GET LOW SCORE; READ ABOUT SCORE HERE: https://developers.google.com/recaptcha/docs/v3
        mail($empfaenger, $betreff, $text, "From: $absenderemail");
        echo "<span class='message-box'>Message sent successfully!</span>";
    } else {
        echo "<span class='message-box-error'>Something went wrong! Reload the page and try it again or contact me via Instagram: <a href='https://www.instagram.com/krispy.tunes' target='_blank'>@krispy.tunes</a></span>";
    }
}

?>