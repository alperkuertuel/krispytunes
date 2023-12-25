<p data-js="response-message"></p>
<div data-js="form-container">
    <form data-js="request-form" method="post" class="freebeats__request-form">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" autocomplete="on" maxlength="30" size="25" required>
         
        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email" autocomplete="on" maxlength="40" size="25" required>

        <label for="freebeats-subscriber">
            <input type="checkbox" value="Dieser Kontakt hat dich abonniert." name="freebeats-subscriber" id="freebeats-subscriber" class="subscribe_box">
            Ja, ich will auch &uuml;ber Updates informiert werden!
        </label>
        
        <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
        <button type="submit">ANFRAGEN</button>
    </form>
</div>
