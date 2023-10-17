<!doctype html>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<?php include 'head.php'; ?>
	<body>
        <nav class="shift">
            <!--googleoff: snippet-->
            <div id="flags">
                <a href="index"><img src="img/us.svg" alt="us"/></a>
                <a href="de"><img src="img/de.svg" alt="de"/></a>
            </div>
            <!--googleon: snippet-->
            <div class="container" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <ul class="showing">
                <li><a href="#header">INSTRUMENTAL STORE</a></li>
                <li><a href="#Licenses">LICENSE TERMS</a></li>
                <li><a href="#Services">SERVICES</a></li>
                <li><a href="#Freebeats">FREEBEATS</a></li>
                <li><a href="#Contact">CONTACT</a></li>
            </ul>
        </nav>
        <?php include 'header.php'; ?>
        <?php include 'store.php'; ?>
        <?php include 'clients.php'; ?>
        <?php include 'license-terms.php'; ?>
        <?php include 'services.php'; ?>
        <?php include 'freebeats.php'; ?>
        <?php /* include ("faq.php"); */ ?>
        <!--googleoff: snippet-->
        <?php include 'contact.php'; ?>
        <?php include 'footer.php'; ?>
        <div class="cookie-container">
            <p>
                I use cookies on my website. By using my website, I'll assume you consent to the <a href="privacy-policy" target="_blank">privacy-policy</a>.
                <br />
                <br />
                <span style="font-size: .8em;">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</span>
            </p>
            <button class="cookie-btn">OK, CONTINUE</button>
        </div>
    </body>
</html>