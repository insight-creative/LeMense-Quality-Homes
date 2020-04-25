<?php
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$postid = get_the_ID();
if ( is_archive() ) {
  $imgURL = '/wp-content/uploads/2019/12/lemense-quality-homes-custom-home-exterior-large.jpg';
  $img = 'style="background-image:url('.$imgURL.')"';
  ?>
  <section class="hero" data-aos="fade-in" data-aos-duration="1500" <?php echo $img; ?>>
  <?php
} else {
  ?>
  <section class="hero" data-aos="fade-in" data-aos-duration="1500" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position:center;">
  <?php
}
?>
  <div class="heroOverlay">
    <div class="overlayBorderOuter">
      <div class="overlayBorder"></div>
    </div>
  </div>
  <div class="headerOuterWrap">
    <div class="headerInnerWrap" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="500">
      <?php
      if ( is_front_page() ) {
        ?>
        <h1>Quality Custom Home Building<br><span class="smallHeading">In Green Bay, WI</span></h1>
        <?php
      } elseif ( is_post_type_archive('floorplans') ) {
        echo "<h1>Exclusive Floor Plans</h1>";
      } elseif ( $postid == '118' ) {
        echo "<h1>Picture Your Dream Home</h1>";
      } elseif ( is_post_type_archive('portfolio') ) {
        echo "<h1>Featured Projects</h1>";
      } elseif ( 'floorplans' == get_post_type() ) {
        ?>
        <h1><?php the_title(); ?></h1>
        <p class="smallHeading"><?php if( get_field('square_footage') ): echo get_field('square_footage'); ?> Sqft. | <?php endif; ?><?php echo get_field('number_of_bedrooms'); ?> Bed | <?php echo get_field('number_of_full_bathrooms'); ?> Bath</p>
        <?php
      } elseif ( $postid == '120' ) {
        echo "<h1>Contact Us</h1>";
      } else {
        ?>
        <h1><?php the_title() ?></h1>
        <?php
      }
      ?>
      <div class="arrow">
        <?php get_template_part('/inc/svg-icons/chevron-down'); ?>
      </div>
    </div>
  </div>
</section>
