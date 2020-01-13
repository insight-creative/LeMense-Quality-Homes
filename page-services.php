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
					<h1>Services</h1>
					<div class="arrow">
						<?php get_template_part('/inc/svg-icons/chevron-down'); ?>
					</div>
				</div>
			</div>
		</section>
		<div class="pageContentContainer">
			<div class="navWidth">
				<section id="companyIntro" class="paddedSection" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="1000">
					<div class="drywallBack paddedSection">
						<div class="titleWrap">
							<h2>LeMense, Builder-of-all-trades</h2>
							<div class="underline"></div>
						</div>
						<p class="blockText limitWidth">
							All of our expert services combined bring ideal efficiency, organization and ease to what's often known as a stressful process. Get a head start by selecting one of LeMense's original floor plans from an exclusive library of one-story and two-story options.
						</p>
					</div>
				</section>
				<section id="services"class="row">
					<div class="drywallBack paddedSection">
						<?php get_template_part('/inc/services'); ?>
					</div>
				</section>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
