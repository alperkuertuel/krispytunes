<footer class="footer">
    <a href="#Instrumental-Store">
        <i class="fa-solid fa-angle-up footer__up-button" aria-label="Scroll to Top"></i>
    </a>
    <ul>
        <li><a href="imprint" target="_blank">Imprint</a></li>
        <li><a href="imprint" target="_blank">Terms &amp; Conditions</a></li>
        <li><a href="privacy-policy" target="_blank">Privacy Policy</a></li>
	</ul>
    <ul>
        <li><a href="whatsapp://send?text=Listen%20to%20the%20instrumentals%20I%20found%20here%3A%20https%3A%2F%2Fkrispytunes.com">Share on WhatsApp</a></li>
        <li><a href="whatsapp://send?text=Listen%20to%20the%20instrumentals%20I%20found%20here%3A%20https%3A%2F%2Fkrispytunes.com"><img src="img/whatsapp.svg" alt="WhatsApp" loading="lazy"/></a></li>
    </ul>
    <ul>
        <li><a href="https://www.instagram.com/krispy.tunes" target="_blank" rel="noopener"><img src="img/instagram.svg" alt="Instagram" loading="lazy"/></a></li>
        <li><a href="https://www.youtube.com/krispytunes" target="_blank" rel="noopener"><img src="img/youtube.svg" alt="Youtube" loading="lazy"/></a></li>
        <li><a href="https://www.facebook.com/krispytunes" target="_blank" rel="noopener"><img src="img/facebook.svg" alt="Facebook" loading="lazy"/></a></li>
    </ul>
</footer>
<script src ="index.js"></script>
<script>



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
