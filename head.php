<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#2f3640" />
    <meta name="robots" content="all" />
	<title>krispytunes - INSTRUMENTAL STORE</title>
	<meta name="description" content="Instrumentals For Sale | Freebeats | Custom Instrumentals | Beats For Commercial Videos" />
	<meta name='keywords' content="krispytunes, kirpsytunes.com, instrumental, freebeats, free instrumentals, free instrumentals download, freebeats download, beats without voicetag" />
	<meta name="author" content="krispytunes" />
	<meta name="copyright" content="krispytunes">
	<meta name='Classification' content='Business' />
    <meta property="og:image" content="img/logo.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">

    <!-- my custom script for dom-manipulation -->
    <script src="index.js" defer></script>

    <!-- stylesheet -->
    <link href="global.css" rel="stylesheet" media="screen" type="text/css">
    <link type="image/ico" rel="icon" href="./favicons/favicon.ico">
    <link rel="apple-touch-icon" href="./favicons/apple-touch-icon.png">

    <!-- airbit -->
    <script defer>
    function loadAirbitPlayer() {
        const iframe = document.createElement("iframe");
        const store = document.querySelector('[data-js="store"]');
        iframe.src = "https://airbit.com/widgets/html5/?uid=197830&config=796900";
        iframe.title = "Instrumental Store";
        iframe.classList.add("store__player", "store__player-skeleton");
        store.appendChild(iframe);
    }
    </script>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/d5eb725262.js" crossorigin="anonymous" defer></script>

    <!-- google: recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lc74uQZAAAAALiJPavxE5e2X5iTltduKn-mYYCo"></script>
    <script defer>
        document.addEventListener("DOMContentLoaded", function () {
            const freebeatsTokenInput = document.getElementById('recaptcha-response-freebeats');
            const contactTokenInput = document.getElementById('recaptcha-response-contact-form');
            grecaptcha.ready(function () {
                grecaptcha.execute('6Lc74uQZAAAAALiJPavxE5e2X5iTltduKn-mYYCo', { action: 'submit' }).then(function (freebeatsToken) {
                    if (freebeatsToken) {
                        freebeatsTokenInput.value = freebeatsToken;
                        // console.log("Freebeats reCAPTCHA Token", freebeatsToken);
                            
                        grecaptcha.execute('6Lc74uQZAAAAALiJPavxE5e2X5iTltduKn-mYYCo', { action: 'submit' }).then(function (contactToken) {
                            if (contactToken) {
                                contactTokenInput.value = contactToken;
                                // console.log("Contact Form reCAPTCHA Token", contactToken);
                            } else {
                                console.error('contact form reCAPTCHA token is null or undefined.');
                            }
                        });
                    } else {
                        console.error('freebeats request reCAPTCHA token is null or undefined.');
                    }
                });
            });
        });
    </script>

    <!-- flickity: slideshow -->
    <link rel="stylesheet" href="./modules/flickity-slideshow/flickity.min.css">
    <script src="./modules/flickity-slideshow/flickity.pkgd.min.js" defer></script>

    <!-- google: tag-manager -->
    <script src="https://www.googletagmanager.com/gtag/js?id=G-3DRE0P6CM3" defer></script>
    <script defer>
        if (localStorage.getItem("cookiesAreAccepted") === "true") {
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-3DRE0P6CM3');
        }
    </script>
</head>
