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
				<section id="companyIntro" class="paddedSection">
					<div class="drywallBack paddedSection">
						<div class="titleWrap">
							<h2>Relationships Built to Last</h2>
							<div class="underline"></div>
						</div>
						<p class="blockText limitWidth">
						Our homes are built on mutual respect and customer satisfaction. When a job is complete, we’re always proud to add another beautiful home to our gallery, but we’re equally proud of the relationships we’ve built along the way. Read testimonials from real clients below.
						</p>
					</div>
				</section>
				<section id="testimonials" class="limitWidth">
					<?php
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile; // End of the loop.
					?>
				</section>
				<section id="cta" class="paddedSection">
					<?php get_template_part('/inc/simple-cta'); ?>
				</section>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
