<section id="featuredProjects" class="gallery">
  <div class="drywallBack paddedSection">
    <div class="titleWrap limitWidth">
      <h3>Featured Projects</h3>
      <div class="underline"></div>
    </div>
    <div class="flexContainer navWidth">
      <?php
        $the_query = new WP_Query( array(
          'post_type' => 'Portfolio',
          'order' => 'DESC',
          'posts_per_page' => 3,
          )
        );
        while ( $the_query->have_posts() ) :
        $the_query->the_post();
        $background = get_the_post_thumbnail_url( $post_id, 'full' );
      ?>
      <div class="col30">
        <a href="<?php the_permalink() ?>">
          <div class="galleryCoverOuter">
            <div class="galleryCover">
                <?php the_post_thumbnail() ?>
              <div class="overlayBorderOuter">
                <div class="overlayBorder">
                  <div class="galleryTitleWrap">
                    <h2><?php the_title(); ?></h2>
                    <div class="underline"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php endwhile; ?>
    </div>
  </div>
</section>
