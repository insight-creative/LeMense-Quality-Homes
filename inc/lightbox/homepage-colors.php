<div class="pageWidth colorGrid wrappedFlexContainer">
  <div class="perfundo">
  <a class="perfundo__link" href="#perfundo-img1">
    <?php
    $imageID = get_field('color_swatch_1')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="perfundo-img1" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('color_swatch_1')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#perfundo-img2">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
  </div>
</div>
<div class="perfundo">
<a class="perfundo__link" href="#perfundo-img2">
  <?php
  $imageID = get_field('color_swatch_2')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="perfundo-img2" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('color_swatch_2')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#perfundo-img3">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#perfundo-img1">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<div class="perfundo">
<a class="perfundo__link" href="#perfundo-img3">
  <?php
  $imageID = get_field('color_swatch_3')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="perfundo-img3" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('color_swatch_3')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#perfundo-img4">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#perfundo-img2">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<div class="perfundo">
<a class="perfundo__link" href="#perfundo-img4">
  <?php
  $imageID = get_field('color_swatch_4')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="perfundo-img4" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('color_swatch_4')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#perfundo-img5">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#perfundo-img3">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<div class="perfundo">
<a class="perfundo__link" href="#perfundo-img5">
  <?php
  $imageID = get_field('color_swatch_5')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="perfundo-img5" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('color_swatch_5')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#perfundo-img6">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#perfundo-img4">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<div class="perfundo">
<a class="perfundo__link" href="#perfundo-img6">
  <?php
  $imageID = get_field('color_swatch_6')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="perfundo-img6" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('color_swatch_6')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#perfundo-img7">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#perfundo-img5">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<div class="perfundo">
<a class="perfundo__link" href="#perfundo-img7">
  <?php
  $imageID = get_field('color_swatch_7')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="perfundo-img7" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('color_swatch_7')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#perfundo-img8">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#perfundo-img6">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<div class="perfundo">
<a class="perfundo__link" href="#perfundo-img8">
  <?php
  $imageID = get_field('color_swatch_8')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="perfundo-img8" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('color_swatch_8')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#perfundo-img9">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#perfundo-img7">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<div class="perfundo">
<a class="perfundo__link" href="#perfundo-img9">
  <?php
  $imageID = get_field('color_swatch_9')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="perfundo-img9" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('color_swatch_9')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#perfundo-img10">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#perfundo-img8">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<div class="perfundo">
<a class="perfundo__link" href="#perfundo-img10">
  <?php
  $imageID = get_field('color_swatch_10')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="perfundo-img10" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('color_swatch_10')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#perfundo-img11">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#perfundo-img9">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<div class="perfundo">
<a class="perfundo__link" href="#perfundo-img11">
  <?php
  $imageID = get_field('color_swatch_11')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="perfundo-img11" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('color_swatch_11')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#perfundo-img12">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#perfundo-img10">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<div class="perfundo">
<a class="perfundo__link" href="#perfundo-img12">
  <?php
  $imageID = get_field('color_swatch_12')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="perfundo-img12" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('color_swatch_12')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#perfundo-img11">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
</div>
