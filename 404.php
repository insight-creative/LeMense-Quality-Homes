<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package InsightCustom
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="limitWidth">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="fourOhFour centerText titleWrap">404</h1>
					<div class="underline"></div>
					<h2 class="page-title">Oops! This page hasn't been built yet.</h2>
				</header><!-- .page-header -->
				<div class="page-content">
					<p>
						Start your custom home building journey back at the <a href="<?=site_url()?>">home page</a>, view some <a href="/floor-plans/">floor plans</a> or view some of featured projects below!
					</p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div>
		<?php get_template_part('/inc/related-projects'); ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
