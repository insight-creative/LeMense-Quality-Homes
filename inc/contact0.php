<section id="contact" class="smallPaddedSection">
  <div class="pageWidth centerText">
    <h5 class="largeHeading">
      Contact Our Experts
    </h5>
  </div>
  <div class="flex-container pageWidth">
    <div class="col50">
      <div class="blockText">
        <p><?php the_field('contact_info', option); ?></p>
      </div>
    </div>
    <div class="col50">
      <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?>
    </div>
  </div>
</section>
