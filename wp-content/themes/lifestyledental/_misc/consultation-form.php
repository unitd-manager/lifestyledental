<?php $is_landing_page = is_page(3978); ?>
<style>
    form.gradient-form button {
        background-color: #17a2b8;
        border-radius: 2rem;
        transition: all 0.2s ease;
        height: 50px;
        line-height: 35px;
        overflow: hidden;
    }

    form.gradient-form button:hover {
        background-color: #17a2b8;
    }

    form.gradient-form hr {
        display: none;
    }

    .core__slider .wrapper.grey-bg form.gradient-form {
        max-width: 330px;
    }

    form.gradient-form .field-row input {
        height: 40px;
    }

    #inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer {
        position: absolute;
        left: 15px;
    }

    .checkbox-label {
        margin-left: 28px;
    }

    .slider-form .d-xl-none.main-cta {
        background-color: #ea5400;
        margin-bottom: 10px;
        color: #ffffff;
    }

    form.gradient-form button .fa-arrow-right {
        transform: translateX(150px);
        transition: all 0.3s ease-in-out;
    }

    form.gradient-form button:hover .fa-arrow-right {
        transform: translateX(20px);
    }

    @media (max-width: 1199px) {
        form.gradient-form {
            display: none;
        }
    }
</style>

<a class="btn d-xl-none main-cta" onclick="toggleForm()">Arrange My Consultation</a>

<?php if (!isset($_GET['dengro'])) : ?>

    <form class="infusion-form gradient-form">

        <h3 class="h4 plain inverted text-center mt-0 mb-4">Have questions? Fill out this form and we'll be in touch</h3>

        <div data-dengro-hosted="cb4b3b93-cdea-46fc-b921-b991d41266bb"></div>

    </form>

    <script>
        ! function() {
            function o() {
                var o = document.createElement("script");
                o.async = 1, o.src = "https://capture.dengro.com/dengro.min.js", o.setAttribute("data-version", "1.4.5"), o.onload = function() {
                    window.dengro = new DenGro, window.dengro.locale = "en-GB", window.dengro.load()
                }, o.onerror = function() {
                    "object" == typeof console && console.hasOwnProperty("warn") && console.warn("\n\nDenGro Error:\n---------------\nFailed to load DenGro data capture library from\n" + o.src + "\nSee https://www.dengro.com for help.\n\n\n")
                }, document.body.insertBefore(o, document.body.firstChild)
            }
            void 0 !== window.google_tag_manager && !0 === window.google_tag_manager.dataLayer.gtmDom ? o() : "complete" === document.readyState ? o() : document.addEventListener("DOMContentLoaded", o)
        }();
    </script>



<?php else : ?>

    <?php if ($is_landing_page) : ?>

        <form accept-charset="UTF-8" action="#" class="infusion-form gradient-form" id="inf_form_9b2b1c25765aa6b49b9854c854cb3fa9 testtest" method="POST">
            <input name="inf_form_xid" value="9b2b1c25765aa6b49b9854c854cb3fa9" type="hidden">
            <input name="inf_form_name" value="Home Page Form" type="hidden">
            <input name="infusionsoft_version" value="1.68.0.110" type="hidden">
            <input type="text" id="sirname" name="sirname" class="d-none">
            <input type="hidden" name="verify-submission">

            <h3 class="h4 plain inverted text-center mt-0 mb-4">Book your free <br> consultation today</h3>

            <p style="font-size: 18px; color: #ffffff; text-align: center; margin: -16px 0 16px;">Only 50 spots available</p>

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
                        <input class="infusion-field-input-container" id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Number *" required>
                    </div>

                    <hr>

                    <input name="inf_custom_GaSource" value="null" type="hidden">
                    <input name="_GaReferurl" value="null" type="hidden">
                    <input name="_GaTerm" value="null" type="hidden">
                    <input name="_GaMedium" value="null" type="hidden">
                    <input name="_GaContent" value="null" type="hidden">
                    <!--     <script src="http://lifestyledental.co.uk/wp-content/cache/abtf/proxy/7b/08/eb/7b08eb0e618cd0825a3fd48cde9a1dd8.js" type="text/javascript"></script> -->
                    <input name="_GaCampaign" value="null" type="hidden">

                    <div class="infusion-submit ">
                        <button class="infusion-recaptcha ffieldsubmit mb-3" id="recaptcha_9b2b1c25765aa6b49b9854c854cb3fa9" type="submit">
                            BOOK YOUR FREE CONSULTATION
                        </button>
                    </div>
                    <p style="font-size: 14px; color: #ffffff; margin-bottom: 0;">
                        You will receive an email outlining the next steps. Our treatment coordinator will be in touch within the next few days to book your free consultation.
                    </p>
                </div>
            </div>
        </form>

    <?php else : ?>

        <form accept-charset="UTF-8" action="#" class="infusion-form gradient-form" id="inf_form_9b2b1c25765aa6b49b9854c854cb3fa9" method="POST">
            <input name="inf_form_xid" value="9b2b1c25765aa6b49b9854c854cb3fa9" type="hidden">
            <input name="inf_form_name" value="Home Page Form" type="hidden">
            <input name="infusionsoft_version" value="1.68.0.110" type="hidden">
            <input type="text" id="sirname" name="sirname" class="d-none">
            <input type="hidden" name="verify-submission">

            <h3 class="h4 plain inverted text-center mt-0 mb-4">Have questions? Fill out this form and we'll be in touch</h3>

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
                        <button class="infusion-recaptcha ffieldsubmit mb-3" id="recaptcha_9b2b1c25765aa6b49b9854c854cb3fa9" type="submit">
                            Send<i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    <?php endif; ?>

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

<?php endif; ?>