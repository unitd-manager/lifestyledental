<?php
/**
 * Template Name: Landing page (no nav)
 * 
 * @package Lifestyle Dental
 * @author Lifestyle Dental
 */

get_header();

get_template_part( '_includes/usp-bar' );
?>

<link rel="stylesheet" href="<?php the_dist_path( 'css/additional.css?' . time() ); ?>">
<link rel="stylesheet" href="<?php the_dist_path( 'css/landing-page.css?' . time() ); ?>">

<?php if ( have_rows( 'flexible_content' ) ) : ?>
	<?php while ( have_rows( 'flexible_content' ) ) : the_row(); ?>

		<?php if ( get_row_layout() == 'hero_banner' ) : ?>
            <?php
                $header       = get_sub_field( 'header' );
                $sub_header   = get_sub_field( 'sub_header_title' );
                $paragraph    = get_sub_field( 'sub_header' );
                $image        = get_sub_field( 'image' );
                $mobile_image = get_sub_field( 'mobile_image' );
            ?>

            <div class="core__slider big mb-0 landing-page_hero">
                <div class="container">
                    <div class="wrapper no-arrow">
                        <div class="layer">
                            <div class="slides">
                                <div class="slide services" style="margin-top: 0; padding-top: 0;">
                                    <div class="text">
                                        <?php if ( $header ) : ?>
                                            <div class="main-header">
                                                <div>
                                                    <h1>
                                                        <?php echo esc_html( $header ); ?>
                                                    </h1>

                                                    <?php if ( $sub_header ) : ?>
                                                        <h2>
                                                            <?php echo esc_html( $sub_header ); ?>
                                                        </h2>
                                                    <?php endif; ?>
                                                </div>

                                                <?php if ( ! empty( $mobile_image ) ) : ?>
                                                    <div class="bubble-image">
                                                        <img src="<?php echo esc_url( $mobile_image['sizes']['medium_large'] ); ?>">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ( $paragraph ) : ?>
                                            <div class="sub-header">
                                                <?php echo wp_kses_post( $paragraph ); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="icon-links" style="border-color: #fff;">
                                        <div class="text-white">
                                            <svg width="44px" height="50px" viewBox="0 0 44 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Same_day_appointments" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="calendar-day" transform="translate(8, 9)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M8,0 C9.10624981,0 10,0.893749237 10,2 L10,4 L18,4 L18,2 C18,0.893749237 18.8937492,0 20,0 C21.1062508,0 22,0.893749237 22,2 L22,4 L25,4 C26.65625,4 28,5.34375 28,7 L28,10 L0,10 L0,7 C0,5.34375 1.34375,4 3,4 L6,4 L6,2 C6,0.893749237 6.89375019,0 8,0 Z M0,12 L28,12 L28,29 C28,30.65625 26.65625,32 25,32 L3,32 C1.34375,32 0,30.65625 0,29 L0,12 Z M5,16 C4.44999981,16 4,16.4500008 4,17 L4,23 C4,23.5499992 4.44999981,24 5,24 L11,24 C11.5500002,24 12,23.5499992 12,23 L12,17 C12,16.4500008 11.5500002,16 11,16 L5,16 Z" id="Shape"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            
                                            <br>
                                            Same-day appointments
                                        </div>
                        
                                        <div class="text-white">
                                            <svg width="54px" height="50px" viewBox="0 0 54 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Expert_Care" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="hand-holding-medical" transform="translate(9.9919, 8.9888)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M10.0005889,10.9999738 L14.000577,10.9999738 L14.000577,14.9999642 C14.000577,15.5518428 14.448696,15.9999619 15.0005746,15.9999619 L19.0005651,15.9999619 C19.5525047,15.9999619 20.0005627,15.5518428 20.0005627,14.9999642 L20.0005627,10.9999738 L24.0005531,10.9999738 C24.5524927,10.9999738 25.0005507,10.5518547 25.0005507,9.99997616 L25.0005507,5.99998569 C25.0005507,5.44804609 24.5524927,4.99998808 24.0005531,4.99998808 L20.0005627,4.99998808 L20.0005627,1 C20.0005627,0.448058014 19.5525047,0 19.0005651,0 L15.0005746,0 C14.448696,0 14.000577,0.448058014 14.000577,1 L14.000577,4.99998808 L10.0005889,4.99998808 C9.44870794,4.99998808 9.00058889,5.44804609 9.00058889,5.99998569 L9.00058889,9.99997616 C9.00058889,10.5518547 9.44870794,10.9999738 10.0005889,10.9999738 Z M35.5124275,21.019298 C35.0583271,20.400281 34.3256628,19.9980602 33.4998591,19.9980602 C32.9449898,19.9980602 32.4313192,20.1830573 32.0167694,20.4899414 L24.5374171,26.0011587 L16.9993491,26.0011587 C16.4474095,26.0011587 15.9993515,25.5531007 15.9993515,25.0011611 C15.9993515,24.4492825 16.4474095,24.0011635 16.9993491,24.0011635 L21.8892911,24.0011635 C22.8892887,24.0011635 23.8111615,23.3217828 23.9749184,22.3380815 C23.9932289,22.2293171 24.0027504,22.117623 24.0027504,22.0036707 C24.0027504,20.8977773 23.1045592,20.0017834 21.9986658,20.0017834 L11.9986897,20.0017834 L11.9971638,20.0017834 C10.2450928,20.0017834 8.63028948,20.618237 7.36625441,21.6424045 L4.46001134,24.0011635 L1,24.0011635 C0.449828029,24.0049477 0.00372313565,24.4509915 0,25.0011611 L0,31.0011468 C0.00372313565,31.5513164 0.449828029,31.9974213 1,32.0011444 L22.6874459,32.0011444 C24.1268346,31.9977264 25.4638065,31.5256817 26.5436989,30.7343017 L34.9830099,24.511172 C35.5998907,24.0557288 36.0002193,23.3236138 36.0002193,22.4987257 C36.0002193,21.9457485 35.8168702,21.4334816 35.5124275,21.019298 Z" id="Shape"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            
                                            <br>
                                            Expert Care
                                        </div>

                                        <div class="text-white">
                                            <svg width="44px" height="50px" viewBox="0 0 44 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Transparent_Pricing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="pound-sign" transform="translate(12, 11.0001)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M19.2499541,19.9999523 L16.4065161,19.9999523 C15.9923325,19.9999523 15.6565178,20.3357669 15.6565178,20.7499505 L15.6565178,23.9279215 L7.99998093,23.9279215 L7.99998093,15.9999619 L13.2499684,15.9999619 C13.664152,15.9999619 13.9999666,15.6641472 13.9999666,15.2499636 L13.9999666,12.7499696 C13.9999666,12.335786 13.664152,11.9999714 13.2499684,11.9999714 L7.99998093,11.9999714 L7.99998093,8.02775186 C7.99998093,6.01109407 9.53507248,4.45988927 11.8619712,4.45988927 C13.3406054,4.45988927 14.729335,5.17894273 15.4652341,5.63792601 C15.7871328,5.8387312 16.2082133,5.76609953 16.4457005,5.47014077 L18.226519,3.25054157 C18.4911058,2.92083044 18.4314746,2.43773833 18.0940731,2.18297819 C17.0702108,1.40996978 14.7859755,0 11.7456385,0 C6.62663215,0 3,3.29637886 3,7.87253982 L3,11.9999714 L1.24999702,11.9999714 C0.835813437,11.9999714 0.5,12.335786 0.5,12.7499696 L0.5,15.2499636 C0.5,15.6641472 0.835813437,15.9999619 1.24999702,15.9999619 L3,15.9999619 L3,23.9999428 L0.749998212,23.9999428 C0.335814629,23.9999428 0,24.3357574 0,24.749941 L0,27.249935 C0,27.6641186 0.335814629,27.9999332 0.749998212,27.9999332 L19.2499541,27.9999332 C19.6641377,27.9999332 19.9999523,27.6641186 19.9999523,27.249935 L19.9999523,20.7499505 C19.9999523,20.3357669 19.6641377,19.9999523 19.2499541,19.9999523 Z" id="Path"></path>
                                                    </g>
                                                </g>
                                            </svg>

                                            <br>
                                            Transparent Pricing
                                        </div>

                                        <div class="text-white">
                                            <svg width="54px" height="50px" viewBox="0 0 54 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Rapid_Relief" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="face-smile-beam" transform="translate(11, 9)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M16,32 C21.7162502,32 26.9982822,28.9504166 29.8564079,24 C32.7145317,19.0495834 32.7145317,12.9504175 29.8564079,8 C26.9982822,3.04958344 21.7162502,0 16,0 C10.2837512,0 5.00171828,3.04958344 2.14359355,8 C-0.714531183,12.9504175 -0.714531183,19.0495834 2.14359355,24 C5.00171828,28.9504166 10.2837512,32 16,32 Z M10.2562511,20.34375 C11.3750007,21.6375008 13.2875011,23 16.0000007,23 C18.7125003,23 20.6250007,21.6375008 21.7437503,20.34375 C22.1062496,19.9249992 22.7375,19.8812504 23.1562507,20.2437496 C23.5750015,20.6062489 23.6187503,21.2374992 23.2562511,21.65625 C21.8625,23.2562504 19.4437511,25 16.0000007,25 C12.5562503,25 10.1375005,23.2562504 8.74375033,21.65625 C8.38125014,21.2374992 8.42499995,20.6062508 8.84375072,20.2437496 C9.26250148,19.8812485 9.89375091,19.9249992 10.2562511,20.34375 Z M13.6000011,14.3000002 L13.6000011,14.3000002 L13.5875013,14.2875004 C13.5750015,14.2750006 13.5625017,14.2562504 13.5437515,14.2312508 C13.5062511,14.1812506 13.4437511,14.1062508 13.3687513,14.0187511 C13.2125013,13.843751 12.9937513,13.6062508 12.7312515,13.375001 C12.1812513,12.8875008 11.5562513,12.5 11.0000007,12.5 C10.4437521,12.5 9.81875205,12.8875008 9.26875186,13.375001 C9.00625205,13.6062508 8.78750205,13.843751 8.63125205,14.0187511 C8.55625224,14.1062508 8.49375224,14.1812515 8.45625186,14.2312508 C8.43750167,14.2562504 8.41875148,14.2750006 8.41250205,14.2875004 L8.40000224,14.3000002 L8.40000224,14.3000002 C8.26875186,14.4750004 8.04375243,14.5437498 7.84375167,14.4750004 C7.64375091,14.406251 7.50000072,14.21875 7.50000072,14 C7.50000072,12.8812504 7.91875052,11.7749996 8.5375011,10.9500008 C9.15000129,10.1375008 10.0312507,9.5 11.0000007,9.5 C11.9687526,9.5 12.8500021,10.1375008 13.4625013,10.9500008 C14.0812509,11.7749996 14.5000007,12.8812494 14.5000007,14 C14.5000007,14.2124996 14.3625019,14.40625 14.1562517,14.4750004 C13.9500015,14.5437508 13.7250021,14.4750004 13.6000021,14.3000002 L13.6000021,14.3000002 L13.6000011,14.3000002 Z M23.6000001,14.3000002 L23.5874994,14.2875004 C23.5749986,14.2750006 23.5624998,14.2562504 23.5437486,14.2312508 C23.5062482,14.1812506 23.4437482,14.1062508 23.3687494,14.0187511 C23.2124994,13.843751 22.9937494,13.6062508 22.7312486,13.375001 C22.1812494,12.8875008 21.5562494,12.5 20.9999959,12.5 C20.4437463,12.5 19.8187482,12.8875008 19.2687471,13.375001 C19.0062463,13.6062508 18.7874963,13.843751 18.6312463,14.0187511 C18.5562456,14.1062508 18.4937456,14.1812515 18.4562471,14.2312508 C18.4374979,14.2562504 18.4187467,14.2750006 18.4124963,14.2875004 L18.3999956,14.3000002 L18.3999956,14.3000002 C18.2687452,14.4750004 18.0437448,14.5437498 17.8437459,14.4750004 C17.6437471,14.406251 17.4999959,14.21875 17.4999959,14 C17.4999959,12.8812504 17.9187467,11.7749996 18.5374963,10.9500008 C19.1499956,10.1375008 20.0312459,9.5 20.9999959,9.5 C21.9687459,9.5 22.8499963,10.1375008 23.4624956,10.9500008 C24.0812452,11.7749996 24.4999959,12.8812494 24.4999959,14 C24.4999959,14.2124996 24.3624952,14.40625 24.1562459,14.4750004 C23.9499967,14.5437508 23.7249963,14.4750004 23.5999963,14.3000002 L23.5999963,14.3000002 L23.6000001,14.3000002 Z" id="Shape"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            
                                            <br>
                                            Rapid Relief
                                        </div>
                                    </div>

                                    <a
                                    href="tel:01772717316"
                                    class="btn main-cta"
                                    style="margin-top:1rem; background-color:#ea5400; width:350px;"
                                    >
                                        <i class="fas fa-phone mr-2" style="transform: rotate(90deg);"></i>
                                        Call <span class="d-inline-block d-md-none">our team now</span> <span class="d-none d-md-inline-block">01772 717316</span><i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="image">
                                <div class="google-reviews" data-google-reviews-badge>
                                    <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2023/12/google-reviews.png" alt="google reviews logo">

                                    <div class="score">
                                        <p
                                        class="average-score"
                                        data-reviews-average-score
                                        >
                                            4.9
                                        </p>

                                        <p class="stars">
                                            <i class="fas fa-star" style="color:#F8B80C;"></i>
                                            <i class="fas fa-star" style="color:#F8B80C;"></i>
                                            <i class="fas fa-star" style="color:#F8B80C;"></i>
                                            <i class="fas fa-star" style="color:#F8B80C;"></i>
                                            <i class="fas fa-star" style="color:#F8B80C;"></i>
                                        </p>
                                    </div>

                                    <p
                                    class="reviews-count"
                                    data-reviews-reviews-count
                                    >
                                        86 reviews
                                    </p>
                                </div>

                                <img class="hero-img" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-google-reviews" data-google-reviews-badge>
                <div class="container">
                    <div class="logo">
                        <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2023/12/google-reviews.png" alt="google reviews logo">
                    </div>

                    <div class="score">
                        <p
                        class="average-score"
                        data-reviews-average-score
                        >
                            4.9
                        </p>

                        <p class="stars">
                            <i class="fas fa-star" style="color:#F8B80C;"></i>
                            <i class="fas fa-star" style="color:#F8B80C;"></i>
                            <i class="fas fa-star" style="color:#F8B80C;"></i>
                            <i class="fas fa-star" style="color:#F8B80C;"></i>
                            <i class="fas fa-star" style="color:#F8B80C;"></i>
                        </p>
                    </div>

                    <p
                    class="reviews-count"
                    data-reviews-reviews-count
                    >
                        86 reviews
                    </p>
                </div>
            </div>

        <?php elseif ( get_row_layout() == 'content_left_media_right' ) : ?>
            <?php
                $header       = get_sub_field( 'header' );
                $main_content = get_sub_field( 'main_content' );
                $media        = get_sub_field( 'media' );
                $bg_color     = get_sub_field( 'background_colour' );
                $link_style   = get_sub_field( 'link_style' );
                $image        = get_sub_field( 'image' );
                $iframe       = get_sub_field( 'iframe' );
                $lightbox     = get_sub_field( 'lightbox_button_text' );
                $before1      = get_sub_field( 'before_image_1' );
                $before2      = get_sub_field( 'before_image_2' );
                $after1       = get_sub_field( 'after_image_1' );
                $after2       = get_sub_field( 'after_image_2' );
                $aos          = get_sub_field( 'aos' );
            ?>

			<section
            class="content-left-media-right <?php echo esc_html( $link_style ); ?> "
            style="background-color: <?php echo esc_html( $bg_color ); ?>;"
            <?php echo ( $aos == 'yes' ) ? 'data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"' : ''; ?>
            >
				<div class="container py-5">
					<div class="row">
						<div class="col-12 col-lg-8 <?php echo ( $media == 'none' ) ? 'col-lg-12' : ''; ?>">
							<?php if ( $header ) : ?>
								<h2>
									<?php echo esc_html( $header ); ?>
								</h2>
							<?php endif; ?>

							<?php if ( $main_content ) : ?>
								<p>
									<?php echo wp_kses_post( $main_content ); ?>
								</p>
							<?php endif; ?>

							<?php $link = get_sub_field( 'link' );
							if ( $link ) :
								$link_url   = $link['url'];
								$link_title = $link['title']; ?>

								<a
                                href="<?php echo esc_url( $link_url ); ?>"
                                class="btn main-cta mt-3">
                                    <?php echo esc_html( $link_title ); ?><i class="fas fa-arrow-right"></i>
                                </a>
							<?php endif; ?>

							<?php if ( $lightbox ) : ?>
								<div>
									<a class="btn main-cta mt-3 open-lightbox">
                                        <?php echo esc_html( $lightbox ); ?><i class="fas fa-arrow-right"></i>
                                    </a>

									<div id="lightbox">
										<div class="lightbox-container">
											<div>
												<div class="col-12">
													<img src="<?php echo esc_url( $before1['url'] ); ?>">

													<p>
														<strong>Before</strong>
													</p>
												</div>

												<div class="col-12">
													<img src="<?php echo esc_url( $before2['url'] ); ?>">

													<p>
                                                        <strong>Before</strong>
													</p>
												</div>
											</div>

											<div>
												<div class="col-12">
													<img src="<?php echo esc_url( $after1['url'] ); ?>">

													<p>
                                                        <strong>After</strong>
													</p>
												</div>

												<div class="col-12">
													<img src="<?php echo esc_url( $after2['url'] ); ?>">

													<p>
                                                        <strong>After</strong>
													</p>
												</div>
											</div>

											<span class="close-btn close-lightbox">
                                                <i class="fa fa-times"></i>
                                            </span>
										</div>
									</div>
								</div>
							<?php endif; ?>
						</div>

						<?php if ( $media == 'image' ) : ?>
							<?php if ( $image ) : ?>
								<div class="col-12 col-lg-4 d-flex mt-5 mt-lg-0">
									<img src="<?php echo esc_url( $image['url'] ); ?>" alt="">
								</div>
							<?php endif; ?>
						<?php endif; ?>

						<?php if ( $media == 'iframe' ) : ?>
							<?php if ( $iframe ) : ?>
								<div class="col-12 col-lg-4 d-flex mt-5 mt-lg-0">
									<iframe
                                    src="<?php echo esc_url( $iframe ); ?>"
                                    width="100%"
                                    height="200"
                                    frameborder="0"
                                    allowfullscreen="allowfullscreen"
                                    ></iframe>
								</div>
							<?php endif; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>

		<?php elseif ( get_row_layout() == 'scrolling_gallery' ) : ?>
			<?php $header = get_sub_field('header'); ?>

			<section
            class="scrolling-gallery text-center pb-5"
            style="background-color: #efefef;"
            >
				<?php if ( $header ) : ?>
					<h4>
						<?php echo esc_html( $header ); ?>
					</h4>
				<?php endif; ?>

				<div class="container">
					<div class="aligner-slider py-5">
						<?php while ( have_rows( 'scrolling_gallery' ) ) : the_row();
							$image = get_sub_field( 'gallery_image' ); ?>

							<div class="scrolling-gallery-slide pt-3">
								<img src="<?php echo $image['url']; ?>" alt="">

								<p>
									<?php echo get_sub_field( 'gallery_item' ); ?>
								</p>
							</div>
						<?php endwhile; ?>

						<style>
							.slick-list.draggable {
								overflow: hidden;
							}

							.slick-track {
								display: flex;
							}

							.slick-prev,
							.slick-next {
								font-size: 0;
								position: absolute;
								bottom: 40%;
								color: #bb005e;
								border: 0;
								background: none;
								z-index: 1;
							}

							.slick-prev {
								left: 20px;
							}

							.slick-prev:after {
								content: "\f060";
								font: 24px 'FontAwesome';
							}

							.slick-next {
								right: 20px;
								text-align: right;
							}

							.slick-next:after {
								content: "\f061";
								font: 24px 'FontAwesome';
							}

							.slick-prev:hover:after,
							.slick-next:hover:after {
								color: #7e7e7e;
							}
						</style>
					</div>
				</div>
			</section>

		<?php elseif ( get_row_layout() == 'guarantee_banner' ) : ?>
            <?php
                $header   = get_sub_field( 'header' );
                $image    = get_sub_field( 'image' );
                $bg_image = get_sub_field( 'background_image' );
                $bg_color = get_sub_field( 'background_color' );
            ?>

			<style>
				.guarantee-banner.plain-background:before {
					content: none;
				}
			</style>

			<section
            class="guarantee-banner <?php echo ( $image == '' ) ? '' : 'plain-background'; ?>"
            style="<?php echo ( ! empty( $image ) ) ? 'background-color:' . esc_html( $bg_color ) . ';' : 'background-image: url(' . esc_url( $bg_image['url'] ) . ');'; ?>"
            >
				<div class="container py-5">
					<div class="row <?php echo ( $image == '' ) ? 'centered-content' : ''; ?>">
						<div class="col-12 col-lg-8 inverted <?php echo ( $image == '' ) ? 'col-lg-12 text-center' : ''; ?>">
							<?php if ( $header ) : ?>
								<h4 class="inverted ">
									<?php echo esc_html( $header ); ?>
								</h4>
							<?php endif; ?>
                
							<?php while ( have_rows( 'bullets' ) ) : the_row(); ?>
								<ul class="fa-ul text-left my-4">
									<li>
										<span class="fa-li"><i class="fas fa-check"></i></span> <?php echo get_sub_field( 'bullet_point' ); ?>
									</li>
								</ul>
							<?php endwhile; ?>

							<?php $link = get_sub_field('link');
							if ( $link ) :
								$link_url   = $link['url'];
								$link_title = $link['title']; ?>

								<a
                                href="<?php echo esc_url( $link_url ); ?>"
                                class="btn main-cta mt-3">
                                    <?php echo esc_html( $link_title ); ?><i class="fas fa-arrow-right"></i>
                                </a>
							<?php endif; ?>
						</div>

						<div class="col-12 col-lg-4 d-flex">
							<img src="<?php echo esc_url( $image['url'] ); ?>" alt="">
						</div>
					</div>
				</div>
			</section>

		<?php elseif ( get_row_layout() == 'accordion_section' ) : ?>
            <?php
                $header  	= get_sub_field( 'header' );
                $bg_color  	= get_sub_field( 'bg_color' );
                $button		= get_sub_field( 'button' );
            ?>

			<section
            class="accordion-section pb-5"
            style="background-color: <?php echo esc_html( $bg_color ); ?>;"
            >
				<div
                class="container"
                data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"
                >
					<?php if ( $header ) : ?>
						<h2>
							<?php echo esc_html( $header ); ?>
						</h2>
					<?php endif; ?>
            
					<div class="row py-5">
						<div class="col-12 col-lg-6">
							<?php while ( have_rows( 'faqs_left' ) ) : the_row(); ?>
								<h5
                                class="accordion"
                                style="border-color: <?php echo ($bg_color == '#ffffff') ? '#eeeeee' : '#ffffff'; ?>" 
                                data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"
                                >
									<?php echo get_sub_field( 'question_left' ); ?>
								</h5>

								<p
                                class="panel"
                                style="background-color: <?php echo ($bg_color == '#ffffff') ? '' : '#ffffff'; ?>"
                                >
									<?php echo get_sub_field( 'answer_left' ); ?>
								</p>
							<?php endwhile; ?>
						</div>

						<div class="col-12 col-lg-6">
							<?php while ( have_rows( 'faqs_right' ) ) : the_row(); ?>
								<h5
                                class="accordion"
                                style="border-color: <?php echo ($bg_color == '#ffffff') ? '#eeeeee' : '#ffffff'; ?>" 
                                data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"
                                >
									<?php echo get_sub_field( 'question_right' ); ?>
								</h5>

								<p
                                class="panel"
                                style="background-color: <?php echo ($bg_color == '#ffffff') ? '' : '#ffffff'; ?>"
                                >
									<?php echo get_sub_field( 'answer_right' ); ?>
							<?php endwhile; ?>
						</div>
					</div>

					<?php if ( $button == 'yes' ) : ?>
						<a
                        href="https://www.lifestyledental.co.uk/dentists-in-fulwood-preston/"
                        class="btn main-cta"
                        >
                            Arrange my consultation<i class="fas fa-arrow-right"></i>
                        </a>
					<?php endif; ?>
				</div>
			</section>

		<?php elseif ( get_row_layout() == 'service_cards' ) : ?>
            <?php
                $header   = get_sub_field( 'header' );
                $bg_color = get_sub_field( 'bg_color' );
                $cards	  = get_sub_field( 'service_cards' );
            ?>

			<section class="service-cards-section" style="background-color: <?php echo esc_html($bg_color); ?>;">
				<div class="container">
					<?php if ($header) : ?>
						<h3 class="mb-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
							<?php echo esc_html($header); ?>
						</h3>
					<?php endif; ?>
					<div class="row mb-0 mb-md-5">
						<?php foreach ($cards as $card) : ?>
							<div class="col-6 col-lg-4">
								<a href="<?php echo esc_url($card['link']); ?>" class="service-cards" style="background-image: url(<?php echo esc_url($card['image']['url']); ?>);">
									<div class="service-card-inner">
										<h5>
											<?php echo esc_html($card['title']); ?> <i class="fas fa-arrow-right"></i>
										</h5>
										<p>
											<?php echo esc_html($card['text']); ?>
										</p>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'video_testimonials') :
			$display_video  = get_sub_field('display_video'); ?>

			<?php if ($display_video == 'yes') : ?>
				<?php get_template_part('_components/video-testimonials'); ?>
			<?php endif; ?>

		<?php elseif (get_row_layout() == 'google_reviews') :
			$reviews_option  = get_sub_field('reviews_option'); ?>

			<?php if ($reviews_option == 'standard') : ?>

				<div class="container py-4">
					<?php echo do_shortcode('[trustindex no-registration=google]'); ?>
				</div>

			<?php endif; ?>

			<?php if ($reviews_option == 'custom') : ?>

				<section class="google-review-section">
					<div class="container pt-5 d-none d-lg-block">
						<div class="row">
							<?php while (have_rows('google_reviews')) : the_row(); ?>
								<div class="col-12 col-md-6 col-lg-4 google-reviews">
									<div>
										<a href="https://www.lifestyledental.co.uk/dental-practice-reviews/">
											<img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/google-stars.png" alt="">
										</a>
										<span>
											<?php echo get_sub_field('date'); ?>
										</span>
									</div>
									<?php echo get_sub_field('review'); ?>
								</div>
							<?php endwhile; ?>
						</div>
					</div>


					<div class="container py-4 d-lg-none">
						<div class="slider">
							<?php while (have_rows('google_reviews')) : the_row(); ?>
								<div class="slide google-reviews">
									<div>
										<a>
											<img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/google-stars.png" alt="">
										</a>
										<span>
											<?php echo get_sub_field('date'); ?>
										</span>
									</div>
									<?php echo get_sub_field('review'); ?>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
					<div class="text-center mb-4">
						<a href="https://www.google.com/search?q=lifestyle+dental+practice&oq=lifestyle+dental+practice#lrd=0x487b7201a5d18db7:0x80ccbcf6f6f638f0,1,,," target="_blank">View Google Reviews</a>
					</div>
				</section>

			<?php endif; ?>

		<?php elseif (get_row_layout() == 'info_links') :
			$display_links  = get_sub_field('display_links'); ?>

			<?php if ($display_links == 'yes') : ?>

				<section>
					<div class="container py-5 info-links">
						<h3 class="mb-4">
							Want to find out more?
						</h3>
						<div class="row">
							<div class="col-12 col-md-4 info-link-images">
								<a href="https://www.lifestyledental.co.uk/preston-dental-fees-fulwood/">
									<img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/Special_offers.jpg" alt="">
									<div>
										Special Offers <i class="fas fa-arrow-right"></i>
									</div>
								</a>
							</div>
							<div class="col-12 col-md-4 info-link-images">
								<a href="https://www.lifestyledental.co.uk/about-preston-dentists/">
									<img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/Meet_our_team.jpg" alt="">
									<div>
										Meet Our Team <i class="fas fa-arrow-right"></i>
									</div>
								</a>
							</div>
							<div class="col-12 col-md-4 info-link-images">
								<a href="https://www.lifestyledental.co.uk/referrals/">
									<img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/Referral.jpg" alt="">
									<div>
										Do you have a referral? <i class="fas fa-arrow-right"></i>
									</div>
								</a>
							</div>
						</div>
					</div>
				</section>

			<?php endif ?>

		<?php elseif (get_row_layout() == 'team_block') :
			$members  	= get_sub_field('team_blocks'); ?>

			<section class="meet_the_team_block">
				<div class="container">
					<?php foreach ($members as $member) : ?>
						<?php $member_id = strtolower(str_replace(' ', '', $member['name'])); ?>
						<div class="team_member" id="<?php echo $member_id; ?>">
							<h3>
								<?php echo esc_html($member['name']); ?> - <span><?php echo esc_html($member['title']); ?></span>
							</h3>
							<?php if ($member['qualifications']) : ?>
								<p class="quals">
									<?php echo esc_html($member['qualifications']); ?>
								</p>
							<?php endif; ?>
							<div class="row">
								<?php if ($member['image']) : ?>
									<div class="col-12 col-md-4 text-center <?php echo ($member['image_position'] == 'right') ? 'order-md-1' : ''; ?>">
										<img src="<?php echo esc_url($member['image']['url']); ?>" alt="">
									</div>
								<?php endif; ?>
								<?php if ($member['body']) : ?>
									<div class="col-12 col-md-4">
										<?php echo wp_kses_post($member['body']); ?>
									</div>
								<?php endif; ?>
								<div class="col-12 col-md-4">
									<div class="info-box">
										<?php if ($member['info_box_title']) : ?>
											<h4>
												<?php echo esc_html($member['info_box_title']); ?>
											</h4>
										<?php endif; ?>
										<?php if ($member['info_box_body']) : ?>
											<?php echo wp_kses_post($member['info_box_body']); ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'table_block') :
			$col1Header  	= get_sub_field('column_1_header');
			$col2Header  	= get_sub_field('column_2_header');
			$col3Header  	= get_sub_field('column_3_header');
			$rows  			= get_sub_field('rows'); ?>


			<section class="table-block">
				<div class="container">
					<table>
						<thead class="<?php echo ($col2Header) ? 'three-cols' : 'two-cols' ?>">
							<tr>
								<?php if ($col1Header) : ?>
									<th>
										<h4><?php echo esc_html($col1Header); ?></h4>
									</th>
								<?php endif; ?>
								<?php if ($col2Header) : ?>
									<th>
										<h6><?php echo esc_html($col2Header); ?></h6>
									</th>
								<?php endif; ?>
								<?php if ($col3Header) : ?>
									<th>
										<h6><?php echo esc_html($col3Header); ?></h6>
									</th>
								<?php endif; ?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($rows as $row) : ?>
								<tr>
									<?php if ($row['column_1']) : ?>
										<td>
											<?php echo esc_html($row['column_1']); ?>
										</td>
									<?php endif; ?>
									<?php if ($row['column_2']) : ?>
										<td>
											<?php echo esc_html($row['column_2']); ?>
										</td>
									<?php endif; ?>
									<?php if ($row['column_3']) : ?>
										<td>
											<?php echo esc_html($row['column_3']); ?>
										</td>
									<?php endif; ?>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</section>


		<?php elseif (get_row_layout() == 'contact_form_banner') :
			$display_form  = get_sub_field('display_form'); ?>

			<?php if ($display_form == 'yes') : ?>

				<?php get_template_part('_components/footer-finance-form'); ?>

			<?php endif; ?>

		<?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

<script>
    let reviewsWidget = document.querySelector('.ti-widget');
    let reviewsBadges = document.querySelectorAll('[data-google-reviews-badge]');

    if (reviewsWidget && reviewsBadges.length > 0) {
        reviewsBadges.forEach(function(reviewsBadge){
            let avgReviewScore = reviewsWidget.querySelector('.ti-rating-text .nowrap:nth-child(2) strong');
            let totalReviews   = reviewsWidget.querySelector('.ti-rating-text .nowrap:nth-child(3) strong');

            if (avgReviewScore && totalReviews) {
                reviewsBadge.querySelector('[data-reviews-average-score]').innerHTML = avgReviewScore.innerText;
                reviewsBadge.querySelector('[data-reviews-reviews-count]').innerHTML = totalReviews.innerText;
            }
        });
    }
</script>

<?php get_footer(); ?>
