<a href="" class="btn btn-pink gradient-form-toggle-btn d-lg-none">Request consultation</a>

<form accept-charset="UTF-8" action="#" class="infusion-form gradient-form" method="POST" id="veneers-form">
    <input name="inf_form_xid" value="d096264d27d0ea3139f12d5e3ec7e105" type="hidden">
    <input name="inf_form_name" value="Veneers Page Inquiry" type="hidden">
    <input name="infusionsoft_version" value="1.31.0.38" type="hidden">
    <input type="text" id="sirname" name="sirname" class="d-none">

    <h3 class="h4 plain inverted text-center mt-0">Request your complimentary consultation and visit</h3>

    <p class="inverted text-center">
        We invite you to visit our practice to take a look around and see if we are the right practice for you.
    </p>

            <div class="row">

                <div class="col-sm-6 col-lg-12">

                    <div class="infusion-field field-row">
                        <label for="inf_field_FirstName" class="d-none">First Name *</label>
                        <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="First Name *" type="text" required>
                    </div>
                    <div class="infusion-field field-row">
                        <label for="inf_field_LastName" class="d-none">Last Name *</label>
                        <input class="infusion-field-input-container" id="inf_field_LastName" name="inf_field_LastName" placeholder="Last Name *" type="text" required>
                    </div>

                </div>

                <div class="col-sm-6 col-lg-12">

                    <div class="infusion-field field-row">
                        <label for="inf_field_Email" class="d-none">Email *</label>
                        <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" placeholder="Email *" type="text" required>
                    </div>
                    <div class="infusion-field field-row">
                        <label for="inf_field_Phone1" class="d-none">Phone *</label>
                        <input class="infusion-field-input-container" id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Phone *" type="text" required>
                    </div>
                     <hr>
                    <div class="infusion-field field-row"> <span class="infusion-option"> 
                    <label style="width: auto;" for="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer">
                        <input style="width: 15px; height:15px;" id="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer" name="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer" type="checkbox" value="1409" /> Yes, I would like to be kept up-to-date with future treatments/offers that Lifestyle Dental may offer</label> </span> </div>
                    <input name="inf_custom_GaSource" value="null" type="hidden">
                    <input name="_GaReferurl" value="null" type="hidden">
                    <input name="_GaTerm" value="null" type="hidden">
                    <input name="_GaMedium" value="null" type="hidden">
                    <input name="_GaContent" value="null" type="hidden">
                <!--     <script src="//www.lifestyledental.co.uk/wp-content/cache/abtf/proxy/7b/08/eb/7b08eb0e618cd0825a3fd48cde9a1dd8.js" type="text/javascript"></script> -->
            <input name="_GaCampaign" value="null" type="hidden">
            <div class="infusion-submit">
            <a href="https://www.lifestyledental.co.uk/digital-privacy-policy/">Privacy Policy</a>
                <button class="infusion-recaptcha ffieldsubmit" id="recaptcha_9b2b1c25765aa6b49b9854c854cb3fa9" type="submit">Arrange My Consultation</button>
            </div>

        </div>
    </div>
</form>

<script>
    var veneersForm = document.querySelector("form#veneers-form");
    veneersForm.addEventListener("submit", function(e){
        e.preventDefault();

        if (veneersForm.querySelector('#sirname').value == "") {
            grecaptcha.ready(function() {
                grecaptcha.execute('6LfLgnIcAAAAAIcmAGVwRtd52GZAUjTKMsQBwCPC', {action: 'submit'}).then(function(token) {
                    sendToTheGoogleGodToVerify(token).then(function(result){
                        if (result.success){
                            dataLayer.push({
                                'event': 'form-submission',
                                'form_name': 'hero-form',
                                'form_path': window.location.pathname
                            });
                            
                            veneersForm.action = 'https://lifestyledental.infusionsoft.com/app/form/process/d096264d27d0ea3139f12d5e3ec7e105';

                            veneersForm.submit();
                        }
                    });
                });
            });
        }
    });
</script>