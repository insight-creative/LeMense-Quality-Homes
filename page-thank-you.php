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
			<div class="navWidth paddedSection">
				<section id="thankYou" class="paddedSection">
					<div class="drywallBack paddedSection">
						<div class="titleWrap limitWidth">
							<h2>Thank you for your interest in our work!</h2>
							<div class="underline"></div>
						</div>
						<p class="blockText limitWidth">
						We'll get back to you as soon as we can. In the meantime, browse some of our featured projects below. We look forward to working with you!
						</p>
					</div>
				</section>
			</div>
			<?php get_template_part('/inc/related-projects'); ?>
		</div>
	</main>
</div>
<?php
get_footer();
