<!--
  Create related projects
  -->
<section id="featuredPlans" class="gallery">
  <?php
    $the_query = new WP_Query( array(
      'post_type' => 'Floorplans',
      'order' => 'DESC',
      'posts_per_page' => 3,
      )
    );?>
    <div class="drywallBack paddedSection">
      <div class="titleWrap limitWidth">
        <h5 class="mediumHeading">Recently Added Floor Plans</h3>
        <div class="underline"></div>
      </div>
      <div class="flexContainer navWidth">
        <?php
          while ( $the_query->have_posts() ) :
          $the_query->the_post();
        ?>
        <div class="col30">
          <a href="<?php echo get_permalink(); ?>">
            <div class="galleryCoverOuter">
              <div class="galleryCover">
                  <?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
                <div class="overlayBorderOuter">
                  <div class="overlayBorder">
                    <div class="galleryTitleWrap">
                      <h6><?php echo get_the_title(); ?></h6>
                      <div class="underline"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</section>
