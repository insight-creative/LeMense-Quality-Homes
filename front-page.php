<?php
/**
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<section id="home" class="hero">
			<div class="heroOverlay">
				<div class="overlayBorderOuter">
					<div class="overlayBorder"></div>
				</div>
			</div>
			<div class="headerOuterWrap">
				<div class="headerInnerWrap">
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
				<section id="companyIntro" class="paddedSection">
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
					<div class="col80 borderedImage">
						<?php
				        $image = get_field('shelly_and_mark');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image logo', 'data-sizes' => 'auto' ) );
				      ?>
						<div class="overlayBorderOuter">
							<div class="overlayBorder"></div>
						</div>
					</div>
					<div id="markShellyDesc" data-aos="fade-up">
						<div class="col50">
							<div class="floorplanBack blockText">
								<h3 class="largeHeading">Local Expertise</h3>
								<div class="underline"></div>
								<p>
									Mark and Shelly LeMense are the dream team to create your dream home! Mark’s hands-on expertise, Shelly’s keen eye for detail, decades of combined experience—plus a local reputation for excellence—make them your ultimate building partners.
								</p>
								<div class="btnWrap">
									<a href="/about-us/" class="primaryBtn">Learn More About Us</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<?php
		// check if the flexible content field has rows of data
		if( have_rows('flexible_fields') ):
	    // loop through the rows of data
	    while ( have_rows('flexible_fields') ) : the_row();
				///////////////////////////////////
				// Simple Two Column Block
				//////////////////////////////////
				if( get_row_layout() == 'two_column' ):
					?>
					<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection">
						<?php
						$col_1 = get_sub_field('col_content_1');
						$col_2 = get_sub_field('col_content_2');
						?>
						<div class="pageWidth flexContainer centerAlignedContainer">
							<?php
							if( $col_1 ): ?>
								<div class="col50">
									<div class="blockText">
										<?php echo $col_1 ?>
									</div>
								</div>
							<?php endif;
							if( $col_2 ): ?>
								<div class="col50">
									<div class="blockText">
										<?php echo $col_2 ?>
									</div>
								</div>
							<?php
							endif;
							?>
						</div>
					</section>
					<?php
					///////////////////////////////////
					// Simple Three Column Block
					//////////////////////////////////
					elseif( get_row_layout() == 'three_column' ):
					?>
					<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection">
					<?php
					if(get_sub_field('section_title')):
					?>
					<div class="pageWidth">
		        <?php echo get_sub_field('section_title'); ?>
		      </div>
					<?php endif; ?>
						<?php
							$col_1 = get_sub_field('col_content_1');
							$col_2 = get_sub_field('col_content_2');
							$col_3 = get_sub_field('col_content_3');
						?>
						<div class="pageWidth flexContainer">
						<?php
							if( $col_1 ): ?>
								<div class="col30">
									<div class="blockText">
										<?php echo $col_1 ?>
									</div>
								</div>
							<?php endif;
							if( $col_2 ): ?>
								<div class="col30">
									<div class="blockText">
										<?php echo $col_2 ?>
									</div>
								</div>
							<?php endif;
							if( $col_3 ): ?>
								<div class="col30">
									<div class="blockText">
										<?php echo $col_3 ?>
									</div>
								</div>
							<?php
							endif;
							?>
						</div>
					</section>
					<?php
					///////////////////////////////////
					// Testimonial
					//////////////////////////////////
					elseif( get_row_layout() == 'testimonial' ):
					$testimonial = get_sub_field('testimonial_contents');
					?>
					<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection testimonial">
					  <div class="limitWidth">
					    <div class="blockText greenBorder centerText">
								<?php echo $testimonial ?>
							</div>
					  </div>
					</section>
					<?php
				endif;
			endwhile;
		endif;
		?>
	</main>
</div>
<?php
get_footer();
