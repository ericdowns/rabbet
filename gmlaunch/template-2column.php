<?php /*Template Name: 2 Column Layout */get_header();?><div class="wrapper">	<div class="full">		<div class="content">			<div class="flex-container_row-space-around-stretch">				<div class="flex-item-60">					<h1><?php the_title();?></h1>					<?php if (have_posts()): ?>						<?php while (have_posts()): the_post();?>							<div class="rte">								<h3>Main Content</h3>								<?php the_content();?>							</div> <!-- rte -->							<?php wp_reset_postdata();?>						<?php endwhile;?>					<?php endif;?>				</div> <!-- flex-item -->				<div class="flex-item-25">					<h3>Sidebar</h3>					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet laoreet augue, ut laoreet odio sollicitudin aliquam. Suspendisse eget sapien nec leo lobortis aliquam. Duis tempus scelerisque tellus, et mollis sapien placerat et. Pellentesque dignissim posuere vulputate. Aenean tempus,</p>				</div>			</div> <!-- flex-container -->		</div><!--content-->	</div> <!--full--></div> <!-- wrapper --><?php get_footer();?>