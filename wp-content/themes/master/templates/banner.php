<section id="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner-wrap">
					<div class="banner-cont wow fadeIn">
						<?php $query = new WP_Query('page_id=4'); ?>
						<!-- <h1><?php echo get_the_title(); ?></h1> -->
							<?php while($query->have_posts()) : $query->the_post(); ?>
								<?php get_template_part('templates/content', 'page'); ?>
							<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<div class="getintouch">
							<a href="<?php echo get_post_meta(4, 'get in touch', true); ?>" target="_blank"><?php echo get_post_meta(4, 'get in touch', true); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>