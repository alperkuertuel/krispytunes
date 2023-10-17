<p id="form-contact"></p> <!-- Message to inform, if it was submitted -->
    <div id="contable">
        <form id="contacted" method="post">     
            <div>
                <label for="absendernameid"></label>
                <input type="text" name="absendername" id="absendernameid" placeholder="Name" autocomplete="off" maxlength="30" size="35" required>
            </div>
            <div>
                <label for="absenderemailid"></label>
                <input type="email" name="absenderemail" id="absenderemailid" placeholder="E-Mail" autocomplete="off" maxlength="40" size="35" required>
            </div>
            <div>
                <label for="nachrichtid"></label>
                <textarea rows="10" cols="35" name="nachricht" id="nachrichtid" placeholder="Nachricht" required></textarea>
            </div>
            <div class="news">
                <input type="checkbox" value="THIS CONTACT SUBSCRIBED" name="subscribe_box" id="subscribe_box">
                <label for="subscribe_box">Ja, ich will auch &uuml;ber Updates informiert werden!</label>
            </div>
            <div id="policy">
                <input type="checkbox" name="dsgvo" id="dsgvo" required>
                <label for="dsgvo">Hast du dir die <a href="privacy-policy" target="_blank">Datenschutzrichtlinie</a> durchgelesen?</label>
            </div>
            <div class="space">
                <input type="hidden" name="recaptcha_response2" id="recaptchaResponse2">
                <input class="button" id="submit_contact" type="submit" value="SENDEN">
            </div>
        </form>
        <script>
            $(document).ready(function () {
                $("#contacted").submit(function (event2) {
                    event2.preventDefault()
                    var absendername = document.getElementById("absendernameid").value
                    var absenderemail = document.getElementById("absenderemailid").value
                    var nachricht = document.getElementById("nachrichtid").value
                    var subscribe_box = document.getElementById("subscribe_box").value
                    var dsgvo = document.getElementById("dsgvo").value
                    var recaptcha_response2 = document.getElementById("recaptchaResponse2").value
                    $.post("contact_form-de.php",{
                            absendername: absendername,
                            nachricht: nachricht,
                            absenderemail: absenderemail,
                            subscribe_box: subscribe_box,
                            dsgvo: dsgvo,
                            recaptcha_response2: recaptcha_response2,},
                        function(data2){
                            $("#absendernameid").val("");
                            $("#absenderemailid").val("");
                            $("#nachrichtid").val("");
                            $("#subscribe_box").prop("checked", false);
                            $("#dsgvo").prop("checked", false);
                            $("#recaptchaResponse2").val("");
                            $("#form-contact").html(data2);
                            //Hide form after submitting.
                            $('#contable').css('display', 'none');
                        })
                })
            })
        </script>
    </div>
