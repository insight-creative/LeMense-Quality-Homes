<?php
/**
 * Template Name: Services
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
				<section id="serviceIntro" class="paddedSection">
					<div class="drywallBack paddedSection">
						<div class="blockText limitWidth">
							<?php
							while ( have_posts() ) :
								the_post();
								the_content();
							endwhile; // End of the loop.
							?>
						</div>
					</div>
				</section>
			</div>
			<?php get_template_part("/inc/related-projects"); ?>
		</div>
	</main>
</div>
<?php
get_footer();
