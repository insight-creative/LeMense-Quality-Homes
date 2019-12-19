<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */
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
