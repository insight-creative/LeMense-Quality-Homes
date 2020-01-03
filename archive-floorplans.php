<?php
/**
* The template for displaying archive pages
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package InsightCustom
*/
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main cd-main-content" role="main">
		<a id="main-content" tabindex="-1"></a>
		<section id="floorPlansHero" class="hero" data-aos="fade-in" data-aos-duration="1500">
			<div class="heroOverlay">
				<div class="overlayBorderOuter">
					<div class="overlayBorder"></div>
				</div>
			</div>
			<div class="headerOuterWrap">
				<div class="headerInnerWrap" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="500">
					<h1>Exclusive Floor Plans</h1>
					<div class="arrow">
						<?php get_template_part('/inc/svg-icons/chevron-down'); ?>
					</div>
				</div>
			</div>
		</section>
		<div class="pageContentContainer">
			<div class="navWidth">
				<section id="floorPlanIntro" class="paddedSection" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="1000">
					<div class="drywallBack paddedSection">
						<div class="titleWrap limitWidth">
							<h2>Browse our extensive library of original floor plans.</h2>
							<div class="underline"></div>
						</div>
						<p class="blockText limitWidth">
							All of our plans are arranged by style and square footage. Simply click on any of the thumbnail images below to see more details for each plan, or enter the number of bedrooms, bathrooms, stories and garage stalls to see floor plans that match your criteria.
						</p>
					</div>
				</section>
        <form>
          <div class="cd-filter-block">
            <div class="cd-filter-content">
              <div class="cd-select cd-filters">
                Bedroom
                <select class="filter" name="selectThis" id="selectThis">
                  <option value="">Choose an option</option>
                  <option value=".one-bedroom">1 Bedroom</option>
									<option value=".two-bedroom">2 Bedroom</option>
									<option value=".three-bedroom">3 Bedroom</option>
                  <option value=".four-bedroom">4 Bedroom</option>
									<option value=".five-bedroom">5 Bedroom</option>
                </select>
              </div> <!-- cd-select -->
            </div> <!-- cd-filter-content -->
            <div class="cd-filter-content">
              <div class="cd-select cd-filters">
                Bathroom
                <select class="filter" name="selectThis" id="selectThis">
                  <option value="">Choose an option</option>
                  <option value=".one-bathroom">1 Bathroom</option>
                  <option value=".two-bathroom">2 Bathroom</option>
                  <option value=".three-bathroom">3 Bathroom</option>
                </select>
              </div> <!-- cd-select -->
            </div> <!-- cd-filter-content -->
						<div class="cd-filter-content">
              <div class="cd-select cd-filters">
                Story
                <select class="filter" name="selectThis" id="selectThis">
                  <option value="">Choose an option</option>
                  <option value=".one-story">1 Story</option>
                  <option value=".two-story">2 Story</option>
                </select>
              </div> <!-- cd-select -->
            </div> <!-- cd-filter-content -->
            <div class="cd-filter-content">
              <div class="cd-select cd-filters">
                Garage
                <select class="filter" name="selectThis" id="selectThis">
                  <option value="">Choose an option</option>
                  <option value=".one-car-garage">1 Car Garage</option>
                  <option value=".two-car-garage">2 Car Garage</option>
                  <option value=".three-car-garage">3 Car Garage</option>
                </select>
              </div> <!-- cd-select -->
            </div> <!-- cd-filter-content -->
          </div> <!-- cd-filter-block -->
        </form>
      		<section class="cd-gallery">
      			<ul>
              <div class="floorPlanContainer">
                <?php
        					$the_query = new WP_Query( array(
        						'post_type' => 'Floor Plans',
        						'order' => 'DESC',
        						'posts_per_page' => 70,
        						)
        					);
        				while ( $the_query->have_posts() ) :
            		$the_query->the_post();
        				$img = get_the_post_thumbnail_url( $post_id, 'full' );
                ////////////////////////////////
        				// Get the category for the post
        				////////////////////////////////
        				$terms = get_the_terms( get_the_ID(), 'Floor Plan Categories' );
        				if ( $terms && ! is_wp_error( $terms ) ) :
        						$cat_links = array();
        						foreach ( $terms as $term ) {
        								$cat_links[] = $term->slug;
        						}
        				$custom_cat = join( " ", $cat_links );
        				?>
        				<?php endif; ?>
                <li class="mix <?php echo $custom_cat ?>">
        					<div class="floorPlanWrapper">
        						<a href="<?php the_permalink() ?>" class="mix <?php echo $custom_cat ?>">
                      <img src="<?php echo $img ?>" class="blockImage">
          						<div class="floorPlanInfoWrap">
                        <div class="floorPlanInfoWrapInner">
                          <h4><?php the_title(); ?></h4>
                          <div class="detailsContainer">
														<p>
															<?php if( get_field('square_footage') ):
															echo get_field('square_footage'); ?> Sqft.
															<?php endif; ?>
														</p>
														<p>
															<?php echo get_field('number_of_bedrooms'); ?> Bed | <?php echo get_field('number_of_full_bathrooms'); ?> Bath
														</p>
                          </div>
                          <div class="viewPlan">
                            <p>
                              View Home Design<span>View Home Design</span>
                            </p>
                          </div>
                        </div>
                      </div>
        						</a>
        					</div>
                </li>
                <?php endwhile; ?>
              </div>
      			</ul>
      			<div class="cd-fail-message">No results found<br><a href="/floor-plans/">Reset Filters</a></div>
      		</section> <!-- cd-gallery -->
			</div>
		</div>
	</main>
</div>

<?php
get_footer();
