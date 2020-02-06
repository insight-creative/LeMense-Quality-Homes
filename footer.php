<?php
/**
 * @package InsightCustom
 **/
?>
</div><!-- #content -->
	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="footerContent">
			<div id="footerContentInner">
				<div class="flexContainer">
					<div class="col50">
						<div class="blockText">
							<h6>Let's Work Together</h6>
							<img src="<?php echo get_template_directory_uri(); ?>/images/LeMense-Logo-White.png" alt="LeMense Quality Homes, Inc. Logo in White">
							<p>
								3609 Glen Oaks Pass<br>
								Green Bay, WI 54311
							</p>
							<p>
								<a href="tel:920-609-3575">(920) 609-3575</a>
							</p>
						</div>
					</div>
					<div id="darkBlueBack" class="col50">
						<div class="blockText">
							<nav id="footerNav" class="footerNavigation" role="navigation" aria-label="footer navigation">
						    <h2 class="screen-reader-text">Footer navigation</h2>
						    <div class="main-menu-wrapper">
						      <ul class="footerMenu menu">
						      <?php
						          wp_nav_menu( array(
						              'theme_location'    => 'main-menu',
						              'container_class'				=> 'main-menu',
						              'depth'             => 4,
						              'container'         => false,
						              'items_wrap' 				=> '%3$s'
						          ) );
						        ?>
						      </ul>
						    </div>
						  </nav><!-- #site-navigation -->
						</div>
					</div>
				</div>
			</div>
	 </div>
	 <div id="footerSecond">
		 <div class="navWidth">
		 		<?php get_template_part("/inc/footer/copyright"); ?>
		 </div>
	 </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<script>
	AOS.init();
	var swiper2 = new Swiper('.swiper2', {
		loop: true,
		slidesPerView: 1,
    spaceBetween: 30,
		centeredSlides: true,
		effect: 'fade',
		pagination: {
      el: '.swiper-pagination2',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
<script src="/wp-content/themes/insightcustom/js/jquery.mixitup.min.js"></script>
<script src="/wp-content/themes/insightcustom/js/main.js"></script> <!-- Resource jQuery -->
<?php wp_footer(); ?>
</body>
</html>
