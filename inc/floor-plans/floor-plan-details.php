<div class="floorPlanDetailsOuter">
  <div class="floorPlanDetailsInner">
    <div class="titleWrap">
      <h5><?php the_title(); ?></h5>
      <div class="underline"></div>
    </div>
    <p class="detailWrapper">
      <span class="detail">
        <?php if( get_field('square_footage') ):?>
        <span class="brandText">
        <?php echo get_field('square_footage'); ?></span> Sqft.
        <?php endif; ?><br>
        <span class="brandText"><?php echo get_field('number_of_bedrooms'); ?></span> Bed
      </span>
      <span class="detail">
        <span class="brandText"><?php echo get_field('number_of_full_bathrooms'); ?></span> Full Bath<br>
        <span class="brandText"><?php echo get_field('number_of_half_bathrooms'); ?></span> Half Bath
      </span>
      <span class="detail">
        <span class="brandText"><?php echo get_field('number_of_stories'); ?></span> Story<br>
        <span class="brandText"><?php echo get_field('number_of_garage_stalls'); ?></span> Car Garage
      </span>
    </p>
  </div>
</div>
