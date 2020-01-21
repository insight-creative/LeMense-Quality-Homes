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
				<section id="companyIntro" class="paddedSection">
					<div class="drywallBack paddedSection">
						<div class="titleWrap">
							<h2>Family Owned, Locally Known</h2>
							<div class="underline"></div>
						</div>
						<p class="blockText limitWidth">
							Since 2000, LeMense Quality Homes has built some of Northeast Wisconsin’s most incredible custom
							homes at an incredible value. As a family-owned business, Mark, alongside his wife, Shelly, manage the
							build process for each client from start to finish. Mark brings years of hands-on carpentry experience
							while Shelly contributes a detailed eye to project management and design. Known for their friendly
							approach and streamlined building process, the LeMenses offer custom building, interior design,
							remodeling, realty—even a library of exclusive floor plans—all from one local, trusted source. With
							valuable support from their crew of reliable subcontractors, plus their kids Jack, Bennett, Brenna
							and Kamden, the LeMense experience is affordable, easy and most importantly, feels like home.
						</p>
					</div>
				</section>
				<section id="theOwners" class="row flexContainer">
					<div class="col50">
						<div class="borderedImage" data-aos="fade-in">
							<?php
				        $image = get_field('mark');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage', 'data-sizes' => 'auto' ) );
				      ?>
							<div class="overlayBorderOuter">
								<div class="overlayBorder"></div>
							</div>
						</div>
						<div class="blockTextLimitWidth">
							<div class="titleWrap">
								<h4>Meet Mark LeMense</h4>
								<div class="underline"></div>
								<p>Mark’s wide-ranging experience dates back to his first job out of high school. Upon graduation, Mark spent over 10 years working at a local premier cabinet manufacturer. After gaining a strong foundation in carpentry and learning his way around a job site, Mark built his first spec house and discovered his true passion for home building. In 2000, he began LeMense Quality Homes and quickly grew to become one of the most popular luxury home builders in Green Bay. Today, Mark uses his deep understanding of the building process to identify what’s truly right for clients and steer the process accordingly. His sincere and outgoing personality helps clients feel a true sense of partnership while collaborating to build their dream home.</p>
							</div>
						</div>
					</div>
					<div class="col50">
						<div class="borderedImage" data-aos="fade-in">
							<?php
				        $image = get_field('shelly');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage', 'data-sizes' => 'auto' ) );
				      ?>
							<div class="overlayBorderOuter">
								<div class="overlayBorder"></div>
							</div>
						</div>
						<div class="blockTextLimitWidth">
							<div class="titleWrap">
								<h4>Meet Shelly LeMense</h4>
								<div class="underline"></div>
								<p>Those who know Shelly might say it’d be easier to list the things she doesn’t do. As a jack-of-all-trades, LeMense clients reap great rewards—including cost and time efficiencies—from Shelly’s multi-talented approach. After years working as a nurse, Shelly made a major career change to support the family business and then discovered her true calling. With an incredible eye for detail, great people skills, a knack for organization and natural artistic talent, Shelly touches most steps of the home-building process. From the job site to the office, Shelly confidently owns a myriad of responsibilities, including interior design! Also, as a licensed real estate agent, Shelly conveniently threads together the many components of building/selling, allowing clients to seamlessly transition into their new home.</p>
							</div>
						</div>
					</div>
				</section>
				<section id="testimonial" class="row">
					<div class="drywallBack testimonialWrapper paddedSection">
						<div class="pageWidth">
							<?php get_template_part("/inc/slider/testimonial-slider-2"); ?>
						</div>
					</div>
				</section>
			</div>
			<div class="row">
				<?php get_template_part('/inc/services'); ?>
			</div>
			<?php get_template_part("/inc/related-projects"); ?>
		</div>
	</main>
</div>
<?php
get_footer();
