<div id="searchFormWrap">
  <div id="searchFormInner" class="pageWidth">
    <?php get_search_form(); ?>
  </div>
</div>
<div id="mastheadInner">
  <div id="logoWrapper">
    <div id="siteLogo">
      <a href="<?=site_url()?>" id="siteLogo">
        <?php get_template_part('/inc/svg-icons/fox-structures-logo'); ?>
      </a>
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
