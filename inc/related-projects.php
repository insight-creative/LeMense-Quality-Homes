<!--
  Create related projects
  -->
<section id="featuredProjects" class="gallery">
  <?php
  $post_objects = get_field('related_post');
  if( $post_objects ): ?>
  <div class="drywallBack paddedSection">
    <div class="titleWrap limitWidth">
      <h5 class="mediumHeading">Featured Projects</h3>
      <div class="underline"></div>
    </div>
    <div class="flexContainer navWidth">
      <?php foreach( $post_objects as $post_object): ?>
      <div class="col30">
        <a href="<?php echo get_permalink($post_object->ID); ?>">
          <div class="galleryCoverOuter">
            <div class="galleryCover">
                <?php echo get_the_post_thumbnail( $post_object->ID, 'full' ); ?>
              <div class="overlayBorderOuter">
                <div class="overlayBorder">
                  <div class="galleryTitleWrap">
                    <h6><?php echo get_the_title($post_object->ID); ?></h6>
                    <div class="underline"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
    <?php else:
      $the_query = new WP_Query( array(
        'post_type' => 'Portfolio',
        'order' => 'DESC',
        'posts_per_page' => 3,
        )
      );?>
      <div class="drywallBack paddedSection">
        <div class="titleWrap limitWidth">
          <h5 class="mediumHeading">Featured Projects</h3>
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
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
