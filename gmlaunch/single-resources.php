<?php get_header(); ?>
<div class="m-scene" id="main">
	<div class="wrapper scene-main scene-main--fadein">
		<div class="full">
			<div class="content">
				<div class="flex-container_row-space-around-center">
					<div class="flex-item-80">
						<?php if (have_posts()): ?>
							<?php while (have_posts()): the_post();?>
								<div class="section-blog-post" id="blog-post">
									<div class="rte">
										<h2><?php the_title();?></h2>
										<div class="section-blog-post__date"><?php the_time('F jS, Y') ?></div>
										<?php the_content();?>
									</div> <!-- rte -->
								</div> <!-- section-blog-post -->
								<?php wp_reset_postdata();?>
							<?php endwhile;?>
						<?php endif;?>
						<div class="section-post-pagination scene_element scene-main--moveFromBottom">
							<div class="section-next-prev-posts-link"><?php previous_post_link('<div class="button">%link</div>'); ?> </div>
							<!-- use for all posts -->
							<!-- <div class="section-next-prev-posts-link"><a href="<-?php echo get_post_type_archive_link( 'people' ); ?>">All People</a></div> -->
							<!-- <div class="section-next-prev-posts-link pagination-all-posts"><a href="/blog">All Posts</a></div> -->
							<div class="section-next-prev-posts-link pagination-next-posts"><?php next_post_link( '<div class="button">%link</div>'); ?></div>
						</div><!--pagination-->
					</div> <!-- flex-item -->
				</div> <!-- flex-container -->
			</div><!--content-->
		</div> <!--full-->
	</div> <!-- wrapper -->
</div> <!-- scene_element scene_element fadein -->
</div> <!-- id="main" class="m-scene" -->
<?php get_footer();?>