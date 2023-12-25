<!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<?php include './head.php'; ?>
	<body>
        <?php include './components/header/header.php'; ?>
        <main class="main">
            <?php include './components/store/store.php'; ?>
            <?php include './components/clients/clients.php'; ?>
            <?php include './components/license-terms/license-terms.php'; ?>
            <?php include './components/services/services.php'; ?>
            <?php include './components/freebeats/freebeats.php'; ?>
            <?php /* include '/modules/faq/faq.php'; */ ?>
            <!--googleoff: snippet-->
            <?php include './components/contact/contact.php'; ?>
            <article class="cookie-container" data-js="cookie-container">
                <p>
                    I use cookies on my website. By using my website, I'll assume you consent to the <a href="privacy-policy" target="_blank">privacy-policy</a>.
                </p>
                <p class="cookie-container__recaptcha-text">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
                <button class="cookie-container__button" data-js="cookie-button">OK, CONTINUE</button>
            </article>
        </main>
        <?php include './components/footer/footer.php'; ?>
        <script src ="index.js"></script>
    </body>
</html>