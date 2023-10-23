<?php


$empfaenger = 'contact@krispytunes.com';
$betreff = 'NEW DOWNLOAD REQUEST';
$header = $_POST['absenderemail'];
$text = $_POST['absendername'] . "\r\n" . $_POST['artistpage'] . "\r\n" . $_POST['absenderemail'] . "\r\n\r\n" . $_POST['subscriber_box'];


/* foreach ($_POST as $key => $value) {
    echo 'key: '.$key.' value: '.$value.'<br />';
}
*/


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Lc74uQZAAAAAJYNuqh8Iv-JLARL4BIryzP6ZgHo';
    $recaptcha_response = $_POST['recaptcha_response'];

    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    /* foreach ($recaptcha as $key => $value) {
              echo 'object: '.$key.' value: '.$value.'<br />';
          }
    */

    if ($recaptcha->score >= 0.5) { // BOTS GET LOW SCORE; READ ABOUT SCORE HERE: https://developers.google.com/recaptcha/docs/v3
        mail($empfaenger, $betreff, $text, "From: $header");
        echo "<span class='message-box'>Deine Anfrage wurde versendet! Bitte gedulde dich, du wirst deine pers&ouml;nliche E-Mail bekommen!</span>";
    }
    else {
        echo "<span class='message-box-error'>Es ist etwas schief gelaufen! Lade die Seite erneut oder schreibe mir über Instagram: <a href='https://www.instagram.com/krispy.tunes' target='_blank'>@krispy.tunes</a></span>";
    }
}

?>
