<?php 
$terms = get_the_terms( $post->ID, 'resources_categories' ); 
$terms = wp_list_filter($terms, array('slug'=>'all'),'NOT'); 
foreach($terms as $term) {}
	?>
<div class="flex-item-30 section-posttype-wrapper post-type-resource <?php echo ($term_list = $term->slug);?>">
	<?php $resource_thumbnail_image = get_field( 'resource_thumbnail_image' ); ?>
	<?php if ( $resource_thumbnail_image ) : // START loop to figure out which image to use. ?>
		<a href="<?php the_field( 'resource_link' ); ?>" target="_blank"> 
			<img src="<?php echo $resource_thumbnail_image['url']; ?>" alt="<?php echo $resource_thumbnail_image['alt']; ?>" />
		</a>
	<?php else: // if there is no ACF Thumbnail go into the bellow loop to figure out which image to use. ?>
		<a href="<?php the_field( 'resource_link' ); ?>" target="_blank">
			<!-- START Link wrapper for all fallback images --> 
			<?php if ( has_term ( 'event','resources_categories' )) : ?>
				<img src=" <?php bloginfo('template_directory'); ?>/imgs/icon_resource-event.png">
				<?php elseif (has_term( 'infographic','resources_categories' ) ): ?>
					<img src=" <?php bloginfo('template_directory'); ?>/imgs/icon_resource-infographic.png">
					<?php elseif (has_term( 'report','resources_categories' ) ): ?>
						<img src=" <?php bloginfo('template_directory'); ?>/imgs/icon_resource-report.png">
						<?php elseif (has_term( 'webinar','resources_categories' ) ): ?>
							<img src=" <?php bloginfo('template_directory'); ?>/imgs/icon_resource-webinar.png">
							<?php elseif (has_term( 'whitepaper','resources_categories' ) ): ?>
								<img src=" <?php bloginfo('template_directory'); ?>/imgs/icon_resource-whitepaper.png">
								<?php else: ?>
									<img src=" <?php bloginfo('template_directory'); ?>/imgs/icon_resource-no-category.png">
								<?php endif;  ?>
							</a>
							<!-- END Link wrapper for all fallback images -->
						<?php endif;  // END the if ( $resource_thumbnail_image loop from above. ?>
							<div class="section-resource-text">
								<h2><a href="<?php the_field( 'resource_link' ); ?>" target="_blank"><?php the_title();?></a></h2>
								<?php foreach ($terms as $term) { if($term->term_id != 21) { $term_IDs[] = $term->slug; } }?>
								<ul>
									<li class="portfolio_categories-list">
										<?php echo ($term_list = $term->name);?>
									</li>
								</ul>
								<p><?php echo wp_trim_words( get_the_content(), 20, '...' );?></p>
							</div>
						</div> <!-- flex-item -->
