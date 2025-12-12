<style>
    .page-builder-hero-form input {
        width: 100%;
        margin-bottom: 16px;
        background: #E55425;
        color: #fff;
        border: none;
        border-bottom: 2px #fff solid;
        padding-bottom: 4px;
        outline: none;
        padding-left: 30px;
    }

    .page-builder-hero-form input::placeholder {
        color: #fff;
        font-weight: 100;
    }

    .page-builder-hero-form .input-label {
        position: absolute;
    }

    .page-builder-hero-form .checkbox-label {
        margin-left: 30px;
        text-indent: -30px;
        margin-bottom: 20px;
        line-height: 1;
        font-weight: 100;
    }

    .page-builder-hero-form input[type=checkbox] {
        margin-right: 10px;
    }

    .page-builder-hero-form button {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 50px;
        background-color: #fff;
        transition: all 0.2s ease;
    }

    .page-builder-hero-form button:hover {
        background-color: #FFE7E9;
    }
</style>

<form accept-charset="UTF-8" action="#" class="infusion-form page-builder-hero-form" id="inf_form_9b2b1c25765aa6b49b9854c854cb3fa9" method="POST">
    <input name="inf_form_xid" value="9b2b1c25765aa6b49b9854c854cb3fa9" type="hidden">
    <input name="inf_form_name" value="Home Page Form" type="hidden">
    <input name="infusionsoft_version" value="1.68.0.110" type="hidden">
    <input type="text" id="sirname" name="sirname" class="d-none">
    <input type="hidden" name="verify-submission">

    <p class="mb-0">
        <em>Take the first step to restore your smile</em>
    </p>

    <h3 class="text-white mb-4">
        Book your free consultation
    </h3>

    <div class="row">

        <div class="col-sm-12">

            <div class="infusion-field field-row">
                <label for="inf_field_FirstName" class="input-label"><i class="far fa-user"></i></label>
                <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="First Name *" type="text" required>
            </div>
            <div class="infusion-field field-row">
                <label for="inf_field_LastName" class="input-label"><i class="far fa-user"></i></label>
                <input class="infusion-field-input-container" id="inf_field_LastName" name="inf_field_LastName" placeholder="Last Name *" type="text" required>
            </div>

        </div>

        <div class="col-sm-12">

            <div class="infusion-field field-row">
                <label for="inf_field_Email" class="input-label"><i class="far fa-envelope"></i></label>
                <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" placeholder="Email *" type="email" required>
            </div>
            <div class="infusion-field field-row">
                <label for="inf_field_Phone1" class="input-label"><i class="fas fa-phone"></i></label>
                <input class="infusion-field-input-container" id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Phone *" required>
            </div>

            <p>
                Let’s stay in touch
            </p>

            <div class="infusion-field field-row">
                <label style="width: auto;" for="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer" class="checkbox-label">
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

            <div class="infusion-submit ">
                <button class="infusion-recaptcha ffieldsubmit" id="recaptcha_9b2b1c25765aa6b49b9854c854cb3fa9" type="submit">
                    Book my free consultation
                </button>
            </div>
        </div>
    </div>
</form>

<script>
    // var consultationForm = document.querySelector("#inf_form_9b2b1c25765aa6b49b9854c854cb3fa9");
    // consultationForm.addEventListener("submit", function(e){

    //     if (document.getElementById('sirname').value == "") {
    //         dataLayer.push({
    //             'event': 'form-submission',
    //             'form_name': 'homepage-enquiry'
    //         });

    //         this.action = 'https://lifestyledental.infusionsoft.com/app/form/process/9b2b1c25765aa6b49b9854c854cb3fa9';
    //     }

    // });

    var consultationForm = document.querySelector("#inf_form_9b2b1c25765aa6b49b9854c854cb3fa9");
    consultationForm.addEventListener("submit", function(e) {
        e.preventDefault();

        if (consultationForm.querySelector('#sirname').value == "") {
            grecaptcha.ready(function() {
                grecaptcha.execute('6LfLgnIcAAAAAIcmAGVwRtd52GZAUjTKMsQBwCPC', {
                    action: 'submit'
                }).then(function(token) {
                    sendToTheGoogleGodToVerify(token).then(function(result) {
                        if (result.success) {
                            dataLayer.push({
                                'event': 'form-submission',
                                'form_name': 'hero-form',
                                'form_path': window.location.pathname
                            });

                            consultationForm.action = 'https://lifestyledental.infusionsoft.com/app/form/process/9b2b1c25765aa6b49b9854c854cb3fa9';

                            consultationForm.submit();
                        }
                    });
                });
            });
        }
    });
</script>