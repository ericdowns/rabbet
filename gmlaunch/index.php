<?php get_header(); ?><div class="wrapper">	<?php get_template_part('inc/blog-header');?>	<div class="full">		<div class="content">			<div class="section-blog-wrapper">								<div class="section-blog-wrapper_posts">					<?php get_template_part('inc/loop-default');?>					<div class="section-post-pagination">						<div class="section-next-prev-posts-link next_posts_link">							<?php previous_posts_link( '<div class="btn hasbg nomargin">Newer Entries</div>'); ?>						</div>						<div class="section-next-prev-posts-link previous_posts_link">							<?php next_posts_link('<div class="btn hasbg nomargin">Older Entries</div>'); ?> 						</div>					</div><!--section-post-pagination-->				</div> <!-- section-blog-wrapper_posts -->				<div class="section-blog-wrapper_sidebar">					<h5 class="hide-on-mobile">Categories </h5>					<div class="category-more"> <h5>Categories <i class="fal fw fa-angle-down"></i></h5> </div>					<ul class="category-ul">						<?php wp_list_categories( array(							'orderby' => 'name',							'use_desc_for_title'  => 1,							'order'              => 'ASC',							'title_li'           => 0,							'style'               => 'list',							'show_count'         => 1,						)); ?> 						<?php $category_ids = get_all_category_ids(); ?>					</ul>				</div> <!-- section-blog-wrapper -->			</div><!--content-->		</div> <!--full-->	</div> <!-- wrapper -->	<?php get_footer();?>