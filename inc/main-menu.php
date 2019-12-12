<nav id="primary" class="site-navigation" role="navigation" aria-label="primary navigation">
  <div class="main-menu-wrapper">
    <ul class="main-menu menu">
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'main-menu',
            'container_class'				=> 'main-menu',
            'depth'             => 4,
            'container'         => false,
            'items_wrap' 				=> '%3$s'
        ) );
        //add search form search-toggle
        //echo '<li id="site-search" class="search-toggle">' . get_search_form( false ) . '</li>';
      ?>
      <div id="searchWrap">
        <button id="search">
          <svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        		<defs>
        			<symbol id="icon-search" viewBox="0 0 26 28">
        				<title>search</title>
        				<path d="M18 13c0-3.859-3.141-7-7-7s-7 3.141-7 7 3.141 7 7 7 7-3.141 7-7zM26 26c0 1.094-0.906 2-2 2-0.531 0-1.047-0.219-1.406-0.594l-5.359-5.344c-1.828 1.266-4.016 1.937-6.234 1.937-6.078 0-11-4.922-11-11s4.922-11 11-11 11 4.922 11 11c0 2.219-0.672 4.406-1.937 6.234l5.359 5.359c0.359 0.359 0.578 0.875 0.578 1.406z"></path>
        			</symbol>
        		</defs>
        	</svg>
        	<svg class="mediumBlackIcon icon-search"><use xlink:href="#icon-search"></use></svg>
        </button>
      </div>
      <div id="mobileSearch">
        <?php get_search_form(); ?>
      </div>
      <button id="closeMenu">
        <i class="fas fa-chevron-up"></i><span id="close">Close</span><i class="fas fa-chevron-up"></i>
      </button>
    </ul>
  </div>
</nav><!-- #site-navigation -->
