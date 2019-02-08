  <div class="flex-item-30 section-posttype-wrapper">
    <div class="rte">
      <ul><?php echo get_the_term_list( $post->ID, 'portfolio_categories', '<li class="portfolio_categories-list">', ', ', '</li>' ) ?></ul>
      <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
      <p><?php echo wp_trim_words( get_the_content(), 40, '...' );?></p>
    </div> <!-- rte -->
  </div> <!-- flex-item -->
