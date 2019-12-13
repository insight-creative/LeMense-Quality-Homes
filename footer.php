<?php
/**
 * @package InsightCustom
 **/
?>
</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footerContent">
			<div id="footerContentInner">
				<div class="flexContainer">
					<div class="col50">
						<div class="blockText">
							<h6>Let's Work Together</h6>
							<img src="<?php echo get_template_directory_uri(); ?>/images/LeMense-Logo-White.png">
							<p>
								3609 Glen Oaks Pass<br>
								Green Bay, WI 54311
							</p>
							<a href="tel:920-609-3575">(920) 609-3575</a>
						</div>
					</div>
					<div id="darkBlueBack" class="col50">
						<div class="blockText">
							<nav id="footerNav" class="footerNavigation" role="navigation" aria-label="footer navigation">
						    <h2 class="screen-reader-text">Footer navigation</h2>
						    <div class="main-menu-wrapper">
						      <ul class="footerMenu menu" role="menu" aria-label="Main Menu">
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
</script>
<?php wp_footer(); ?>
</body>
</html>
