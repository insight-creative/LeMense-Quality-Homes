<?php
/**
* The template for displaying archive pages
* Template Name: Floor Plans Archive
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package changeCatalystResponsive
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
					<h1>Floor Plans</h1>
					<div class="arrow">
						<?php get_template_part('/inc/svg-icons/chevron-down'); ?>
					</div>
				</div>
			</div>
		</section>
		<div class="pageContentContainer">
			<div class="navWidth paddedSection">
        <form>
          <div class="cd-filter-block">
            <div class="cd-filter-content">
              <div class="cd-select cd-filters">
                Bedrooms
                <select class="filter" name="selectThis" id="selectThis">
                  <option value="">Choose an option</option>
                  <option value=".one-bedroom">One Bedroom</option>
                  <option value=".two-bedroom">Two Bedroom</option>
									<option value=".three-bedroom">Three Bedroom</option>
                  <option value=".four-bedroom">Four Bedroom</option>
                </select>
              </div> <!-- cd-select -->
            </div> <!-- cd-filter-content -->
            <div class="cd-filter-content">
              <div class="cd-select cd-filters">
                Bathrooms
                <select class="filter" name="selectThis" id="selectThis">
                  <option value="">Choose an option</option>
                  <option value=".one-bathroom">One Bathroom</option>
                  <option value=".two-bathroom">Two Bathroom</option>
                  <option value=".three-bathroom">Three Bathroom</option>
                </select>
              </div> <!-- cd-select -->
            </div> <!-- cd-filter-content -->
						<div class="cd-filter-content">
              <div class="cd-select cd-filters">
                Stories
                <select class="filter" name="selectThis" id="selectThis">
                  <option value="">Choose an option</option>
                  <option value=".one-story">One Story</option>
                  <option value=".two-story">Two Story</option>
                </select>
              </div> <!-- cd-select -->
            </div> <!-- cd-filter-content -->
            <div class="cd-filter-content">
              <div class="cd-select cd-filters">
                Garage Stalls
                <select class="filter" name="selectThis" id="selectThis">
                  <option value="">Choose an option</option>
                  <option value=".one-car-garage">One Car Garage</option>
                  <option value=".two-car-garage">Two Car Garage</option>
                  <option value=".three-car-garage">Three Car Garage</option>
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
        						'posts_per_page' => 10,
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
															2002 Sq. Ft.
														</p>
														<p>
															2 Bed | 2 Bath
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
      			<div class="cd-fail-message">No results found</div>
      		</section> <!-- cd-gallery -->
			</div>
		</div>
	</main>
</div>

<?php
get_footer();
