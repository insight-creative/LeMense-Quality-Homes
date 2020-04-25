<?php
/**
 * Template Name: Gallery Template
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<?php get_template_part('/template-parts/hero'); ?>
		<div class="pageContentContainer">
			<div class="navWidth">
				<section class="paddedSection">
					<div class="drywallBack paddedSection galleryImageWrap">
		        <?php get_template_part('/inc/flexible-gallery'); ?>
					</div>
					<?php get_template_part('/inc/simple-cta'); ?>
				</section>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
