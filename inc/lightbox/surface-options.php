<div class="pageWidth centerText">
  <h2>Surface Options</h2>
  <div class="limitWidth centerText">
    <p><?php the_field('surface_description'); ?></p>
  </div>
</div>
<div class="pageWidth colorGrid wrappedFlexContainer">
<?php if (get_field('surface_option_1')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#surface-img1">
    <?php
    $imageID = get_field('surface_option_1')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="surface-img1" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('surface_option_1')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#surface-img2">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
  </div>
</div>
<?php endif;?>
<?php if (get_field('surface_option_2')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#surface-img1">
  <?php
  $imageID = get_field('surface_option_2')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="surface-img2" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('surface_option_2')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#surface-img3">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#surface-img1">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('surface_option_3')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#surface-img1">
  <?php
  $imageID = get_field('surface_option_3')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="surface-img3" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('surface_option_3')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#surface-img4">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#surface-img2">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('surface_option_4')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#surface-img4">
  <?php
  $imageID = get_field('surface_option_4')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="surface-img4" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('surface_option_4')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#surface-img5">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#surface-img3">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('surface_option_5')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#surface-img5">
  <?php
  $imageID = get_field('surface_option_5')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="surface-img5" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('surface_option_5')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#surface-img4">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
</div>
</div>
