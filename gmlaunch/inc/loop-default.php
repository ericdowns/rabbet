  <?php if (have_posts()): ?>
    <?php $count = 1; ?>
    <?php while (have_posts()): the_post();?>
      <?php if ($count == 3 & !is_paged()) : ?>
        <div class="section-cta-inloop">
          <?php get_template_part('inc/cta-blog');?>
        </div> <!-- section-cta-inloop -->
      <?php endif; $count++; ?>
      <div class="section-blog-post">
        <div class="section-blog-post_thumbnail">
          <a href="<?php the_permalink();?>">
            <?php $thumbnail_image = get_field( 'thumbnail_image' ); ?>
            <?php if ( $thumbnail_image ) { ?>
              <img class="blog-post_thumbnail" src="<?php echo $thumbnail_image['url']; ?>" alt="<?php echo $thumbnail_image['alt']; ?>" />
            <?php } else {?>
              <img class="blog-post_thumbnail" src="<?php echo get_bloginfo( 'template_directory' ); ?>/imgs/blog-default.jpg" alt="<?php the_title();?>" />
            <?php }?>
          </a>
        </div> <!-- section-blog-post_thumbnail -->
        <div class="section-blog-post_text">
          <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
          <div class="section-blog-post_author-category">
            <div class="section-blog-post_author">
              <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author('user_nicename'); ?></a>
            </div> 
            <div class="sep">|</div>                  
            <div class="section-blog-category">
              <?php echo get_the_category_list(', '); ?>
            </div>
          </div> <!-- section-blog-post_author-category -->
          <?php if (has_excerpt()) {?>
            <p><?php the_excerpt();?></p>
          <?php } else {?>
            <p> <?php echo wp_trim_words( get_the_content(), 30, '...' ); ?>
            <a class="read-more-content" href="<?php the_permalink()?>">Read More</a>
          <?php }?>
        </div> <!-- section-blog-post_text -->
      </div> <!-- section-blog-post -->
      <?php wp_reset_postdata();?>
    <?php endwhile;?>
    <?php endif;?>