<section id="banner">
	<?php get_template_part('templates/header'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner-wrap">
					<div class="banner-cont wow fadeIn">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-cont-logo.png" alt="Graphic Design" class="img-responsive">
						<?php $query = new WP_Query('page_id=4'); ?>
						<!-- <h1><?php echo get_the_title(); ?></h1> -->
							<?php while($query->have_posts()) : $query->the_post(); ?>
								<?php get_template_part('templates/content', 'page'); ?>
							<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<!-- <div class="getintouch">
							<a href="<?php echo get_post_meta($post->ID, 'getInTouchLink', true); ?>"><?php echo get_post_meta($post->ID, 'getInTouchButton', true); ?></a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>