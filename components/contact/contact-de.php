<section id="Contact" class="contact">
    <h1>
        <a href="#Instrumental-Store">
            <i class="fa-solid fa-angle-up" aria-label="Scrolle nach oben."></i>
        </a>
        KONTAKT
    </h1>
    <p data-js="contact-response-message">
        <!-- response message after submission -->
    </p> 
    <div data-js="contact-form-container">
        <form data-js="contact-form" method="post">
            <label for="contact-name"></label>
            <input type="text" name="contact-name" id="contact-name" autocomplete="on" maxlength="30" size="35" required>

            <label for="contact-email"></label>
            <input type="email" name="contact-email" id="contact-email" autocomplete="on" maxlength="40" size="35" required>

            <label for="contact-message"></label>
            <textarea rows="10" cols="35" name="contact-message" id="contact-message" required></textarea>

            <label for="contact-subscriber">
                <input type="checkbox" value="Dieser Kontakt hat dich abonniert." name="contact-subscriber" id="contact-subscriber">
                Ja, ich will auch &uuml;ber Updates informiert werden!
            </label>

            <input type="checkbox" name="dsgvo" id="dsgvo" required>
            <label for="dsgvo">Hast du dir die <a href="privacy-policy" target="_blank">Datenschutzbestimmungen</a> durchgelesen?</label>

            <input type="hidden" name="recaptchaResponse2" id="recaptchaResponse2">
            <button type="submit">SENDEN</button>
        </form>
    </div>
</section>
