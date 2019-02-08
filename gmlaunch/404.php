<?php get_header();?>
<div class="wrapper">
	<div class="full">
		<div class="content">
			<div class="flex-container_row-space-around-center">
				<div class="flex-item-60 flex-item-center">
					<h1 class="page-title">Page Not Found</h1>
					<?php the_field( '404_body_copy', 'option' ); ?>
				</div> <!-- flex-item -->
			</div> <!-- flex-container -->
		</div><!--content-->
	</div> <!--full-->
</div> <!-- wrapper -->
<?php get_footer();?>