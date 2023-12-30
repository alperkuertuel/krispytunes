<section id="Contact" class="contact">
    <h1>
        <a href="#Instrumental-Store">
            <i class="fa-solid fa-angle-up" aria-label="Scroll to Top"></i>
        </a>
        CONTACT
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
                <input type="checkbox" value="This contact subscribed." name="contact-subscriber" id="contact-subscriber">    
                I subscribe for discounts and updates.
            </label>

            <label for="dsgvo">
                <input type="checkbox" name="dsgvo" id="dsgvo" required>
                I read the <a href="privacy-policy" target="_blank">privacy policy.</a>
            </label>

            <input type="hidden" name="recaptcha-response-contact-form" id="recaptcha-response-contact-form">
            <button type="submit">SEND</button>
        </form>
    </div>
</section>
