<?php
/**
 * Template Name: Portfolio Template
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
					<h1><?php the_title(); ?></h1>
					<p class="smallHeading"><?php if( get_field('square_footage') ): echo get_field('square_footage'); ?> Sqft. | <?php endif; ?><?php echo get_field('number_of_bedrooms'); ?> Bed | <?php echo get_field('number_of_full_bathrooms'); ?> Bath</p>
					<div class="arrow">
						<?php get_template_part('/inc/svg-icons/chevron-down'); ?>
					</div>
				</div>
			</div>
		</section>
		<div class="pageContentContainer">
			<div id="floorPlans" class="floorPlan navWidth paddedSection">
				<div class="flexContainer">
					<div class="col70">
						<?php get_template_part('/inc/slider/floor-plan-slider'); ?>
						<?php get_template_part('/inc/floor-plans/floor-plan-details'); ?>
					</div>
					<div class="col30">
						<?php get_template_part('/inc/floor-plans/floor-plan-cta'); ?>
					</div>
				</div>
			</div>
			<?php get_template_part("/inc/floor-plans/custom-post-nav"); ?>
			<?php get_template_part("/inc/floor-plans/related-floor-plans"); ?>
		</div>
	</main>
</div>
<?php
get_footer();
