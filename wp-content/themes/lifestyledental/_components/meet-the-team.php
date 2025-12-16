<?php
/**
 * Meet the team component.
 *
 * @package lifestyledental
 * @author Pop Creative
 */

?>

<style>

	.referral-benefits-panel {
  background: #fdf3f7;
  padding: 50px 0;
}

.referral-benefits-panel h2 {
  text-align: center;
  color: #b1005d;
  margin-bottom: 30px;
}

.benefithead {
	text-align: center;
  color: #b1005d;
  margin-bottom: 30px;
  font-size:2rem;
}

.benefits-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 25px;
}

.benefit-box {
  background: #ffffff;
  padding: 20px;
  border-left: 4px solid #e00070;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.benefit-box h3 {
  color: #b1005d;
  font-size: 18px;
  margin-bottom: 10px;
}

.benefit-box p {
  font-size: 14.5px;
  line-height: 1.6;
  color: #444;
}

.referral-footer-text {
  margin-top: 25px;
  text-align: center;
  font-size: 14.5px;
  color: #555;
  max-width: 900px;
  margin-left: auto;
  margin-right: auto;
}

/* Mobile Responsive */
@media (max-width: 768px) {
  .benefits-grid {
    grid-template-columns: 1fr;
  }
}

</style>

<div class="comp__meet-the-team comp__section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<picture>
					<source
					data-srcset="https://www.lifestyledental.co.uk/wp-content/uploads/2021/10/nadim-team.webp"
					type="image/webp"
					>

					<source
					data-srcset="<?php the_field( 'meet_the_team_image', 'option' ); ?>"
					type="image/jpeg"
					> 

					<img
					class="img-fluid lazyload"
					data-src="<?php the_field( 'meet_the_team_image', 'option' ); ?>"
					alt="team"
					>
				</picture>

				<lite-youtube
				videoid="KvmMtBAV_R0"
				style="width:100%;"
				height="300"
				></lite-youtube>
			</div>

			<div class="col-lg-6">
				<h2 class="text-uppercase">
					<?php the_field( 'meet_the_team_title', 'option' ); ?>cdvfdvdf
				</h2>

				<?php the_field( 'meet_the_team_text', 'option' ); ?>
			</div>
		</div>
	</div>
</div>
<section class="referral-benefits-panel">
  <div class="container">
    <div class="benefithead">Referral Process & Key Benefits</div>

    <div class="benefits-grid">
      <div class="benefit-box">
        <h3>Simple Referral Journey</h3>
        <p>
          Referring a patient to Lifestyle Dental & Implant Clinic is quick and secure.
          Once your referral is submitted, our experienced team promptly contacts the
          patient, schedules a consultation, and carries out a comprehensive clinical
          assessment using advanced diagnostics.
        </p>
      </div>

      <div class="benefit-box">
        <h3>Specialist Dental Expertise</h3>
        <p>
          We provide advanced dental implant treatments, complex restorative dentistry,
          cosmetic procedures, and sedation dentistry. Every treatment plan is tailored
          to the patient’s clinical needs, comfort, and long-term oral health goals.
        </p>
      </div>

      <div class="benefit-box">
        <h3>Clear Communication</h3>
        <p>
          We keep referring practices fully informed throughout the treatment process.
          You will receive detailed clinical notes, progress updates, and post-treatment
          recommendations, ensuring continuity of care and transparency at every stage.
        </p>
      </div>

      <div class="benefit-box">
        <h3>Patient Comfort & Trust</h3>
        <p>
          Our modern clinic environment, sedation options, and patient-focused approach
          help anxious patients feel relaxed and supported. We prioritise safety,
          hygiene, and comfort from consultation to treatment completion.
        </p>
      </div>
    </div>

    <p class="referral-footer-text">
      We respect and protect your patient relationships. Routine dental care is never
      undertaken unless requested, and patients are always referred back to your
      practice following treatment completion.
    </p>
  </div>
</section>

