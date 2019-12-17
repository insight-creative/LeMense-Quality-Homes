<div class="nav-links-container">
  <?php if( is_singular('portfolio') ) { ?>
  <div class="nav-links">
    <div class="col20">
      <div class="nav-previous">
        <?php previous_post_link( '%link', 'Previous Project' ) ?>
      </div>
    </div>
    <div class="col60 nav-back">
      <a href="/portfolio/" class="back">
        <?php get_template_part("/inc/svg-icons/table") ?>
        Back to all Projects
      </a>
    </div>
    <div class="col20">
      <div class="nav-next">
        <?php next_post_link( '%link', 'Next Project' ) ?>
      </div>
    </div>
  </div>
<?php } ?>
</div>
