<div id="searchFormWrap">
  <div id="searchFormInner" class="pageWidth">
    <?php get_search_form(); ?>
  </div>
</div>
<div id="mastheadInner">
  <div id="logoWrapper">
    <div id="siteLogo">
        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          if ( function_exists( 'the_custom_logo' ) ) {
           the_custom_logo();
          } else {
              echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
          }
        ?>
    </div>
    <div class = "menuButtonWrap" aria-label="mobile menu toggle button" tabindex="0">
      <button class="hamburger hamburger--collapse" type="button" aria-label="Mobile menu button" aria-expanded="false">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>
  </div>
  <?php get_template_part('/inc/header/main-menu'); ?>
</div>
