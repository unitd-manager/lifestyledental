<a href="" class="btn btn-pink gradient-form-toggle-btn d-lg-none">Request consultation</a>

<form accept-charset="UTF-8" action="#" class="infusion-form gradient-form" id="inf_form_9b2b1c25765aa6b49b9854c854cb3fa9" method="POST">
    <input name="inf_form_xid" value="9b2b1c25765aa6b49b9854c854cb3fa9" type="hidden">
    <input name="inf_form_name" value="Home Page Form" type="hidden">
    <input name="infusionsoft_version" value="1.68.0.110" type="hidden">
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
                <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" placeholder="Email *" type="email" required>
            </div>
            <div class="infusion-field field-row">
                <label for="inf_field_Phone1" class="d-none">Phone *</label>
                <input class="infusion-field-input-container" id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Phone *" required>
            </div>

            <hr>

            <div class="infusion-field field-row">
                <label style="width: auto;" for="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer">
                    <input style="width: 15px; height: 15px;" id="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer" name="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer" type="checkbox" value="1397" /> Yes, I would like to be kept up-to-date with future treatments/offers that Lifestyle Dental may offer
                </label>
            </div>
            <input name="inf_custom_GaSource" value="null" type="hidden">
            <input name="_GaReferurl" value="null" type="hidden">
            <input name="_GaTerm" value="null" type="hidden">
            <input name="_GaMedium" value="null" type="hidden">
            <input name="_GaContent" value="null" type="hidden">
        <!--     <script src="http://lifestyledental.co.uk/wp-content/cache/abtf/proxy/7b/08/eb/7b08eb0e618cd0825a3fd48cde9a1dd8.js" type="text/javascript"></script> -->
            <input name="_GaCampaign" value="null" type="hidden">
            <div class="infusion-submit">
                <button class="infusion-recaptcha ffieldsubmit" id="recaptcha_9b2b1c25765aa6b49b9854c854cb3fa9" type="submit">Arrange My Consultation</button>
            </div>

        </div>
    </div>
</form>

<?php if (isset($_GET['dev'])): ?>

<script type="text/javascript" src="https://lifestyledental.infusionsoft.com/app/webTracking/getTrackingCode"></script>
<script type="text/javascript" src="https://lifestyledental.infusionsoft.com/resources/external/recaptcha/production/recaptcha.js?b=1.69.0.18-hf-201801091701"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadInfusionRecaptchaCallback&render=explicit" async="async" defer="defer"></script>
<script type="text/javascript" src="https://lifestyledental.infusionsoft.com/app/timezone/timezoneInputJs?xid=9b2b1c25765aa6b49b9854c854cb3fa9"></script>

<?php endif ?>

<script>
    <?php if (!isset($_GET['dev'])): ?>
    var form = document.querySelector(".infusion-form.consultation-form");
    form.addEventListener("submit", function(e){

        if (document.getElementById('sirname').value == "") {

            dataLayer.push({
                'event': 'form-submission',
                'form_name': 'hero-form',
                'form_path': window.location.pathname
            });
            
            document.getElementById('inf_form_9b2b1c25765aa6b49b9854c854cb3fa9').action = 'https://lifestyledental.infusionsoft.com/app/form/process/9b2b1c25765aa6b49b9854c854cb3fa9';
        }
        
    });
    <?php else: ?>
    var form = document.querySelector(".infusion-form.consultation-form");
    form.addEventListener("submit", function(e){
        console.log("Submitted");
    });
    <?php endif ?>
</script>