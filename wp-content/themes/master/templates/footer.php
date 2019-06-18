<footer id="footer-me">
	<p class="text-center">&copy; <?php echo date('Y'); ?> Web Design: <img src="<?php echo get_template_directory_uri(); ?>/dist/images/fav-logo.png" alt="HopeBT"></p>
	<div class="footer-nav">
		<?php wp_nav_menu(['menu' => 'Primary Navigation', 'menu_class' => 'primary_navigation', 'container_class' => '']); ?>
		</div>
</footer>