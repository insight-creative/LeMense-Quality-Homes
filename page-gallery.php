<?php
/**
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<?php get_template_part('/template-parts/hero'); ?>
		<div class="pageContentContainer">
			<div class="navWidth">
				<section id="galleryIntro" class="paddedSection">
					<div class="drywallBack paddedSection">
						<div class="titleWrap limitWidth">
							<h2>Browse our gallery of recently completed homes to gain inspiration.</h2>
							<div class="underline"></div>
						</div>
						<p class="blockText limitWidth">
							Sorted by project and room, view samples of our latest work to get ideas and see the quality of a LeMense home—inside and out!
						</p>
					</div>
				</section>
				<section id="featuredProjects" class="gallery">
					<div class="drywallBack paddedSection">
						<div class="titleWrap limitWidth">
							<h3>Featured Projects</h3>
							<div class="underline"></div>
						</div>
						<div class="wrappedFlexContainer">
							<?php
								$the_query = new WP_Query( array(
									'post_type' => 'Portfolio',
									'order' => 'DESC',
									'posts_per_page' => 6,
									)
								);
								while ( $the_query->have_posts() ) :
				    		$the_query->the_post();
								$background = get_the_post_thumbnail_url( $post_id, 'full' );
							?>
							<div class="col50">
								<a href="<?php the_permalink() ?>">
									<div class="galleryCoverOuter">
										<div class="galleryCover">
												<?php the_post_thumbnail() ?>
											<div class="overlayBorderOuter">
												<div class="overlayBorder">
													<div class="galleryTitleWrap">
														<h2><?php the_title(); ?></h2>
														<div class="underline"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<?php wp_reset_postdata(); ?>
							<?php endwhile; ?>
						</div>
					</div>
				</section>
				<section id="gallery" class="gallery">
					<div class="drywallBack row">
						<div class="titleWrap limitWidth">
							<h3>Rooms</h3>
							<div class="underline"></div>
						</div>
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
								<a href="/gallery/details">
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
														<h2>Details</h2>
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
