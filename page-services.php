<?php
/**
 * Template Name: Services
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<?php wpb_list_child_pages(); ?>
		<ul>
    <?php
    global $id;
    wp_list_pages( array(
        'title_li'    => '',
        'child_of'    => $id,
        'show_date'   => 'modified',
        'date_format' => $date_format
    ) );
		$output = wp_list_pages( array(
    'echo'     => 0,
    'depth'    => 1,
    'title_li' => '<h2>' . __( 'Top Level Pages', 'textdomain' ) . '</h2>'
) );

if ( is_page() ) {
    $page = $post->ID;
    if ( $post->post_parent ) {
        $page = $post->post_parent;
    }

    $children = wp_list_pages( array(
        'echo'     => 0,
        'child_of' => $page,
        'title_li' => ''
    ) );

    if ( $children ) {
        $output = wp_list_pages( array(
            'echo' => 0,
            'child_of' => $page,
            'title_li' => '<h2>' . __( 'Child Pages', 'textdomain' ) . '</h2>'
        ) );
    }
}
echo $output;
    ?>
</ul>
		<?php
		// check if the flexible content field has rows of data
		if( have_rows('flexible_fields') ):
	    // loop through the rows of data
	    while ( have_rows('flexible_fields') ) : the_row();
				///////////////////////////////////
				// Simple Two Column Block
				//////////////////////////////////
				if( get_row_layout() == 'two_column' ):
					?>
					<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection">
						<?php
						$col_1 = get_sub_field('col_content_1');
						$col_2 = get_sub_field('col_content_2');
						?>
						<div class="pageWidth flexContainer centerAlignedContainer">
							<?php
							if( $col_1 ): ?>
								<div class="col50">
									<div class="blockText">
										<?php echo $col_1 ?>
									</div>
								</div>
							<?php endif;
							if( $col_2 ): ?>
								<div class="col50">
									<div class="blockText">
										<?php echo $col_2 ?>
									</div>
								</div>
							<?php
							endif;
							?>
						</div>
					</section>
					<?php
					///////////////////////////////////
					// Simple Three Column Block
					//////////////////////////////////
					elseif( get_row_layout() == 'three_column' ):
					?>
					<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection">
					<?php
					if(get_sub_field('section_title')):
					?>
					<div class="pageWidth">
		        <?php echo get_sub_field('section_title'); ?>
		      </div>
					<?php endif; ?>
						<?php
							$col_1 = get_sub_field('col_content_1');
							$col_2 = get_sub_field('col_content_2');
							$col_3 = get_sub_field('col_content_3');
						?>
						<div class="pageWidth flexContainer">
						<?php
							if( $col_1 ): ?>
								<div class="col30">
									<div class="blockText">
										<?php echo $col_1 ?>
									</div>
								</div>
							<?php endif;
							if( $col_2 ): ?>
								<div class="col30">
									<div class="blockText">
										<?php echo $col_2 ?>
									</div>
								</div>
							<?php endif;
							if( $col_3 ): ?>
								<div class="col30">
									<div class="blockText">
										<?php echo $col_3 ?>
									</div>
								</div>
							<?php
							endif;
							?>
						</div>
					</section>
					<?php
					///////////////////////////////////
					// Testimonial
					//////////////////////////////////
					elseif( get_row_layout() == 'testimonial' ):
					$testimonial = get_sub_field('testimonial_contents');
					?>
					<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection testimonial">
					  <div class="limitWidth">
					    <div class="blockText greenBorder centerText">
								<?php echo $testimonial ?>
							</div>
					  </div>
					</section>
					<?php
				endif;
			endwhile;
		endif;
		?>
	</main>
</div>
<?php
get_footer();
