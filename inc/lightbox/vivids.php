<div class="paddedSection">
  <div class="pageWidth centerText">
    <h2>Vivids</h2>
  </div>
  <div class="pageWidth colorGrid wrappedFlexContainer">
  <?php if (get_field('vivid_color_1')): ?>
    <div class="perfundo">
    <a class="perfundo__link" href="#vivid-img1">
      <?php
      $imageID = get_field('vivid_color_1')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </a>
    <div id="vivid-img1" class="perfundo__overlay fadeIn">
      <figure class="perfundo__content perfundo__figure">
        <?php
        $imageID = get_field('vivid_color_1')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
        ?>
      </figure>
      <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
        <?php get_template_part('/inc/lightbox/close'); ?>
      </a>
      <a class="perfundo__next perfundo__control" href="#vivid-img2">
        <?php get_template_part('/inc/lightbox/next'); ?>
      </a>
    </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_2')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img2">
    <?php
    $imageID = get_field('vivid_color_2')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img2" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_2')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img3">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img1">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_3')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img3">
    <?php
    $imageID = get_field('vivid_color_3')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img3" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_3')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img4">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img2">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_4')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img4">
    <?php
    $imageID = get_field('vivid_color_4')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img4" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_4')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img5">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img3">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_5')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img5">
    <?php
    $imageID = get_field('vivid_color_5')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img5" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_5')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img6">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img4">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_6')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img6">
    <?php
    $imageID = get_field('vivid_color_6')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img6" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_6')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img7">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img5">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_7')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img7">
    <?php
    $imageID = get_field('vivid_color_7')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img7" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_7')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img8">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img6">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_8')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img8">
    <?php
    $imageID = get_field('vivid_color_8')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img8" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_8')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img9">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img7">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_9')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img9">
    <?php
    $imageID = get_field('vivid_color_9')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img9" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_9')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img10">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img8">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_10')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img10">
    <?php
    $imageID = get_field('vivid_color_10')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img10" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_10')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img11">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img9">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_11')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img11">
    <?php
    $imageID = get_field('vivid_color_11')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img11" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_11')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img12">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img10">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_12')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img12">
    <?php
    $imageID = get_field('vivid_color_12')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img12" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_12')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img13">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img11">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_13')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img13">
    <?php
    $imageID = get_field('vivid_color_13')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img13" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_13')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img14">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img12">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_14')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img14">
    <?php
    $imageID = get_field('vivid_color_14')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img14" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_14')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img15">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img13">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_15')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img15">
    <?php
    $imageID = get_field('vivid_color_15')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img15" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_15')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img16">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img14">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_16')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img16">
    <?php
    $imageID = get_field('vivid_color_16')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img16" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_16')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img17">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img15">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_17')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img17">
    <?php
    $imageID = get_field('vivid_color_17')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img17" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_17')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img18">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img16">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_18')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img18">
    <?php
    $imageID = get_field('vivid_color_18')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img18" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_18')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img19">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img17">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_19')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img19">
    <?php
    $imageID = get_field('vivid_color_19')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img19" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_19')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#vivid-img20">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img18">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('vivid_color_20')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#vivid-img20">
    <?php
    $imageID = get_field('vivid_color_20')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="vivid-img20" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('vivid_color_20')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#vivid-img19">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  </div>
</div>
