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
		<a href="#" id="scroll-top" style="display: none;"><i class="fa fa-angle-up"></i></a>
	</footer><!-- #colophon -->
	<section id="aa-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-subscribe-area">
                    <h3>Đăng ký tài khoản </h3>
                    <p>Hãy đăng ký để nhận được những thông báo mới nhất về sản phẩm!!</p>
                    <form action="" class="aa-subscribe-form">
                        <input type="email" name="" id="" placeholder="Email">
                        <input type="submit" value="Đăng ký">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Subscribe section -->

<!-- footer -->
<footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-top-area">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <h3>Menu</h3>
                                    <ul class="aa-footer-nav">
                                        <li><a href="#">Trang chủ</a></li>
                                        <li><a href="#">Dịch vụ </a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li><a href="#">Giới thiệu</a></li>
                                        <li><a href="#">Liên hệ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Danh mục</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Danh mục . . .</a></li>
                                            <li><a href="#">Danh mục . . .</a></li>
                                            <li><a href="#">Danh mục . . .</a></li>
                                            <li><a href="#">Danh mục . . .</a></li>
                                            <li><a href="#">Danh mục . . .</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Liên kết hữu ích</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Bản đồ</a></li>
                                            <li><a href="#">Tìm kiếm</a></li>
                                            <li><a href="#">Tìm kiếm nâng cao</a></li>
                                            <li><a href="#">Nhà cung cấp</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Liên hệ</h3>
                                        <address>
                                            <p> Nghĩa Hành, Quảng Ngãi, VN</p>
                                            <p><span class="fa fa-phone"></span>+0359441919</p>
                                            <p><span class="fa fa-envelope"></span>dawp@gmail.com</p>
                                        </address>
                                        <div class="aa-footer-social">
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                            <a href="#"><span class="fa fa-youtube"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-bottom-area">
                        <p><a href="http://www.dawp.xyz/">dawp.xyz</a></p>
                        <div class="aa-footer-payment">
                            <span class="fa fa-cc-mastercard"></span>
                            <span class="fa fa-cc-visa"></span>
                            <span class="fa fa-paypal"></span>
                            <span class="fa fa-cc-discover"></span>
                        </div>
                        <div class="text-center">
                            <div class="container">
                                <span class="copy-text" style="color: #777">
                                <?php
                                printf(esc_html__( 'Copyright &copy; %1$s %2$s All Right Reserved.', 'newstore' ), esc_html(date_i18n(__('Y', 'newstore'))), get_bloginfo( 'name', 'display'));
                                ?>
                                </span>
                                <span class="sep" style="color: #777">|
                                <?php
                                /* translators: 1: Theme name, 2: Theme author. */
                                printf( esc_html__( 'Theme: %1$s by %2$s', 'newstore' ), '<a href="'.esc_url('https://themefarmer.com/free-themes/newstore/').'" tyle="color: #777" >DAWP</a>', 'ThemeFarmer' );
                                ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->

<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Đăng nhập hoặc đăng ký</h4>
                <form class="aa-login-form" action="">
                    <label for="">Username hoặc Emai<span>*</span></label>
                    <input type="text" placeholder="Username hoặc Email">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password">
                    <button class="aa-browse-btn" type="submit">Đăng nhập</button>
                    <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Nhớ mật khẩu </label>
                    <p class="aa-lost-password"><a href="#">Quên mật khẩu ?</a></p>
                    <div class="aa-register-now">
                        Không có tài khoản ?<a href="account.html">Đăng ký!</a>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
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
