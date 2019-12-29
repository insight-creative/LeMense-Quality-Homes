<div class="nav-links-container drywallBack">
  <?php if( is_singular('floorplans') ) { ?>
  <div class="nav-links navWidth">
    <div class="col25">
      <?php
      $prev_post = get_next_post();
      if ( ! empty( $prev_post ) ): ?>
      <div class="nav-previous">
         <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
           <?php get_template_part("/inc/svg-icons/chevron-left"); ?>
           Previous Plan
         </a>
      </div>
      <?php endif; ?>
    </div>
    <div class="col50 nav-back">
      <a href="/floor-plans/" class="back">
        <?php get_template_part("/inc/svg-icons/table") ?>
        Back to all Floor Plans
      </a>
    </div>
    <div class="col25">
      <?php
      $next_post = get_previous_post();
      if ( ! empty( $next_post ) ): ?>
      <div class="nav-next">
         <a href="<?php echo get_permalink( $next_post->ID ); ?>">
           Next Plan
           <?php get_template_part("/inc/svg-icons/chevron-right"); ?>
         </a>
      </div>
      <?php endif; ?>
    </div>
  </div>
<?php } ?>
</div>
