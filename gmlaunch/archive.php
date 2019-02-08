<?php get_header(); ?>
<div class="wrapper">
	<?php get_template_part('inc/blog-header');?>
	<div class="full">
		<div class="content">
			<div class="section-blog-wrapper">				
				<div class="section-blog-wrapper_posts">
					<div class="section-cat-title-breadcrumb">
						<a class="breadcumb-link" href="/blog"><i class="fal fa-angle-left"></i> Back to Blog</a>
						<?php if (is_author()) { ?>
							<h4>Author: <?php the_author('user_nicename'); ?></h4>
						<?php } ?>
						<?php if (is_category()) { ?>
							<h4>Category: <?php single_term_title(); ?></h4>
						<?php } ?>
					</div> <!-- section-cat-title-breadcrumb -->
					<?php get_template_part('inc/loop-default');?>
					<div class="section-post-pagination">
						<div class="section-next-prev-posts-link next_posts_link">
							<?php previous_posts_link( '<div class="btn nomargin">Newer Entries</div>'); ?>
						</div>
						<div class="section-next-prev-posts-link previous_posts_link">
							<?php next_posts_link('<div class="btn nomargin">Older Entries</div>'); ?> 
						</div>
					</div><!--section-post-pagination-->
				</div> <!-- section-blog-wrapper_posts -->
				<div class="section-blog-wrapper_sidebar">
					<h5 class="hide-on-mobile">Categories </h5>
					<div class="category-more"> <h5>Categories <i class="fal fw fa-angle-down"></i></h5> </div>
					<ul class="category-ul">
						<?php wp_list_categories( array(
							'orderby' => 'name',
							'use_desc_for_title'  => 1,
							'order'              => 'ASC',
							'title_li'           => 0,
							'style'               => 'list',
							'show_count'         => 1,
						)); ?> 
						<?php $category_ids = get_all_category_ids(); ?>
					</ul>
				</div> <!-- section-blog-wrapper -->
			</div><!--content-->
		</div> <!--full-->
	</div> <!-- wrapper -->
	<?php get_footer();?>