<?php
/**
 * @package InsightCustom
 */
get_header();

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<?php get_template_part('/template-parts/hero'); ?>
		<div class="pageContentContainer">
			<div class="navWidth flexContainer paddedSection">
				<div class="col50">
					<div class="formWrapOuter">
						<div class="formWrapInner">
							<h2 class="largeHeading">Are you ready to make your dream home a reality?</h2>
							<p>Let’s start planning! Please reach out by completing the form below with a brief description of
								the project you have in mind. </p>
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
								<span>Fax: (920) 544-8900</span><br>
								<a href="mailto:lemensequalityhomes@icloud.com">Email Us</a>
							</p>
							<div class="contactTestimonial drywallBack">
								<div class="contactTestimonialInner">
									We were referred to Mark and Shelly via friends who had a great experience building with the LeMenses.
									As stressful a process as building a home can be, Mark and Shelly made it as stress-free and as
									enjoyable an experience as possible. They were also very transparent in all costs. We not only received
									a beautiful, well-built house, but we also acquired lifetime friends!
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
