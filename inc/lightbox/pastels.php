<div class="pageWidth centerText">
  <h2>Fun Colors</h2>
</div>
<div class="pageWidth colorGrid wrappedFlexContainer">
<?php if (get_field('pastel_color_1')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#pastel-img1">
    <?php
    $imageID = get_field('pastel_color_1')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="pastel-img1" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('pastel_color_1')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#pastel-img2">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
  </div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_2')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img2">
  <?php
  $imageID = get_field('pastel_color_2')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img2" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_2')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img3">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img1">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_3')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img3">
  <?php
  $imageID = get_field('pastel_color_3')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img3" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_3')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img4">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img2">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_4')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img4">
  <?php
  $imageID = get_field('pastel_color_4')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img4" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_4')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img5">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img3">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_5')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img5">
  <?php
  $imageID = get_field('pastel_color_5')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img5" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_5')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img6">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img4">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_6')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img6">
  <?php
  $imageID = get_field('pastel_color_6')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img6" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_6')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img7">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img5">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_7')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img7">
  <?php
  $imageID = get_field('pastel_color_7')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img7" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_7')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img8">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img6">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_8')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img8">
  <?php
  $imageID = get_field('pastel_color_8')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img8" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_8')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img9">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img7">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_9')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img9">
  <?php
  $imageID = get_field('pastel_color_9')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img9" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_9')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img10">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img8">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_10')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img10">
  <?php
  $imageID = get_field('pastel_color_10')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img10" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_10')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img11">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img9">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_11')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img11">
  <?php
  $imageID = get_field('pastel_color_11')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img11" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_11')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img12">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img10">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_12')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img11">
  <?php
  $imageID = get_field('pastel_color_12')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img12" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_12')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img13">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img11">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_13')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img13">
  <?php
  $imageID = get_field('pastel_color_13')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img13" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_13')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img14">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img12">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_14')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img14">
  <?php
  $imageID = get_field('pastel_color_14')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img14" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_14')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img15">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img13">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_15')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img11">
  <?php
  $imageID = get_field('pastel_color_15')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img15" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_15')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img16">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img14">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_16')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img16">
  <?php
  $imageID = get_field('pastel_color_16')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img16" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_16')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img17">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img15">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_17')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img17">
  <?php
  $imageID = get_field('pastel_color_17')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img17" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_17')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img18">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img16">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_18')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img18">
  <?php
  $imageID = get_field('pastel_color_18')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img18" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_18')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img19">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img17">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_19')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img19">
  <?php
  $imageID = get_field('pastel_color_19')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img19" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_19')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__next perfundo__control" href="#pastel-img20">
    <?php get_template_part('/inc/lightbox/next'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img18">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
<?php if (get_field('pastel_color_20')): ?>
<div class="perfundo">
<a class="perfundo__link" href="#pastel-img20">
  <?php
  $imageID = get_field('pastel_color_20')['ID'];
  echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
  ?>
</a>
<div id="pastel-img20" class="perfundo__overlay fadeIn">
  <figure class="perfundo__content perfundo__figure">
    <?php
    $imageID = get_field('pastel_color_20')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </figure>
  <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
    <?php get_template_part('/inc/lightbox/close'); ?>
  </a>
  <a class="perfundo__prev perfundo__control" href="#pastel-img19">
    <?php get_template_part('/inc/lightbox/prev'); ?>
  </a>
</div>
</div>
<?php endif;?>
</div>
