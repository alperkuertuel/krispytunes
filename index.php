<!doctype html>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<?php include './modules/head/head.php'; ?>
	<body>
        <?php include './modules/header/header.php'; ?>
        <main class="main">
            <?php include './modules/store/store.php'; ?>
            <?php include './modules/clients/clients.php'; ?>
            <?php include './modules/license-terms/license-terms.php'; ?>
            <?php include './modules/services/services.php'; ?>
            <?php include './modules/freebeats/freebeats.php'; ?>
            <?php /* include '/modules/faq/faq.php'; */ ?>
            <!--googleoff: snippet-->
            <?php include './modules/contact/contact.php'; ?>
            <article class="cookie-container">
                <p>
                    I use cookies on my website. By using my website, I'll assume you consent to the <a href="privacy-policy" target="_blank">privacy-policy</a>.
                </p>
                <p class="cookie-container__recaptcha-text">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
                <button class="cookie-container__button">OK, CONTINUE</button>
            </article>
        </main>
        <?php include './modules/footer/footer.php'; ?>
    </body>
</html>