<?php
/**
 * @package InsightCustom
 **/
?>

</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footerContent">
			<div id="footerContentInner">
				<div class="navWidth flexContainer">
					<div class="col50">
						<h6>Let's Work Together</h6>
						<img src="<?php echo get_template_directory_uri(); ?>/images/LeMense-Logo-White.png">
						<p>
							3609 Glen Oaks Pass<br>
							Green Bay, WI 54311
						</p>
						<a href="tel:920-609-3575">(920) 609-3575</a>
					</div>
					<div class="col50"></div>
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
	var rellax = new Rellax('.rellax', {
		center: true
	});
</script>
<?php wp_footer(); ?>
</body>
</html>
