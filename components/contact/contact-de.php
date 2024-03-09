<section id="Contact" class="contact seperator">
    <h1>
        <a href="#Instrumental-Store" aria-label="Scrolle nach oben zum Instrumental-Store.">
            <i class="fa-solid fa-angle-up" aria-label="Scrolle nach oben."></i>
        </a>
        KONTAKT
    </h1>
    <p data-js="contact-response-message">
        <!-- response message after submission -->
    </p> 
    <div data-js="contact-form-container" class="contact__form-container">
        <form data-js="contact-form" method="post" class="contact__form-container__form">
            <div class="form-item">
                <input type="text" name="contact-name" id="contact-name" autocomplete="on" maxlength="30" size="35" required>
                <label for="contact-name">Name</label>
            </div>

            <div class="form-item">
                <input type="email" name="contact-email" id="contact-email" placeholder="" autocomplete="on" maxlength="40" size="35" required>
                <label for="contact-email">E-Mail</label>
            </div>

            <label for="contact-message"></label>
            <textarea rows="10" cols="35" name="contact-message" id="contact-message" required></textarea>

            <label for="contact-subscriber">
                <input type="checkbox" value="Dieser Kontakt hat dich abonniert." name="contact-subscriber" id="contact-subscriber">
                Ich will einen Newsletter und Rabattcodes erhalten.
            </label>

            <label for="dsgvo">
                <input type="checkbox" name="dsgvo" id="dsgvo" required>
                Ich habe die <a href="privacy-policy" target="_blank">Datenschutz- bestimmungen</a> durchgelesen.
            </label>

            <input type="hidden" name="recaptcha-response-contact-form" id="recaptcha-response-contact-form">
            <button type="submit">SENDEN</button>
        </form>
    </div>
</section>
