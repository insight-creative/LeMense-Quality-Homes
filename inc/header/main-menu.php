<div class="navWrapper">
  <nav id="secondary" class="site-navigation" role="navigation" aria-label="secondary navigation">
    <a href="tel:920-609-3575">(920) 609-3575</a>
    <div id="searchWrap">
      <button id="search" aria-label="site-search">
        <?php get_template_part("/inc/svg-icons/search"); ?>
        <?php get_template_part("/inc/svg-icons/close"); ?>
      </button>
    </div>
  </nav>
  <nav id="primary" class="site-navigation" role="navigation" aria-label="primary navigation">
    <h2 class="screen-reader-text">Main navigation</h2>
    <div class="main-menu-wrapper">
      <ul class="main-menu menu" role="menu" aria-label="Main Menu">
      <?php
          wp_nav_menu( array(
              'theme_location'    => 'main-menu',
              'container_class'				=> 'main-menu',
              'depth'             => 4,
              'container'         => false,
              'items_wrap' 				=> '%3$s'
          ) );
        ?>
        <button id="closeMenu" aria-expanded="false" aria-controls="main-menu" aria-label="Close the mobile menu">
          <i class="fas fa-chevron-up"></i><span id="close">Close</span><i class="fas fa-chevron-up"></i>
        </button>
      </ul>
    </div>
  </nav><!-- #site-navigation -->
</div>
