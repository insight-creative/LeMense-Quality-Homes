<?php
/**
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id="sitemapEntry">
			<div class="limitWidth">
				<h1 class="primaryText">Sitemap</h1>
			</div>
		</section>
		<div class="limitWidth flexContainer">
			<div class="col50">
				<h3>Pages</h3>
					<?php wp_list_pages(array('sort_column' => 'post_title', 'exclude' => '168, 693, 695, 61', 'title_li' => ' ', 'depth' => 0)); ?>
					<h3>Portfolio</h3>
					<?php
					$the_query = new WP_Query( array(
						'post_type' => 'Portfolio',
						'order' => 'ASC',
						'orderby' => 'title',
						)
					);
					?>
					<ul>
					<?php
					while ( $the_query->have_posts() ) :
		  		$the_query->the_post();
					?>
						<li class="page_item">
							<a href="<?php the_permalink() ?>">
	            	<?php the_title(); ?>
	          	</a>
						</li>
					<?php endwhile; ?>
					</ul>
			</div>
			<div class="col50">
				<h3>Floorplans</h3>
				<?php
				$the_query = new WP_Query( array(
					'post_type' => 'Floorplans',
					'order' => 'ASC',
					'orderby' => 'title',
					)
				);
				?>
				<ul>
				<?php
				while ( $the_query->have_posts() ) :
	  		$the_query->the_post();
				?>
					<li class="page_item">
						<a href="<?php the_permalink() ?>">
            	<?php the_title(); ?>
          	</a>
					</li>
				<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
