<div class="paddedSection">
  <div class="pageWidth centerText">
    <h2>Neutrals</h2>
  </div>
  <div class="pageWidth colorGrid wrappedFlexContainer">
  <?php if (get_field('neutral_color_1')): ?>
    <div class="perfundo">
    <a class="perfundo__link" href="#neutral-img1">
      <?php
      $imageID = get_field('neutral_color_1')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </a>
    <div id="neutral-img1" class="perfundo__overlay fadeIn">
      <figure class="perfundo__content perfundo__figure">
        <?php
        $imageID = get_field('neutral_color_1')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
        ?>
      </figure>
      <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
        <?php get_template_part('/inc/lightbox/close'); ?>
      </a>
      <a class="perfundo__next perfundo__control" href="#neutral-img2">
        <?php get_template_part('/inc/lightbox/next'); ?>
      </a>
    </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_2')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img2">
    <?php
    $imageID = get_field('neutral_color_2')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img2" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_2')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img3">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img1">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_3')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img3">
    <?php
    $imageID = get_field('neutral_color_3')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img3" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_3')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img4">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img2">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_4')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img4">
    <?php
    $imageID = get_field('neutral_color_4')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img4" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_4')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img5">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img3">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_5')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img5">
    <?php
    $imageID = get_field('neutral_color_5')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img5" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_5')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img6">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img4">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_6')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img6">
    <?php
    $imageID = get_field('neutral_color_6')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img6" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_6')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img7">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img5">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_7')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img7">
    <?php
    $imageID = get_field('neutral_color_7')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img7" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_7')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img8">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img6">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_8')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img8">
    <?php
    $imageID = get_field('neutral_color_8')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img8" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_8')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img9">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img7">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_9')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img9">
    <?php
    $imageID = get_field('neutral_color_9')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img9" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_9')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img10">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img8">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_10')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img10">
    <?php
    $imageID = get_field('neutral_color_10')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img10" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_10')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img11">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img9">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_11')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img11">
    <?php
    $imageID = get_field('neutral_color_11')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img11" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_11')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img12">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img10">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_12')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img12">
    <?php
    $imageID = get_field('neutral_color_12')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img12" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_12')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img13">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img11">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_13')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img13">
    <?php
    $imageID = get_field('neutral_color_13')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img13" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_13')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img14">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img12">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_14')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img14">
    <?php
    $imageID = get_field('neutral_color_14')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img14" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_14')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img15">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img13">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_15')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img15">
    <?php
    $imageID = get_field('neutral_color_15')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img15" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_15')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img16">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img14">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_16')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img16">
    <?php
    $imageID = get_field('neutral_color_16')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img16" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_16')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img17">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img15">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_17')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img17">
    <?php
    $imageID = get_field('neutral_color_17')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img17" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_17')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img18">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img16">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_18')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img18">
    <?php
    $imageID = get_field('neutral_color_18')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img18" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_18')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img19">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img17">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_19')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img19">
    <?php
    $imageID = get_field('neutral_color_19')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img19" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_19')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#neutral-img20">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img18">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('neutral_color_20')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#neutral-img20">
    <?php
    $imageID = get_field('neutral_color_20')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="neutral-img20" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('neutral_color_20')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#neutral-img19">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  </div>
</div>
