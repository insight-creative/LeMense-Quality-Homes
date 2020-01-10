<?php
/**
 * @package InsightCustom
 */
get_header();

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
		<section class="hero" data-aos="fade-in" data-aos-duration="1500" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position:center;">
			<div class="heroOverlay">
				<div class="overlayBorderOuter">
					<div class="overlayBorder"></div>
				</div>
			</div>
			<div class="headerOuterWrap">
				<div class="headerInnerWrap" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="500">
					<h1>Contact Us</h1>
					<div class="arrow">
						<?php get_template_part('/inc/svg-icons/chevron-down'); ?>
					</div>
				</div>
			</div>
		</section>
		<div class="pageContentContainer">
			<div class="navWidth flexContainer paddedSection">
				<div class="col50">
					<div class="formWrapOuter">
						<div class="formWrapInner">
							<h2 class="largeHeading">Are you ready to make your dream home a reality?</h2>
							<p>Let’s start planning! Please reach out by completing the form below with a brief description of the project you have in mind. </p>
							<?php echo do_shortcode('[caldera_form id="CF5e0a61e543770"]'); ?>
						</div>
					</div>
				</div>
				<div class="col50">
					<div class="contactWrapOuter">
						<div class="blockText">
							<h3>LeMense Quality Homes</h3>
							<p>
								3609 Glen Oaks Pass<br>
								Green Bay, WI 54311
							</p>
							<p>
								<span>Tel:</span> <a href="tel:920-609-3575">(920) 609-3575</a><br>
								<span>Fax:</span> (920) 544-8900<br>
								<a href="mailto:lemensequalityhomes@icloud.com">Email Us</a>
							</p>
							<div class="contactTestimonial drywallBack">
								<div class="contactTestimonialInner">
									We were referred to Mark and Shelly via friends who had a great experience building with the LeMenses. As stressful a process as building a home can be, Mark and Shelly made it as stress-free and as enjoyable experience as possible. They were also very transparent in all costs. We not only received a beautiful, well-built house but we also acquired lifetime friends!
									<div class="centerText">
			              <div class="underline"></div>
			              <h6>Kevin and Becky Baranczyk</h6>
			            </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
