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
					<h1><?php the_title(); ?></h1>
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
							<h2>Relationships Built to Last</h2>
							<div class="underline"></div>
						</div>
						<p class="blockText">
						Our homes are built on mutual respect and customer satisfaction. When a job is complete, we’re always proud to add another beautiful home to our gallery, but we’re equally proud of the relationships we’ve built along the way. Read testimonials from real clients below.
						</p>
					</div>
				</section>
				<section id="testimonials" class="row">
					<?php
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile; // End of the loop.
					?>
				</section>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
