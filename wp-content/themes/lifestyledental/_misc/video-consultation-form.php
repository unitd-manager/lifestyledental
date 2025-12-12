<style>
    #video-consultation-form-wrapper {
        position: fixed;
        bottom: 0;
        left: 0;
        padding: 1rem;
        z-index: 10;
    }

    #video-consultation-form-wrapper form.video-form {
        display: block;
    }
</style>

<div id="video-consultation-form-wrapper">
    <form
    accept-charset="UTF-8"
    action="#"
    class="infusion-form gradient-form video-form d-none"
    id="video-consultation-form"
    method="POST"
    >
        <input name="inf_form_xid" value="767a6d67e38153858a72b5d186be571f" type="hidden">
        <input name="inf_form_name" value="Web Form submitted" type="hidden">
        <input name="infusionsoft_version" value="1.70.0.208808" type="hidden">
        <input type="text" id="sirname" name="sirname" class="d-none">

        <h3 class="h4 plain inverted text-center mt-0">Request your complimentary video consultation</h3>

        <div class="infusion-field field-row">
            <label for="inf_field_FirstName" class="d-none">First Name *</label>
            <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="First Name *" type="text" required>
        </div>

        <div class="infusion-field field-row">
            <label for="inf_field_Email" class="d-none">Email *</label>
            <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" placeholder="Email *" type="email" required>
        </div>

        <div class="infusion-field field-row">
            <label for="inf_field_Phone1" class="d-none">Contact number *</label>
            <input class="infusion-field-input" id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Contact number *" type="text" />
        </div>

        <input name="inf_custom_GaSource" value="null" type="hidden">
        <input name="_GaReferurl" value="null" type="hidden">
        <input name="_GaTerm" value="null" type="hidden">
        <input name="_GaMedium" value="null" type="hidden">
        <input name="_GaContent" value="null" type="hidden">
        <input name="_GaCampaign" value="null" type="hidden">

        <div class="infusion-submit">
            <button
            class="infusion-recaptcha ffieldsubmit mb-3"
            id="recaptcha_767a6d67e38153858a72b5d186be571f"
            type="submit"
            >
                Arrange My Consultation
            </button>


            <div class="row">
                <div class="col-6">
                    <p class="text-center mb-0">
                        <a
                        class="inverted"
                        href="https://www.lifestyledental.co.uk/virtual-consultations/"
                        >
                        Find out more
                        </a>
                    </p>
                </div>
                <div class="col-6">
                    <p class="text-center mb-0">
                        <a
                        class="inverted"
                        href="https://www.lifestyledental.co.uk/digital-privacy-policy/"
                        >
                          Privacy Policy
                        </a>
                    </p>
                </div>
            </div>

          

            
        </div>
    </form>

    <a href="" class="btn btn-pink video-form-toggle-btn mt-3">Video consultation<br> for emergencies</a>
</div>

<script>
    document.querySelector('.video-form-toggle-btn').addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector('.video-form').classList.toggle('d-none');
    });

    // var form = document.querySelector(".infusion-form.gradient-form.video-form");
    // form.addEventListener("submit", function(e){

    //     if (document.getElementById('sirname').value == "") {

    //         dataLayer.push({
    //             'event': 'form-submission',
    //             'form_name': 'video-consultation-enquiry'
    //         });
            
    //         document.getElementById('inf_form_767a6d67e38153858a72b5d186be571f').action = 'https://lifestyledental.infusionsoft.com/app/form/process/767a6d67e38153858a72b5d186be571f';
            
    //     }
        
    // });

    var videoConsultationForm = document.querySelector("#video-consultation-form");
    videoConsultationForm.addEventListener("submit", function(e){
        e.preventDefault();

        if (videoConsultationForm.querySelector('#sirname').value == "") {
            grecaptcha.ready(function() {
                grecaptcha.execute('6LfLgnIcAAAAAIcmAGVwRtd52GZAUjTKMsQBwCPC', {action: 'submit'}).then(function(token) {
                    sendToTheGoogleGodToVerify(token).then(function(result){
                        if (result.success){
                            dataLayer.push({
                                'event': 'form-submission',
                                'form_name': 'homepage-enquiry'
                            });
                            
                            videoConsultationForm.action = 'https://lifestyledental.infusionsoft.com/app/form/process/767a6d67e38153858a72b5d186be571f';

                            videoConsultationForm.submit();
                        }
                    });
                });
            });
        }
    });
</script>
