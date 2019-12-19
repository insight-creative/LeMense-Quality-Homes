<?php
/**
 * Template Name: Portfolio Template
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
    <section id="floorPlansHero" class="hero" data-aos="fade-in" data-aos-duration="1500">
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
        <?php
    		// check if the flexible content field has rows of data
    		if( have_rows('flexible_fields') ):
    	    // loop through the rows of data
    	    while ( have_rows('flexible_fields') ) : the_row();
    				///////////////////////////////////
    				// Simple One Column Block
    				//////////////////////////////////
    				if( get_row_layout() == 'one_column' ):
    					?>
    					<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection" style="background-color:<?php the_field('color'); ?>">
    						<?php
    						$col_1 = get_sub_field('col_content_1');
    						?>
    						<div class="pageWidth flexContainer centerAlignedContainer">
    							<?php
    							if( $col_1 ): ?>
    								<div class="limitWidth">
    									<div class="blockText">
    										<?php echo $col_1 ?>
    									</div>
    								</div>
    							<?php endif; ?>
    						</div>
    					</section>
    					<?php
              ///////////////////////////////////
      				// Simple Two Column Block
      				//////////////////////////////////
      				elseif( get_row_layout() == 'two_column' ):
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
    				endif;
    			endwhile;
    		endif;
    		?>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
