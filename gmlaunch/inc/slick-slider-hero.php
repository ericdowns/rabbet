<?php if ( have_rows( 'slider' ) ) : ?>
	<section class="hero slider">
		<?php while ( have_rows( 'slider' ) ) : the_row(); ?>
			<div> <!-- START div-wrapper -->
				<div class="slider-content">
					<p>	Test Content Here</p>
				</div> <!-- slider-content -->
				<div class="slider-image">
					<?php if ( get_sub_field( 'image') ) { ?>
						<img src="<?php the_sub_field( 'image' ); ?>" />
					<?php } ?>
				</div> <!-- slider-image -->
			</div> <!-- END div-wrapper -->
		<?php endwhile; ?>
	</section>
<?php endif; ?>
