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
							<h2>LeMense, Builder-of-all-Trades</h2>
							<div class="underline"></div>
						</div>
						<p class="blockText limitWidth">
							All of our expert services combined bring ideal efficiency, organization and ease to what's often
							known as a stressful process. Get a head start by selecting one of LeMense's original floor plans
							from an exclusive library of one-story and two-story options.
						</p>
					</div>
				</section>
				<section id="services"class="row">
					<div class="drywallBack paddedSection">
						<?php get_template_part('/inc/services'); ?>
					</div>
				</section>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
