<!-- <a href="" class="btn btn-pink gradient-form-toggle-btn d-lg-none">Request consultation</a> -->

<style>
    @media (max-width: 991.98px) {
        .core__slider {
            margin-bottom: -2rem;
        }
    }

    @media (min-width: 1200px) {
        .core__slider .wrapper.dark-pink-bg form.gradient-form {
            max-width: 400px;
            margin-right: -48px;
        }
    }
</style>

<?php if (!isset($_GET['dengro'])) : ?>

    <form class="infusion-form gradient-form d-block mb-3">

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

    <form accept-charset="UTF-8" action="#" class="infusion-form gradient-form d-block mb-3" id="general-enquiry-form" method="POST">
        <input name="inf_form_xid" value="b4913ba44fac9bf4b96b60099623f9d5" type="hidden">
        <input name="inf_form_name" value="Sign up for newsletter" type="hidden">
        <input name="infusionsoft_version" value="1.31.0.33" type="hidden">
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
                            <input style="width: 15px;height: 15px;" id="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer" name="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer" type="checkbox" value="1413" /> Yes, I would like to be kept up-to-date with future treatments/offers that Lifestyle Dental may offer</label> </span> </div>

                <input name="inf_custom_GaSource" value="null" type="hidden">
                <input name="_GaReferurl" value="null" type="hidden">
                <input name="_GaTerm" value="null" type="hidden">
                <input name="_GaMedium" value="null" type="hidden">
                <input name="_GaContent" value="null" type="hidden">
                <!--     <script src="http://lifestyledental.co.uk/wp-content/cache/abtf/proxy/7b/08/eb/7b08eb0e618cd0825a3fd48cde9a1dd8.js" type="text/javascript"></script> -->
                <input name="_GaCampaign" value="null" type="hidden">
                <div class="infusion-submit">
                    <button class="infusion-recaptcha ffieldsubmit" id="recaptcha_9b2b1c25765aa6b49b9854c854cb3fa9" type="submit">Arrange My Consultation</button>
                    <a href="https://www.lifestyledental.co.uk/digital-privacy-policy/" class="text-white d-block pt-3">Privacy Policy</a>
                </div>

            </div>
        </div>
    </form>

    <script>
        var newsletterSignupForm = document.querySelector("#general-enquiry-form");
        newsletterSignupForm.addEventListener("submit", function(e) {
            e.preventDefault();

            if (newsletterSignupForm.querySelector('#sirname').value == "") {
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

                                newsletterSignupForm.action = 'https://lifestyledental.infusionsoft.com/app/form/process/b4913ba44fac9bf4b96b60099623f9d5';

                                newsletterSignupForm.submit();
                            }
                        });
                    });
                });
            }
        });


        // if(window.location.href.indexOf("#open-form") > -1) {
        //     var mobileForm = document.querySelector(".gradient-form-toggle-btn");
        //     mobileForm.classList.add("open");
        // }
    </script>

<?php endif; ?>