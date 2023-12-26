<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#2f3640" />
    <meta name="robots" content="all" />
	<title>krispytunes - INSTRUMENTAL STORE</title>
	<meta name="description" content="Instrumentals For Sale | Freebeats | Custom Instrumentals | Beats For Commercial Videos" />
	<meta name="page-topic" content="QUALITY INSTRUMENTALS FOR SALE | INSTANT DELIVERY | FREE DOWNLOAD INSTRUMENTALS WITHOUT VOICE TAG" />
	<meta name='keywords' content="krispytunes, kirpsytunes.com, instrumental, freebeats, free instrumentals, free instrumentals download, freebeats download, beats without voicetag" />
	<meta name="author" content="krispytunes" />
	<meta name="copyright" content="krispytunes">
	<meta name='Classification' content='Business' />
    <meta property="og:image" content="img/logo.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">

    <!-- airbit -->
    <script async>
        function loadAirbitPlayer() {
            const iframe = document.createElement("iframe");
            const store = document.querySelector('[data-js="store"]');
            iframe.src = "https://krispytunes.infinity.airbit.com?config_id=11468&embed=1";
            iframe.title = "Instrumental Store";
            iframe.classList.add("store__player");
            store.appendChild(iframe);
        }
    </script>

    <!-- stylesheet -->
    <link href="stylesheet_v12.css" rel="stylesheet" media="screen" type="text/css">
    <link type="image/ico" rel="icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- google: reCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lc74uQZAAAAALiJPavxE5e2X5iTltduKn-mYYCo" async></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            grecaptcha.ready(function() {
                grecaptcha.execute('6Lc74uQZAAAAALiJPavxE5e2X5iTltduKn-mYYCo', { action: 'submit' }).then(function(token) {
                    if (token) {
                        document.getElementById('recaptchaResponse').value = token;
                        console.log("recaptcha1", document.getElementById('recaptchaResponse').value);
                    } else {
                        console.error('ReCAPTCHA token is null or undefined.');
                    }
                });

                grecaptcha.execute('6Lc74uQZAAAAALiJPavxE5e2X5iTltduKn-mYYCo', { action: 'submit' }).then(function(token) {
                    if (token) {
                        document.getElementById('recaptchaResponse2').value = token;
                        console.log("recaptcha2", document.getElementById('recaptchaResponse2').value);
                    } else {
                        console.error('Second ReCAPTCHA token is null or undefined.');
                    }
                });
            });
        });
    </script>

    <!-- jQuery -->
    <script src="jquery-3.5.0.min.js"></script>

    <!-- flickity: slideshow -->
    <link rel="stylesheet" href="./modules/flickity-slideshow/flickity.min.css">
    <script src="./modules/flickity-slideshow/flickity.pkgd.min.js" defer></script>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/d5eb725262.js" crossorigin="anonymous" defer></script>

    <!-- google: Tag-Manager -->
    <script src="https://www.googletagmanager.com/gtag/js?id=G-3DRE0P6CM3" defer></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-3DRE0P6CM3');
    </script>

    <!-- custom script for dom-manipulation -->
    <script src="index.js" defer></script>
</head>