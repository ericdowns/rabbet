<div class="full">
<div class="content">
<div class="flex-container_row-space-around-center">
<div class="flex-item-80">
<h1><?php the_title();?></h1>
<?php if (have_posts()): ?>
<?php while (have_posts()): the_post();?>
	<div class="rte">
		<?php the_content();?>
	</div> <!-- rte -->
	<?php wp_reset_postdata();?>
	<?php endwhile;?>
<?php endif;?>
</div> <!-- flex-item -->
</div> <!-- flex-container -->
</div><!--content-->
</div> <!--full-->