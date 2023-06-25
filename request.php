<p id="form-message"></p> <!-- Message to inform, if it was submitted -->

<div id="subscribe">
    <form id="captcha" method="post">

        <div>
            <label for="nameid"></label>
            <input type="text" name="absendername" id="nameid" placeholder="name" autocomplete="off" maxlength="30" size="25" required>
        </div>

        <div>
            <label for="artistpage"></label>
            <input type="text" name="artistpage" id="artistpage" placeholder="Instagram or Facebook" autocomplete="off" maxlength="30" size="25" required>
        </div>

        <div>
            <label for="emailid"></label>
            <input type="email" name="absenderemail" id="emailid" placeholder="e-mail" autocomplete="off" maxlength="40" size="25" required>
        </div>

        <div class="news">
            <input type="checkbox" value="THIS CONTACT SUBSCRIBED" name="subscriber_box" id="subscriber" class="subscribe_box"><label for="subscriber">Yes, I also want to subscribe for discounts and updates!</label>
        </div>

        <div class="space">
            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            <input class="button" type="submit" name="submit_req" id="submit_req" value="REQUEST">
        </div>
    </form>

    <script>
        $(document).ready(function () {
            $("#captcha").submit(function (event) {
                event.preventDefault()
                var absendername = document.getElementById("nameid").value
                var artistpage = document.getElementById("artistpage").value
                var absenderemail = document.getElementById("emailid").value
                var subscriber_box = document.getElementById("subscriber").value
                var recaptcha_response = document.getElementById("recaptchaResponse").value

                $.post("req_free.php",{
                        absendername: absendername,
                        artistpage: artistpage,
                        absenderemail: absenderemail,
                        subscriber_box: subscriber_box,
                        recaptcha_response: recaptcha_response,},
                    function(data){
                        // Clear the form fields here
                        $("#nameid").val("");
                        $("#artistpage").val("");
                        $("#emailid").val("");
                        $("#subscriber").prop("checked", false);
                        $("#recaptchaResponse").val("");
                        $("#form-message").html(data);

                        //Hide form after submitting.
                        $('#subscribe').css('display', 'none');
                    })
            })
        })
    </script>
</div>
