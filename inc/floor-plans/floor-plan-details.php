<div class="floorPlanDetailsOuter">
  <div class="floorPlanDetailsInner">
    <h5><?php the_title(); ?></h5>
    <div class="underline"></div>
    <p>
      Sqft: <?php echo get_field('square_footage'); ?><br>
      Bedrooms: <?php echo get_field('number_of_bedrooms'); ?><br>
      Full Bathrooms: <?php echo get_field('number_of_full_bathrooms'); ?><br>
      Half Bathrooms: <?php echo get_field('number_of_half_bathrooms'); ?><br>
      Stories: <?php echo get_field('number_of_stories'); ?><br>
      Garage Stalls: <?php echo get_field('number_of_garage_stalls'); ?>
    </p>
  </div>
</div>
