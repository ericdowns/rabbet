<div class="section-cta-model">
	<?php $lender_check_icon = get_field( 'lender_check_icon', 'option' ); ?>
	<?php if ( $lender_check_icon ) { ?>
		<img src="<?php echo $lender_check_icon['url']; ?>" alt="<?php echo $lender_check_icon['alt']; ?>" />
	<?php } ?>
	<h2><?php the_field( 'lender_check_headline', 'option' ); ?></h2>
	<a href="<?php the_field( 'lender_check_button_url', 'option' ); ?>" class="btn reverse transparent nomargin"><?php the_field( 'lender_check_button_text', 'option' ); ?></a>
</div> <!-- section-cta-model -->
