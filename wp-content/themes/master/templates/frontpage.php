<?php 
	/*Template Name: Home*/	
?>
<?php get_template_part('templates/banner'); ?>


<section id="about">
	<div class="container wow fadeIn clearfix">
		<div class="row">
			<div class="aboutmewrap">
				<div class="col-md-4">
					<div class="about-image clearfix">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/author-profile.png" alt="Graphic Design" class="img-responsive">
					</div>
				</div>
				<div class="col-md-8">
					<div class="about-cont"> 
						<div class="about-cont-wrap wow fadeIn">
							<?php $query = new WP_Query('page_id=9'); ?>
								<?php while($query->have_posts()) : $query->the_post(); ?>
									<?php get_template_part('templates/content', 'page'); ?>
								<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						</div>
						<div class="getintouch wow fadeIn"> 
							<a href="<?php echo get_post_meta($post->ID, 'getTouchLink', true); ?>"><?php echo get_post_meta($post->ID, 'getInTouchButton', true); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="gallery">
	<div class="container wow fadeIn">
		<div class="row">
			<div class="col-md-12 no-padding">
				<div class="col-md-7 col-md-offset-5 no-padding">
					<div class="gallery-content">
						<div class="gallery-cont wow fadeIn">
							<h2><?php echo get_the_title('69');?></h2>
							<?php $query = new WP_Query('page_id=69'); ?>
								<?php while($query->have_posts()) : $query->the_post(); ?>
									<?php get_template_part('templates/content', 'page'); ?>
								<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						</div>
						<div class="getintouch wow fadeIn"> 
							<a href="<?php echo get_post_meta($post->ID, 'seeGalleryLink', true); ?>"><?php echo get_post_meta($post->ID, 'seeGallery', true); ?></a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<section id="quote">
	<div class="container wow fadeIn">
		<div class="row">
			<div class="quote-wrap">
				<div class="quote-cont">
					<?php $query = new WP_Query('page_id=235'); ?>
						<?php while($query->have_posts()) : $query->the_post(); ?>
							<?php get_template_part('templates/content', 'page'); ?>
						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
			</div>
	</div>
</section>
<section id="get-in-touch">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-4">
			<div class="contact-cont">
				<h2><?php echo get_post_meta($post->ID, 'getInTouchButton', true); ?></h2>
				<div class="contact-cont wow fadeIn">
					<?php $query = new WP_Query('page_id=22'); ?>
						<?php while($query->have_posts()) : $query->the_post(); ?>
							<?php get_template_part('templates/content', 'page'); ?>
							<div class="address-phone">
								<div class="address">
									<?php the_cfc_field('contactus-field', 'contact-address', 22); ?>
								</div>
								<div class="phone">
									<?php the_cfc_field('contactus-field', 'contact-numbers', 22); ?>		
								</div>
							</div>
						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					
					<div class="contact-form">
						<div class="home-contact">
							<?php echo do_shortcode('[contact-form-7 id="22" title="Contact form"]'); ?>
						</div>
					</div>
					<div class="social-media">
						<?php wp_nav_menu(['menu' => 'Social Navigation', 'menu_class' => 'social_navigation', 'container_class' => '']); ?>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>