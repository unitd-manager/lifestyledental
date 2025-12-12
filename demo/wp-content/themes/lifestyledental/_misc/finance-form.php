<a href="" class="btn btn-pink gradient-form-toggle-btn d-lg-none">Apply for finance</a>

<form accept-charset="UTF-8" action="#" class="infusion-form gradient-form" id="finance-form" method="POST">
    <input name="inf_form_xid" type="hidden" value="4d1df02562f3f1a28fc3f4a72528e7e5" />
    <input name="inf_form_name" type="hidden" value="Web Form submitted" />
    <input name="infusionsoft_version" type="hidden" value="1.70.0.75009" />
    <input type="text" id="sirname" name="sirname" class="d-none">

    <h3 class="h4 plain inverted text-center mt-0">Apply for finance today</h3>

    <p class="inverted text-center">
        Don't let the cost of treatment prevent you from getting the smile you've always wanted. Make it easier by spreading the cost.
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

            <input name="inf_custom_GaSource" value="null" type="hidden">
            <input name="_GaReferurl" value="null" type="hidden">
            <input name="_GaTerm" value="null" type="hidden">
            <input name="_GaMedium" value="null" type="hidden">
            <input name="_GaContent" value="null" type="hidden">
            <input name="_GaCampaign" value="null" type="hidden">
            
            <div class="infusion-submit">
            <a href="https://www.lifestyledental.co.uk/digital-privacy-policy/">Privacy Policy</a>
                <button class="infusion-recaptcha" id="recaptcha_4d1df02562f3f1a28fc3f4a72528e7e5" type="submit">Apply</button>
            </div>
        </div>
    </div>
</form>

<script>
    // var form = document.querySelector("#finance-form");
    // form.addEventListener("submit", function(e){

    //     if (document.getElementById('sirname').value == "") {

    //         dataLayer.push({
    //             'event': 'form-submission',
    //             'form_name': 'finance'
    //         });

    //         document.getElementById('finance-form').action = 'https://lifestyledental.infusionsoft.com/app/form/process/4d1df02562f3f1a28fc3f4a72528e7e5';
    //     }

    // });

    var financeForm = document.querySelector("#finance-form");
    financeForm.addEventListener("submit", function(e){
        e.preventDefault();

        if (financeForm.querySelector('#sirname').value == "") {
            grecaptcha.ready(function() {
                grecaptcha.execute('6LfLgnIcAAAAAIcmAGVwRtd52GZAUjTKMsQBwCPC', {action: 'submit'}).then(function(token) {
                    sendToTheGoogleGodToVerify(token).then(function(result){
                        if (result.success){
                            dataLayer.push({
                                'event': 'form-submission',
                                'form_name': 'hero-form',
                                'form_path': window.location.pathname
                            });
                            
                            financeForm.action = 'https://lifestyledental.infusionsoft.com/app/form/process/4d1df02562f3f1a28fc3f4a72528e7e5';

                            financeForm.submit();
                        }
                    });
                });
            });
        }
    });
</script>