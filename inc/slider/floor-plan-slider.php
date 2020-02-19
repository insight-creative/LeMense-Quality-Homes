<div class="swiper-container-outer">
  <div class="swiper-container swiper2">
    <div class="swiper-button-wrap">
      <div class="swiper-button-prev"></div>
    </div>
    <div class="swiper-wrapper">
      <?php if( have_rows('floor_plan_images') ): ?>
  	  	<?php while( have_rows('floor_plan_images') ): the_row();
  	  		// vars
  	  		$img = get_sub_field('floor_plan_image');
  	  		?>
          <div class="swiper-slide">
            <div class="swiper-content">
              <div class="swiper-content-inner">
                <div>
                  <a href="<?php echo $img ?>" data-lity data-lity-target="<?php echo $img ?>">
                    <img src="<?php echo $img ?>" class="blockImage">
                  </a>
                </div>
              </div>
            </div>
          </div>
  	  	<?php endwhile; ?>
  	  <?php endif; ?>
    </div>
    <div class="swiper-button-wrap">
      <div class="swiper-button-next"></div>
    </div>
    <div class="swiperNavigationOuter">
      <div class="swiper-navigation">
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination2"></div>
      </div>
    </div>
  </div>
</div>
