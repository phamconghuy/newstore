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
    <?php if (is_active_sidebar('footer-widget-area-col-1') || is_active_sidebar('footer-widget-area-col-2') || is_active_sidebar('footer-widget-area-col-3') || is_active_sidebar('footer-widget-area-col-4')): ?>
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                        if (is_active_sidebar('footer-widget-area-col-' . $i)) {
                            echo '<div class="footer-widget-column col-md-3 col-sm-6">';
                            dynamic_sidebar('footer-widget-area-col-' . $i);
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
                                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Dịch vụ </a></li>
                                        <li><a href="http://www.dawp.xyz/index.php/shop/">Sản phẩm</a></li>
                                        <li><a href="http://www.dawp.xyz/index.php/gioi-thieu/">Giới thiệu</a></li>
                                        <li><a href="http://www.dawp.xyz/index.php/lien-he/">Liên hệ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Danh mục</h3>
                                        <?php

                                        $args = array(
                                            'hide_empty' => 0,
                                            'taxonomy'   => 'product_cat',
                                            'orderby'    => 'id',
                                            'number'     => '5',
                                        );
                                        $categories = get_categories($args);
                                        foreach ($categories as $category) { ?>
                                            <ul class="aa-footer-nav">
                                                <li>
                                                    <a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name; ?></a>
                                                </li>
                                            </ul>
                                            <?php
//                                            woocommerce_subcategory_thumbnail( $category );
                                        } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Liên kết hữu ích</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="https://www.google.com/maps/search/Qu%C3%A1n+c%C3%A0+ph%C3%AA/@10.839483,106.692095,14z?hl=vi">Bản đồ</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Tìm kiếm</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Tìm kiếm nâng cao</a></li>
                                            <li><a href="https://www.google.com.vn/search?q=L%C3%80M-G%C3%8C-C%C3%93+-AI-CUNG-C%E1%BA%A4P&hl=vi&tbs=ic:specific,isc:black,itp:animated,isz:l,sur:fmc&tbm=isch&sxsrf=ACYBGNRtieanyuBr14koAVxuIB0j4AN-ig:1575099949565&source=lnt&sa=X&ved=0ahUKEwj53-rHuJHmAhWxxIsBHfLSAZ8QpwUIIg&biw=1536&bih=731&dpr=1.25">Nhà cung cấp</a></li>
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
                                            <a href="https://www.facebook.com/profile.php?id=100007436920626&ref=br_rs"><span class="fa fa-facebook"></span></a>
                                            <a href="ĐỂ-CHO-VUI-CHỨ-KHÔNG-CÓ-XÀI"><span class="fa fa-twitter"></span></a>
                                            <a href="ĐỂ-CHO-VUI-CHỨ-KHÔNG-CÓ-XÀI"><span class="fa fa-google-plus"></span></a>
                                            <a href="https://www.youtube.com/channel/UCKD7Nk7MduMV1Y2k8TImCCA?view_as=subscriber"><span class="fa fa-youtube"></span></a>
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
                        <p><a href="http://www.dawp.xyz/">SHOP TEA</a></p>
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
                                printf(esc_html__('Copyright   &copy; | SHOP TEA .', 'newstore'), esc_html(date_i18n(__('Y', 'newstore'))), get_bloginfo('name', 'display'));
                                ?>
                                </span>
                                <span class="sep" style="color: #777">|
                                <?php
                                /* translators: 1: Theme name, 2: Theme author. */
                                printf(esc_html__('Được cắt ghép bởi: %1$s  %2$s', 'newstore'), '<a href="' . esc_url('https://themefarmer.com/free-themes/newstore/') . '" tyle="color: #777" >CHÚNG TUI </a>', 'Nguồn đâu đó trên mạng');
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



<?php wp_footer(); ?>
<!-- jQuery library -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.smartmenus.js"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.smartmenus.bootstrap.js"></script>
<!-- To Slider JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sequence.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sequence-theme.modern-slide-in.js"></script>
<!-- Product view slider -->
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.simpleGallery.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.simpleLens.js"></script>
<!-- slick slider -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/nouislider.js"></script>
<!-- Custom js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

</body>
</html>
