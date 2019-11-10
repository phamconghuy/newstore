<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NewSrore
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer footer">
		<?php if ( is_active_sidebar( 'footer-widget-area-col-1') ||is_active_sidebar( 'footer-widget-area-col-2') ||is_active_sidebar( 'footer-widget-area-col-3') ||is_active_sidebar( 'footer-widget-area-col-4')): ?>
		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<?php 
						for ($i=1; $i <= 4; $i++){
							if (is_active_sidebar( 'footer-widget-area-col-'.$i) ){
								echo '<div class="footer-widget-column col-md-3 col-sm-6">';
								dynamic_sidebar( 'footer-widget-area-col-'.$i);
								echo '</div>';
							}
						}
					?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="footer-site-info site-info text-center">
			<div class="container">
				<span class="copy-text">
				<?php 
					printf(esc_html__( 'Copyright &copy; %1$s %2$s All Right Reserved.', 'newstore' ), esc_html(date_i18n(__('Y', 'newstore'))), get_bloginfo( 'name', 'display')); 
				?>
				</span>
				<span class="sep">|</span>
				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s', 'newstore' ), '<a href="'.esc_url('https://themefarmer.com/free-themes/newstore/').'">NewStore</a>', 'ThemeFarmer' );
				?>
			</div>
		</div><!-- .site-info -->
		<a href="#" id="scroll-top" style="display: none;"><i class="fa fa-angle-up"></i></a>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- jQuery library -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.smartmenus.js"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.smartmenus.bootstrap.js"></script>
<!-- To Slider JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sequence.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sequence-theme.modern-slide-in.js"></script>
<!-- Product view slider -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.simpleGallery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.simpleLens.js"></script>
<!-- slick slider -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/nouislider.js"></script>
<!-- Custom js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

</body>
</html>
