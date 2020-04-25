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
		<?php get_template_part('/template-parts/hero'); ?>
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
