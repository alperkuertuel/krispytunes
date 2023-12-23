<footer>
    <div>
        <a href="#Instrumental-Store">
            <i class="fa-solid fa-angle-up" aria-label="Scrolle nach oben."></i>
        </a>
    </div>
	<div id="dfooter1">
        <ul>
            <li><a href="imprint-de" target="_blank">Impressum</a></li>
            <li><a href="imprint-de" target="_blank">AGBs</a></li>
            <li><a href="privacy-policy-de" target="_blank">Datenschutzrichtlinie</a></li>
		</ul>
    </div>
    <div id="dfooter2">
        <ul>
            <li><a href="whatsapp://send?text=Listen%20to%20the%20instrumentals%20I%20found%20here%3A%20https%3A%2F%2Fkrispytunes.com">Auf WhatsApp teilen</a></li>
            <li><a href="whatsapp://send?text=Listen%20to%20the%20instrumentals%20I%20found%20here%3A%20https%3A%2F%2Fkrispytunes.com"><img src="img/whatsapp.svg" alt="WhatsApp" loading="lazy"/></a></li>
        </ul>
    </div>
    <div id="dfooter3">
        <ul>
            <li><a href="https://www.instagram.com/krispy.tunes" target="_blank" rel="noopener"><img src="img/instagram.svg" alt="Instagram" loading="lazy"/></a></li>
            <li><a href="https://www.youtube.com/krispytunes" target="_blank" rel="noopener"><img src="img/youtube.svg" alt="Youtube" loading="lazy"/></a></li>
            <li><a href="https://www.facebook.com/krispytunes" target="_blank" rel="noopener"><img src="img/facebook.svg" alt="Facebook" loading="lazy"/></a></li>
        </ul>    
    </div>
</footer>
<script>
    $(document).ready(function() {
        const cookieContainer = document.querySelector(".cookie-container");
        const cookieButton = document.querySelector(".cookie-btn");

        cookieButton.addEventListener("click", () => {
        cookieContainer.classList.remove("active");
        localStorage.setItem("cookieBannerDisplayed", "true");
    });
        setTimeout(() => {
            if (!localStorage.getItem("cookieBannerDisplayed")) {
            cookieContainer.classList.add("active");
        }
    }, 2000);

        $(window).on('resize', function() {
            if ($(window).width() <= 1023 ) {
                $('.nav').hide();
            }   else {
                $('.nav').show();
            }
        }).trigger("resize");

        $('.menue-bar-container').on('click', function() {
            $('nav ul').slideToggle('slow');
        });

    });

    function toggleMenueBars(event) {
        event.classList.toggle("toggle");
    }

    $('a[href*="#"]').on('click', function(e) {
        e.preventDefault()
            if ($(window).width() <= 1023 ) {
                $('.nav').hide();
            }   else {
                $('.nav').show();
            }
        $('html, body').animate(
            {
                scrollTop: $($(this).attr('href')).offset().top - 30

            },
            400,
            'linear'
        )
    })
</script>
