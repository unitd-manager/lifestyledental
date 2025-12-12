<?php

/**
 * Banner finance form component
 *
 * @package lifestyledental
 * @author Pop Creative
 */

?>

<style>
    .comp__form-banner input {
        width: 100%;
        margin-bottom: 16px;
        background-color: transparent;
        color: #fff;
        border: none;
        border-bottom: 2px #fff solid;
        padding-bottom: 4px;
        outline: none;
        padding-left: 30px;
    }

    .comp__form-banner input::placeholder {
        color: #fff;
        font-weight: 100;
    }

    .comp__form-banner .input-label {
        position: absolute;
    }

    .comp__form-banner .checkbox-label {
        margin-left: 30px;
        text-indent: -30px;
        margin-bottom: 20px;
        line-height: 1;
        font-weight: 100;
    }

    .comp__form-banner input[type=checkbox] {
        margin-right: 10px;
    }

    .comp__form-banner button {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 50px;
        background-color: #B40963;
        transition: all 0.2s ease;
        color: #fff;
    }

    .comp__form-banner button:hover {
        background-color: #c80466;
    }

</style>

<div class="container">

    <form accept-charset="UTF-8" action="#" class="infusion-form" id="footer-finance-form" method="POST">
        <div>
            <input name="inf_form_xid" type="hidden" value="4d1df02562f3f1a28fc3f4a72528e7e5" />
            <input name="inf_form_name" type="hidden" value="Web Form submitted" />
        </div>
        <div>
            <input name="infusionsoft_version" type="hidden" value="1.70.0.75009" />
            <input type="text" id="sirname" name="sirname" class="d-none">
        </div>

        <div>
            <label for="inf_field_FirstName" class="input-label"><i class="far fa-user"></i></label>
            <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="Your first name" type="text" required>
        </div>
        <div>
            <label for="inf_field_LastName" class="input-label"><i class="far fa-user"></i></label>
            <input class="infusion-field-input-container" id="inf_field_LastName" name="inf_field_LastName" placeholder="Your last name" type="text" required>
        </div>
        <div>
            <label for="inf_field_Email" class="input-label"><i class="far fa-envelope"></i></label>
            <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" placeholder="Email address" type="email" required>
        </div>
        <div>
            <label for="inf_field_Phone1" class="input-label"><i class="fas fa-phone"></i></label>
            <input class="infusion-field-input-container" id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Best contact number" required>
        </div>

        <p>
            Let’s stay in touch
        </p>

        <div class="infusion-field field-row">
            <label style="width: auto;" for="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer" class="checkbox-label">
                <input style="width: 15px; height: 15px;" id="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer" name="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer" type="checkbox" value="1397" /> Yes, I would like to be kept up-to-date with future treatments/offers that Lifestyle Dental may offer
            </label>
        </div>

        <button id="recaptcha_4d1df02562f3f1a28fc3f4a72528e7e5" type="submit">Enquire about finance</button>
    </form>

    <script>
        var footerFinanceForm = document.querySelector("form#footer-finance-form");
        footerFinanceForm.addEventListener("submit", function(e) {
            e.preventDefault();

            if (footerFinanceForm.querySelector('#sirname').value == "") {
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LfLgnIcAAAAAIcmAGVwRtd52GZAUjTKMsQBwCPC', {
                        action: 'submit'
                    }).then(function(token) {
                        sendToTheGoogleGodToVerify(token).then(function(result) {
                            if (result.success) {
                                dataLayer.push({
                                    'event': 'form-submission',
                                    'form_name': 'finance-footer-form',
                                    'form_path': window.location.pathname
                                });

                                footerFinanceForm.action = 'https://lifestyledental.infusionsoft.com/app/form/process/4d1df02562f3f1a28fc3f4a72528e7e5';

                                footerFinanceForm.submit();
                            }
                        });
                    });
                });
            }
        });
    </script>
</div>