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
		<?php get_template_part('/template-parts/hero'); ?>
		<div class="pageContentContainer">
			<div class="navWidth">
				<section class="paddedSection">
					<div id="portfolio" class="paddedSection drywallBack">
		        <?php get_template_part('/inc/flexible-columns'); ?>
					</div>
				</section>
			</div>
			<?php get_template_part("/inc/portfolio/custom-post-nav"); ?>
			<?php get_template_part("/inc/related-projects"); ?>
		</div>
	</main>
</div>
<?php
get_footer();
