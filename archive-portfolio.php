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
			<div class="navWidth">
				<section id="galleryIntro" class="paddedSection">
					<div class="drywallBack paddedSection">
						<div class="titleWrap limitWidth">
							<h2>Browse our gallery of recently completed homes to gain inspiration.</h2>
							<div class="underline"></div>
						</div>
					</div>
				</section>
				<section id="portfolioArchive" class="gallery container">
					<div class="drywallBack paddedSection">
						<div class="wrappedFlexContainer">
							<?php if ( have_posts() ) : ?>
								<?php
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();
									/*
									 * Include the Post-Type-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_type() );
								endwhile;
								the_posts_pagination();
							else :
								get_template_part( 'template-parts/content', 'none' );
							endif;
							?>
						</div>
					</div>
				</section>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
