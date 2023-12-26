<h1 id="FAQ"><a href="#Instrumental-Store"><img src="img/up.svg" alt="&and;" loading="lazy"/></a> FAQ</h1>
<hr>
<section id="faqs">
    <h2 class="margin">Maybe there is already an answer for your question...</h2>
    <dl class=".faq-accordion">
        <dt class="accordion-title"><a href="#" class="closed">What does a purchase include?</a></dt>
        <dd class="accordion-content">Each purchase includes a license agreement/receipt stating your rights to the instrumentals, payment details, etc. and the untagged instrumental as a wav-file & mp3-file. Wav leasing rights include the stereo-mix of the instrumental(s) in wav-format & mp3-format. Premium, unlimited and exclusive rights also include the separated instrumental tracks of the instrumental(s) in wav-format (also known as ‘tracked outs’ or ‘stems’) for professional mixing. You will receive these files via download-links, sent to your e-mail address. Please check your spam folder if you do not find the purchasing e-mail in your inbox!</dd>

        <dt class="accordion-title"><a href="#" class="closed">Which licenses contain the stems / track outs of the instrumental?</a></dt>
        <dd class="accordion-content">The premium leasing license, the unlimited leasing license and the exclusive license contain the stems / track outs. You will receive a zip-file and a password to unpack.</dd>

        <dt class="accordion-title"><a href="#" class="closed">How do I give proper credit?</a></dt>
        <dd class="accordion-content">Proper credit is given as follows in written form: "prod. by krispytunes". Hard copies such as CDs, LPs, etc. need to include written credit in booklets, covers or labels. Streaming releases such as spotify, youtube, soundcloud etc. need to include written credit. Thank you for respecting me as an artist!</dd>

        <dt class="accordion-title"><a href="#" class="closed">Do I have to pay for the license again when the duration is over?</a></dt>
        <dd class="accordion-content">Except of the exclusive license all licenses have a duration of 3 years starting from the date you purchased the beat/s. If you want to prolong your license/s for some more years you have to pay an additional fee. For the next 3 years you have to pay the same amount of money you once paid. In order to avoid paying fees after the 3 years duration you can switch to an exclusive license or cancel the contract in terms of the german law (3 months before the ending of the leasing contract). When switching to the EXCLUSIVE License, I'm going to deduct the amount of money you already paid for the leasing.</dd>

        <dt class="accordion-title"><a href="#" class="closed">Do you offer other payment methods then paypal or master/debit card?</a></dt>
        <dd class="accordion-content">YES! I also accept payments from any bank. You are going to receive a bill (pdf-file) per e-mail with all the information you need. After you paid you are going to receive the instrumental(s) and rights via direct link download. Please understand that this procedure needs time and that I do not send you instrumental(s) until the payment has been arrived.</dd>

        <dt class="accordion-title"><a href="#" class="closed">I own a wav leasing license. Can I upgrade my license to a higher license?</a></dt>
        <dd class="accordion-content">Please contact me via email, as for license upgrades, I will credit the amount you have already paid, and deduct it from the price for the desired license.</dd>

        <dt class="accordion-title"><a href="#" class="closed">Can I release a song made on your freebeat on Spotify?</a></dt>
        <dd class="accordion-content">Some of the freebeats contain samples, you have to clear the sample first, before you can monetize the song. If you plan a profit-release (if necessary: after clearing the sample) you have to purchase a suiting license.</dd>
    </dl>
    <script>
        $(document).ready(function(){
            $('.accordion-title').click(function(event) {
                event.preventDefault();
                $(this).toggleClass('open');
                $accordion_title = $(this);
                $accordion_content = $(this).next('.accordion-content');
                $('.accordion-content').not($accordion_content).slideUp();
                $('.accordion-content').not($accordion_content).prev('.accordion-title').removeClass('open');
                $accordion_content.stop(true, true).slideToggle(400);
                if ($(this).hasClass('open')) {
                    ScrollToTop();
                }
            });
        });
        function ScrollToTop() {
            setTimeout(function() {
                $('html, body').animate({
                    scrollTop: $($accordion_title).offset().top - 70
                }, 600);
            }, 600);
        }
    </script>
</section>