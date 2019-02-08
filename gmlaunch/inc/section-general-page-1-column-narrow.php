<div class="flex-container_row-space-around-stretch">
	<div class="flex-item-60">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="rte"><?php the_content(); ?></div><!--rte-->
			<?php endwhile; ?>
		<?php endif; ?>
</div><!-- flex-item-->
</div><!-- flex-container -->