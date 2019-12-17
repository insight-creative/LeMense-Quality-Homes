<?php
/**
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
		<section class="hero" data-aos="fade-in" data-aos-duration="1500" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position:center;">
			<div class="heroOverlay">
				<div class="overlayBorderOuter">
					<div class="overlayBorder"></div>
				</div>
			</div>
			<div class="headerOuterWrap">
				<div class="headerInnerWrap" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="500">
					<h1>Picture Your Dream Home</h1>
					<div class="arrow">
						<?php get_template_part('/inc/svg-icons/chevron-down'); ?>
					</div>
				</div>
			</div>
		</section>
		<div class="pageContentContainer">
			<div class="navWidth">
				<section id="galleryIntro" class="paddedSection" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="1000">
					<div class="drywallBack paddedSection">
						<div class="titleWrap limitWidth">
							<h2>Browse our gallery of recently completed homes to gain inspiration.</h2>
							<div class="underline"></div>
						</div>
						<p class="blockText">
							Sorted by project and room, view samples of our latest work to get ideas and see the quality of a LeMense home—inside and out!
						</p>
					</div>
				</section>
				<section id="gallery" class="paddedSection">
					<div class="drywallBack paddedSection">
						<div class="flexContainer">
							<div class="col50">
								<a href="/gallery/kitchen">
									<div class="galleryCoverOuter">
										<div class="galleryCover">
											<?php
								        $image = get_field('kitchen_cover');
								        $imageID = $image['ID'];
								        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage logo', 'data-sizes' => 'auto' ) );
								      ?>
											<div class="overlayBorderOuter">
												<div class="overlayBorder">
													<div class="galleryTitleWrap">
														<h2>Kitchen</h2>
														<div class="underline"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col50">
								<a href="/gallery/bathroom">
									<div class="galleryCoverOuter">
										<div class="galleryCover">
											<?php
								        $image = get_field('bathroom_cover');
								        $imageID = $image['ID'];
								        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage logo', 'data-sizes' => 'auto' ) );
								      ?>
											<div class="overlayBorderOuter">
												<div class="overlayBorder">
													<div class="galleryTitleWrap">
														<h2>Bathroom</h2>
														<div class="underline"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="flexContainer">
							<div class="col50">
								<a href="/gallery/living-room">
									<div class="galleryCoverOuter">
										<div class="galleryCover">
											<?php
								        $image = get_field('living_room_cover');
								        $imageID = $image['ID'];
								        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage logo', 'data-sizes' => 'auto' ) );
								      ?>
											<div class="overlayBorderOuter">
												<div class="overlayBorder">
													<div class="galleryTitleWrap">
														<h2>Living Room</h2>
														<div class="underline"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col50">
								<a href="/gallery/bedroom">
									<div class="galleryCoverOuter">
										<div class="galleryCover">
											<?php
								        $image = get_field('bedroom_cover');
								        $imageID = $image['ID'];
								        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage logo', 'data-sizes' => 'auto' ) );
								      ?>
											<div class="overlayBorderOuter">
												<div class="overlayBorder">
													<div class="galleryTitleWrap">
														<h2>Bedroom</h2>
														<div class="underline"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="flexContainer">
							<div class="col50">
								<a href="/gallery/exterior">
									<div class="galleryCoverOuter">
										<div class="galleryCover">
											<?php
								        $image = get_field('exterior_cover');
								        $imageID = $image['ID'];
								        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage logo', 'data-sizes' => 'auto' ) );
								      ?>
											<div class="overlayBorderOuter">
												<div class="overlayBorder">
													<div class="galleryTitleWrap">
														<h2>Exterior</h2>
														<div class="underline"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col50">
								<a href="/gallery/miscellaneous">
									<div class="galleryCoverOuter">
										<div class="galleryCover">
											<?php
								        $image = get_field('misc_cover');
								        $imageID = $image['ID'];
								        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'blockImage logo', 'data-sizes' => 'auto' ) );
								      ?>
											<div class="overlayBorderOuter">
												<div class="overlayBorder">
													<div class="galleryTitleWrap">
														<h2>Miscellaneous</h2>
														<div class="underline"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
