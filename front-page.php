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
					<h1>Quality Custom Home Building<br>
					<span class="smallHeading">In Green Bay, WI</span></h1>
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
							<h2>A Better Building Process</h2>
							<div class="underline"></div>
						</div>
						<p class="blockText limitWidth">
							LeMense Quality Homes provides an unmatched home building experience in Northeast Wisconsin. Discover the ease of building your new home from scratch with confidence! Our streamlined process includes custom building, interior design, remodeling, realty—even a library of exclusive floor plans—allowing you to build an incredible home at an incredible value.
						</p>
					</div>
				</section>
				<section id="aboutTheOwners" class="row">
					<div class="col80 borderedImage wideImage">
						<?php
			        $image = get_field('shelly_and_mark');
			        $imageID = $image['ID'];
			        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage', 'data-sizes' => 'auto' ) );
			      ?>
						<div class="overlayBorderOuter">
							<div class="overlayBorder"></div>
						</div>
					</div>
					<div id="markShellyDesc" data-aos="fade-in" data-aos-offset="-350">
						<div class="col50">
							<div class="blueBack blockText">
								<h3 class="largeHeading">Local Expertise</h3>
								<div class="underline"></div>
								<p>
									Mark and Shelly LeMense are the dream team to create your dream home! Mark’s hands-on expertise, Shelly’s keen eye for detail, decades of combined experience—plus a local reputation for excellence—make them your ultimate building partners.
								</p>
								<div class="btnWrap">
									<a href="/about-us/" class="primaryBtnAlt">Learn More About Us<span>Learn More About Us</span></a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="services"class="row">
					<div class="drywallBack paddedSection">
						<?php get_template_part('/inc/services'); ?>
					</div>
				</section>
				<section id="recentWork" class="row">
					<h5 class="extraLargeHeading centerText">Recent Work</h5>
					<div class="workContainer">
						<div class="recentWorkWrap borderedImage" data-aos="fade-in">
							<?php
				        $image = get_field('featured_work_1');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage', 'data-sizes' => 'auto' ) );
				      ?>
							<div class="overlayBorderOuter">
								<div class="overlayBorder"></div>
							</div>
						</div>
						<div class="recentWorkWrap borderedImage" data-aos="fade-in">
							<?php
				        $image = get_field('featured_work_2');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage', 'data-sizes' => 'auto' ) );
				      ?>
							<div class="overlayBorderOuter">
								<div class="overlayBorder"></div>
							</div>
						</div>
						<div class="recentWorkWrap borderedImage" data-aos="fade-in">
							<?php
				        $image = get_field('featured_work_3');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage', 'data-sizes' => 'auto' ) );
				      ?>
							<div class="overlayBorderOuter">
								<div class="overlayBorder"></div>
							</div>
						</div>
						<div class="recentWorkWrap borderedImage" data-aos="fade-in">
							<?php
				        $image = get_field('featured_work_4');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage', 'data-sizes' => 'auto' ) );
				      ?>
							<div class="overlayBorderOuter">
								<div class="overlayBorder"></div>
							</div>
						</div>
					</div>
					<div class="centerBtn">
						<div class="btnWrap">
							<a href="/gallery/" class="primaryBtn">View More of Our Work<span>View More of Our Work</span></a>
						</div>
					</div>
				</section>
				<section id="testimonial" class="row">
					<div class="drywallBack testimonialWrapper paddedSection">
						<div class="pageWidth">
							<?php get_template_part("/inc/slider/testimonial-slider"); ?>
						</div>
					</div>
				</section>
				<section id="floorPlans" class="row">
					<div class="flexRight">
						<div class="col80 borderedImage wideImage">
							<?php
				        $image = get_field('floorplans_image');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage', 'data-sizes' => 'auto' ) );
				      ?>
							<div class="overlayBorderOuter">
								<div class="overlayBorder"></div>
							</div>
						</div>
					</div>
					<div id="floorPlanDesc" data-aos="fade-in" data-aos-offset="-350">
						<div class="col50">
							<div class="blueBack blockText">
								<h3 class="largeHeading">Build Inspiration</h3>
								<div class="underline"></div>
								<p>
									The building process can seem overwhelming at first. Our exclusive library of diverse floor plans will provide the inspiration you need to get started!
								</p>
								<div class="btnWrap">
									<a href="/floor-plans/" class="primaryBtnAlt">View our Floor Plans<span>View our Floor Plans</span></a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
