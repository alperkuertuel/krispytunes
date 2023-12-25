<p data-js="response-message"></p>
<div data-js="form-container">
    <form data-js="request-form" method="post" class="freebeats__request-form">
        <label for="name">name</label>
        <input type="text" name="name" id="name" autocomplete="on" maxlength="30" size="25" required>

        <label for="email">e-mail</label>
        <input type="email" name="email" id="email" autocomplete="on" maxlength="40" size="25" required>
        
        <label for="freebeats-subscriber">
            <input type="checkbox" value="This contact subscribed." name="freebeats-subscriber" id="freebeats-subscriber">
            Yes, I also want to subscribe for discounts and updates!    
        </label>
            
        <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
        <button type="submit">REQUEST</button>
    </form>
</div>
