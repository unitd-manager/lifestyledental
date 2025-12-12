<?php

/**
 * Footer finance form component
 *
 * @package lifestyledental
 * @author Pop Creative
 */

?>

<section class="contact-form-banner parallax2">
    <div class="container py-5">
        <h2 class="mb-4 inverted">
            Want to spread the cost of your dental treatment?
        </h2>

        <p>
            <span>Complete your details below and we will contact you.</span>
        </p>
		
		<div class="infusion-form">
			<?php echo do_shortcode('[contact-form-7 id="309790f" title="Contact Form"]'); ?>
		</div>

        <? //php if (!isset($_GET['dengro'])) : ?>

            <!--<div data-dengro-hosted="cb4b3b93-cdea-46fc-b921-b991d41266bb" style="max-height: 350px; overflow: auto;"></div>

        <? //php else : ?>

            <form accept-charset="UTF-8" action="#" class="infusion-form" id="footer-finance-form" method="POST">
                <input name="inf_form_xid" type="hidden" value="4d1df02562f3f1a28fc3f4a72528e7e5" />
                <input name="inf_form_name" type="hidden" value="Web Form submitted" />
                <input name="infusionsoft_version" type="hidden" value="1.70.0.75009" />
                <input type="text" id="sirname" name="sirname" class="d-none">

                <label for="inf_field_FirstName">First Name *</label>
                <input id="inf_field_FirstName" name="inf_field_FirstName" placeholder="First Name *" type="text" required><br>
                <label for="inf_field_LastName">Last Name *</label>
                <input id="inf_field_LastName" name="inf_field_LastName" placeholder="Last Name *" type="text" required><br>
                <label for="inf_field_Email">Email *</label>
                <input id="inf_field_Email" name="inf_field_Email" placeholder="Email *" type="text" required><br>
                <label for="inf_field_Phone1">Phone *</label>
                <input id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Phone *" type="tel" required><br>
                <button class="main-cta" id="recaptcha_4d1df02562f3f1a28fc3f4a72528e7e5" type="submit">Continue<i class="fas fa-arrow-right"></i></button>
                <a href="https://www.lifestyledental.co.uk/digital-privacy-policy/">Terms & Conditions apply</a>
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
            </script>-->

        <? //php endif; ?>
    </div>
</section>