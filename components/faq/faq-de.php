<h1 id="FAQ"><a href="#Instrumental-Store"><img src="img/up.svg" alt="&and;" loading="lazy"/></a> FAQ</h1>
<hr>
<section id="faqs">
    <h2 class="margin">Vielleicht gibt es schon Antworten auf deine Fragen...</h2>
    <dl class=".faq-accordion">
        <dt class="accordion-title"><a href="#" class="closed">Was bekomme ich bei einem Kauf?</a></dt>
        <dd class="accordion-content">Du bekommst die Lizenzvereinbarung die du ausgew&auml;hlt hast im PDF-Format, die Zahlungsdetails und den Beat ohne Audio-Kennzeichnung als WAV- und MP3-Datei in Form eines Downloadlinks zugesendet. Bitte vergesse nicht, auch in deinem Spamordner nachzusehen. Die WAV-Lizenz beinhaltet den Beat im WAV-Format und MP3-Format. Die PREMIUM-, UNLIMITED- und die EXCLUSIVE-Lizenz beinhalten auch die einzelnen Beatspuren f&uuml;r ein professionelles Mixing.</dd>

        <dt class="accordion-title"><a href="#" class="closed">Bei welcher Lizenzwahl werden mir die Beatspuren zugesendet?</a></dt>
        <dd class="accordion-content">Die PREMIUM-, UNLIMITED- und die EXCLUSIVE-LIZENZ versichern dir die Beatspuren. Du wirst eine passwortgeschützte ZIP-Datei und das Passwort sofort nach dem Kauf zugesendet bekommen.</dd>

        <dt class="accordion-title"><a href="#" class="closed">Wie funktioniert das mit der Erw&auml;hnung?</a></dt>
        <dd class="accordion-content"> In geschriebener Form muss, "prod. by krispytunes", im Songtitel stehen. Das selbe gilt f&uuml;r gedruckte Medien wie CDs, Booklets und Covers. Auch bei Ver&ouml;ffentlichungen der g&auml;ngigen Streaming-Dienste wie Spotify, Youtube, Soundcloud etc. musst du mich erw&auml;hnen.</dd>

        <dt class="accordion-title"><a href="#" class="closed">Muss ich nach dem Ablauf des Leasingvertrages erneut Geb&uuml;hren bezahlen?</a></dt>
        <dd class="accordion-content">Au&szlig;er der EXCLUSIVE-Lizenz haben alle Lizenzen eine Leasingdauer von 3 Jahren ab dem Kaufdatum. Wenn du deine Lizenz nach diesen 3 Jahren verl&auml;ngern willst, musst du f&uuml;r die Verl&auml;ngerung deiner Lizenz bezahlen. F&uuml;r die n&auml;chsten 3 Jahre ist das der gleiche Betrag, den du bei deinem Kauf gezahlt hast. Um Leasinggebühren zu vermeiden, kannst du zur EXCLUSIVE-Lizenz wechseln. Bei einem Wechsel zur EXCLUSIVE-Lizenz, werde ich dir den bereits gezahlten Beitrag / die bereits gezahlten Beiträge aufrechnen. Falls die keine exklusiven Rechte willst, kannst du den Leasingvertrag fristgerecht nach deutschem Recht (3 Monate vor Ablauf des Leasingvertrages) kündigen.</dd>

        <dt class="accordion-title"><a href="#" class="closed">Bietest du andere Zahlungsm&ouml;glichkeiten au&szlig;er Paypal und der Kreditkarte an?</a></dt>
        <dd class="accordion-content">Ja! Ich akzeptiere auch &Uuml;berweisungen. Du wirst dann eine Rechnung mit den Zahlungsdetails erhalten. Sobald deine Zahlung auf meinem Konto angekommen ist bekommst du deine Beats/deinen Beat und die Lizenzen/Lizenz via E-Mail mit einem Downloadlink zugesendet. Bitte habe Geduld! Diese Methode nimmt Zeit in Anspruch. Du bekommst die Beats/den Beat sobald deine Zahlung angekommen ist.</dd>

        <dt class="accordion-title"><a href="#" class="closed">Ich habe die WAV-Lizenz eingekauft, kann ich auch zu einer anderen h&ouml;heren Leasingform wechseln?</a></dt>
        <dd class="accordion-content">Kontaktiere mich bitte per E-Mail. Ich werde dir dann den bereits bezahlten Betrag von der alten Lizenz gutschreiben, sodass nur noch ein Restbetrag der neuen Lizenz f&auml;llig wird.</dd>

        <dt class="accordion-title"><a href="#" class="closed">Darf ich einen Song der auf einem deiner Freebeats aufgenommen wurde, auf Spotify ver&ouml;ffentlichen?</a></dt>
        <dd class="accordion-content"><b>Manche</b> der Freebeats beinhalten Samples von anderen Musikern. Du solltest diese Samples (falls welche vorhanden sein sollten) kl&auml;ren. Generell musst du bei mir eine passende Lizenz erweben, sofern du einen Song auf meinen Beats monetarisieren willst.</dd>
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