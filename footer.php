<?php
/**
 * @package InsightCustom
 **/
?>

</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footerContent">
			<div id="footerContentInner" class="pageWidth flexContainer">
			</div>
	 </div>
	 <div id="footerSecond">
		 <?php get_template_part("/inc/footer/copyright"); ?>
	 </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<script>
	AOS.init();
	var rellax = new Rellax('.rellax', {
		center: true
	});
	var swiper1 = new Swiper('.swiper1', {
		loop: true,
		slidesPerView: 1,
    spaceBetween: 30,
		centeredSlides: true,
		effect: 'fade',
		pagination: {
      el: '.swiper-pagination1',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
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
<?php wp_footer(); ?>
</body>
</html>
