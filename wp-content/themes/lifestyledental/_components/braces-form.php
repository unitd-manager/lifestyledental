<form id="braces-form" class="infusion-form consultation-form d-block text-left mx-auto mb-3" accept-charset="UTF-8" action="#" method="POST" style="max-width: 700px;">
    <input name="inf_form_xid" type="hidden" value="31ad5bf567a10ff48f3352cec391c1aa">
    <input name="inf_form_name" type="hidden" value="Braces Long &#a;Lander Form">
    <input name="infusionsoft_version" type="hidden" value="1.36.0.45">
    <input class="d-none" name="sirname" type="text">

    <h3 style="margin-bottom: 1.5rem;">Claim your spot now</h3>

    <div class="row">
        <div class="col-sm-6">
            <div class="infusion-field field-row">
                <label for="inf_field_FirstName">First Name *</label>

                <input id="inf_field_FirstName" class="infusion-field-input-container" name="inf_field_FirstName" required="" type="text" placeholder="First Name *">
            </div>

            <div class="infusion-field field-row">
                <label for="inf_field_LastName">Last Name *</label>
                
                <input id="inf_field_LastName" class="infusion-field-input-container" name="inf_field_LastName" required="" type="text" placeholder="Last Name *">
            </div>

            <div class="infusion-field field-row">
                <label for="inf_field_Email">Email *</label>
                
                <input id="inf_field_Email" class="infusion-field-input-container" name="inf_field_Email" required="" type="email" placeholder="Email *">
            </div>

            <div class="infusion-field field-row">
                <label for="inf_field_Phone1">Phone *</label>
                
                <input id="inf_field_Phone1" class="infusion-field-input-container" name="inf_field_Phone1" required="" type="text" placeholder="Phone *">
            </div>
        </div>

        <div class="col-sm-6">
            <div class="infusion-field field-row">
                <label for="inf_custom_Comments">Comments</label>

                <textarea name="inf_custom_Comments" id="inf_custom_Comments" cols="30" rows="5" placeholder="Comments" style="max-width: 100%;"></textarea>
            </div>

            <p><input name="inf_custom_GaSource" type="hidden" value="null"><input name="_GaReferurl" type="hidden" value="null"><input name="_GaTerm" type="hidden" value="null"><input name="_GaMedium" type="hidden" value="null"><input name="_GaContent" type="hidden" value="null"><input name="_GaCampaign" type="hidden" value="null"></p>
            <div class="infusion-submit"><button id="recaptcha_9b2b1c25765aa6b49b9854c854cb3fa9" class="infusion-recaptcha ffieldsubmit d-block ml-auto" type="submit">Submit</button></div>
        </div>
    </div>
</form>

<script>
    // var form = document.getElementById("braces-form");
    // form.addEventListener("submit", function(e){

    //     if (document.getElementById('sirname').value == "") {

    //         dataLayer.push({
    //             'event': 'form-submission',
    //             'form_name': 'braces-offer-enquiry'
    //         });
            
    //         document.getElementById('braces-form').action = 'https://lifestyledental.infusionsoft.com/app/form/process/31ad5bf567a10ff48f3352cec391c1aa';
    //     }
        
    // });

    var bracesForm = document.querySelector("#braces-form");
    bracesForm.addEventListener("submit", function(e){
        e.preventDefault();

        if (document.getElementById('sirname').value == "") {
            grecaptcha.ready(function() {
                grecaptcha.execute('6LfLgnIcAAAAAIcmAGVwRtd52GZAUjTKMsQBwCPC', {action: 'submit'}).then(function(token) {
                    sendToTheGoogleGodToVerify(token).then(function(result){
                        if (result.success){
                            dataLayer.push({
                                'event': 'form-submission',
                                'form_name': 'braces-offer-enquiry'
                            });
                            
                            bracesForm.action = 'https://lifestyledental.infusionsoft.com/app/form/process/31ad5bf567a10ff48f3352cec391c1aa';

                            bracesForm.submit();
                        }
                    });
                });
            });
        }
    });
</script>
