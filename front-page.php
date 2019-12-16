<?php
/**
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<section id="home" class="hero" data-aos="fade-in" data-aos-duration="1500">
			<div class="heroOverlay">
				<div class="overlayBorderOuter">
					<div class="overlayBorder"></div>
				</div>
			</div>
			<div class="headerOuterWrap">
				<div class="headerInnerWrap" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="500">
					<h1>Quality Custom Home Building</h1>
					<p class="smallHeading">In Green Bay, WI</p>
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
							<h2>A Better Building Process</h2>
							<div class="underline"></div>
						</div>
						<p class="blockText">
							LeMense Quality Homes provides an unmatched home building experience in northeast Wisconsin. Discover the ease of building your new home from scratch with confidence! Our streamlined process includes custom building, interior design, remodeling, realty—even a library of exclusive floor plans—allowing you to build an incredible home at an incredible value.
						</p>
					</div>
				</section>
				<section id="aboutTheOwners" class="row">
					<div class="col80 borderedImage wideImage">
						<?php
			        $image = get_field('shelly_and_mark');
			        $imageID = $image['ID'];
			        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image logo', 'data-sizes' => 'auto' ) );
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
						<h3 class="largeHeading centerText">All-inclusive Services</h3>
						<div class="pageWidth servicesContainer" data-aos="fade-in">
							<div class="serviceWrapper">
								<a href="/services/custom-building/">
									<div class="serviceWrapperInner">
										<h4>Custom Building</h4>
										<p>
											Let us guide you every step of the way to build the perfect home outfitted for your family’s unique needs.
										</p>
										<p>Learn More <?php get_template_part("/inc/svg-icons/arrow-right"); ?></p>
									</div>
								</a>
							</div>
							<div class="serviceWrapper">
								<a href="/services/interior-design/">
									<div class="serviceWrapperInner">
										<h4>Interior Design</h4>
										<p>
											Included with your building plans, our interior designer can help you make decisions and achieve the stunning cohesive home in your mind.
										</p>
										<p>Learn More <?php get_template_part("/inc/svg-icons/arrow-right"); ?></p>
									</div>
								</a>
							</div>
							<div class="serviceWrapper">
								<a href="/services/licensed-realty/">
									<div class="serviceWrapperInner">
										<h4>Licensed Realty</h4>
										<p>
											By timing the sale of your existing home with the completion of your new home, our on-staff realtor has the ability to make your
											move seamless.
										</p>
										<p>Learn More <?php get_template_part("/inc/svg-icons/arrow-right"); ?></p>
									</div>
								</a>
							</div>
							<div class="serviceWrapper">
								<a href="/services/remodeling/">
									<div class="serviceWrapperInner">
										<h4>Remodeling</h4>
										<p>
											Whether you have an unfinished basement or other area in need of an update, our crew can bring their experience and talents to your existing home.
										</p>
										<p>Learn More <?php get_template_part("/inc/svg-icons/arrow-right"); ?></p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</section>
				<section id="recentWork" class="row">
					<h5 class="largeHeading centerText">Recent Work</h5>
					<div class="workContainer">
						<div class="recentWorkWrap borderedImage" data-aos="fade-in">
							<?php
				        $image = get_field('featured_work_1');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image logo', 'data-sizes' => 'auto' ) );
				      ?>
							<div class="overlayBorderOuter">
								<div class="overlayBorder"></div>
							</div>
						</div>
						<div class="recentWorkWrap borderedImage" data-aos="fade-in">
							<?php
				        $image = get_field('featured_work_2');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image logo', 'data-sizes' => 'auto' ) );
				      ?>
							<div class="overlayBorderOuter">
								<div class="overlayBorder"></div>
							</div>
						</div>
						<div class="recentWorkWrap borderedImage" data-aos="fade-in">
							<?php
				        $image = get_field('featured_work_3');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image logo', 'data-sizes' => 'auto' ) );
				      ?>
							<div class="overlayBorderOuter">
								<div class="overlayBorder"></div>
							</div>
						</div>
						<div class="recentWorkWrap borderedImage" data-aos="fade-in">
							<?php
				        $image = get_field('featured_work_4');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image logo', 'data-sizes' => 'auto' ) );
				      ?>
							<div class="overlayBorderOuter">
								<div class="overlayBorder"></div>
							</div>
						</div>
					</div>
					<div class="centerBtn">
						<div class="btnWrap">
							<a href="/about-us/" class="primaryBtn">View More of Our Work<span>View More of Our Work</span></a>
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
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image logo', 'data-sizes' => 'auto' ) );
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
