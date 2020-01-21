<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id="pageContent">
			<div class="limitWidth paddedSection">
				<h1>Website Accessibility</h1>
				<p>
					<?php printf( get_bloginfo ( 'name' ) ); ?> is committed to the accessibility and
					usability all of its digital properties, for all people with disabilities.
				</p>
				<p>
					Our website is regularly tested using web accessibility technologies. Please be aware that our
					efforts are ongoing. If at any time you have specific questions or concerns about the accessibility
					of any particular page on this site, please fill out the form below and we will contact you. If you
					do encounter an accessibility issue, please be sure to specify the page/URL in your email, and we 
					will make all reasonable efforts to address your concerns.
				</p>
				<!-- Add Contact Form Here -->
				<?php echo do_shortcode('[caldera_form id="CF5e0a87254bfbb"]'); ?>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
