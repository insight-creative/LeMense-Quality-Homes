<div class="subNav">
  <nav class="pageWidth" role="navigation" aria-label="primary navigation">
    <h2 class="screen-reader-text">Sub page navigation menu</h2>
    <div class="subNavWrapper">
      <?php
      if ( $post->post_parent ) {
        $children = wp_list_pages( array(
          'title_li' => '',
          'child_of' => $post->post_parent,
          'echo'     => 0
        ) );
      } else {
        $children = wp_list_pages( array(
          'title_li' => '',
          'child_of' => $post->ID,
          'echo'     => 0
        ) );
      }
      if ( $children ) : ?>
      <ul>
        <?php echo $children; ?>
      </ul>
      <?php endif; ?>
    </div>
  </nav><!-- #sub-navigation -->
</div>
