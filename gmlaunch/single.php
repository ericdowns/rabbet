<?php get_header(); ?>
<div class="wrapper">
	<div class="full">
		<div class="content">
			<div class="section-blog-single-wrapper">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post();?>
						<h2><?php the_title();?></h2>
						<?php the_content();?>
						<?php wp_reset_postdata();?>
					<?php endwhile;?>
				<?php endif;?>
				<div class="section-blog-post_author-category">
					<div class="section-blog-category">
						<?php echo get_the_category_list(', '); ?>
					</div>
				</div> <!-- section-blog-post_author-category -->
				<div class="section-author-info">
					<div class="author-image">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
					</div> <!-- author-image -->	 
					<div class="author-info">
						<h6>About the Author</h6>
						<h5><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author('user_nicename'); ?></a></h5> 
						<p><?php echo nl2br(get_the_author_meta('description')); ?></p>
					</div> <!-- author-info -->
				</div> <!-- section-author-info -->
				<div class="section-post-pagination">
					<div class="section-next-prev-posts-link next_posts_link">						
						<?php previous_post_link( '%link','Previous Post' ) ?>
					</div>
					<div class="section-next-prev-posts-link previous_posts_link">
						<?php next_post_link( '%link','Next Post' ) ?>
					</div>
				</div><!--section-post-pagination-->
				<div class="section-cta-wrapper">
					<?php get_template_part('inc/cta-blog');?>
				</div> <!-- section-cta-wrapper -->
				<div class="section-related-posts">
					<?php $related = get_posts( array( 
						'category__in' => wp_get_post_categories($post->ID), 
						'numberposts' => 2, 
						'post__not_in' => array($post->ID) ) ); ?>
						<h6>Related Posts</h6>
						<?php if( $related ) foreach( $related as $post ) { ?>
							<?php setup_postdata($post); ?>
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
						<?php } // endif related post ?>
						<?php wp_reset_postdata(); ?>
					</div> <!-- section-related-posts -->
				</div> <!-- section-blog-single-wrapper -->
			</div><!--content-->
		</div> <!--full-->
	</div> <!-- wrapper -->
	<?php get_footer();?>