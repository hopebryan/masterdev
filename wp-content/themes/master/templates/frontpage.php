<?php 
	/*Template Name: Home*/	
?>
<?php get_template_part('templates/banner'); ?>


<section id="about">
	<div class="container wow fadeIn">
		<div class="row">
			<div class="about-image col-md-6">
				<div class="about-image-holder">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/author-profile.png" alt="Graphic Design" class="img-responsive">
				</div>
			</div>
			<div class="about-cont text-center col-md-6">
				<div class="about-cont-wrap wow fadeIn">
					<?php $query = new WP_Query('page_id=9'); ?>
						<?php while($query->have_posts()) : $query->the_post(); ?>
							<?php get_template_part('templates/content', 'page'); ?>
						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
				<div class="getintouch wow fadeIn">
					<a href="<?php echo get_post_meta(9, 'get in touch', true); ?>" target="_blank"><?php echo get_post_meta(9, 'get in touch', true); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="services">
	<div class="container wow fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="services-wrap wow fadeIn">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/graphic.png" alt="Graphic Design" class="img-responsive">
						<div class="services-cont">
							<h3>Graphic Design</h3>
							<p>Creating designs for brochure, flyer, business card, letterhead, web page layout and marketing designs.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="services-wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/monitor.png" alt="Graphic Design" class="img-responsive">
						<div class="services-cont">
							<h3>Web Design & Development</h3>
							<p>Creating website designs and mobile ready development & email newsletter.</p>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="skills">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="skills-wrap wow fadeIn">
					<?php $query = new WP_Query('page_id=15'); ?>
						<?php while($query->have_posts()) : $query->the_post(); ?>
							<?php get_template_part('templates/content', 'page'); ?>
						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<div class="skills-set">
						<ul class="individual-skill">
							<li class="skill-list">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/HTML.png" alt="Graphic Design" class="img-responsive">
								<p>HTML/HTML5</p>	
							</li>
							<li class="skill-list">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/css.png" alt="Graphic Design" class="img-responsive">
								<p>CSS/CSS3</p>	
							</li>
							<li class="skill-list">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/git.png" alt="Graphic Design" class="img-responsive">
								<p>GIT</p>	
							</li>
							<li class="skill-list">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bootstrap.png" alt="Graphic Design" class="img-responsive">
								<p>BOOTSTRAP</p>	
							</li>
							<li class="skill-list">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sass.png" alt="Graphic Design" class="img-responsive">
								<p>SASS</p>	
							</li>
							<li class="skill-list">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ps.png" alt="Graphic Design" class="img-responsive">
								<p>PHOTOSHOP</p>	
							</li>
							<li class="skill-list">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/xara.png" alt="Graphic Design" class="img-responsive">
								<p>XARA</p>	
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="hireme">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="hireme-wrap wow fadeIn">
					<?php $query = new WP_Query('page_id=108'); ?>
						<?php while ($query->have_posts()) : $query->the_post(); ?>
							<?php get_template_part('templates/content', 'page'); ?>
						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="getintouch wow fadeIn">
					<a href="<?php echo get_post_meta(10, 'hire me', true); ?>" target="_blank"><?php echo get_post_meta(10, 'hire me', true); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="works">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="works-wrap wow fadeIn">
					<?php $query = new WP_Query('page_id=112'); ?>
						<?php while ($query->have_posts()) : $query->the_post(); ?>
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
			<div class="col-md-6">
				<div class="map wow fadeIn">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1145.7428401380748!2d123.96183168156588!3d10.365575405137148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9980812f21bad%3A0x6d51183534f86995!2sTugbongan%2C+Consolacion%2C+Cebu!5e0!3m2!1sen!2sph!4v1514446501385" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contact-cont wow fadeIn">
					<?php $query = new WP_Query('page_id=19'); ?>
						<?php while($query->have_posts()) : $query->the_post(); ?>
							<?php get_template_part('templates/content', 'page'); ?>
							<div class="address-phone">
								<div class="address">
									<?php the_cfc_field('contactus-field', 'contact-address', 19); ?>
								</div>
								<div class="phone">
									<?php the_cfc_field('contactus-field', 'contact-numbers', 19); ?>		
								</div>
							</div>
						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					
					<div class="contact-form">
						<div class="home-contact">
							<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form"]'); ?>
						</div>
					</div>
					<div class="social-media">
						<?php wp_nav_menu(['menu' => 'Social Menu', 'menu_class' => 'social_navigation', 'container_class' => '']); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>