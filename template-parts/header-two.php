<div id="wpf-loader-two">
    <div class="wpf-loader-two-inner">
        <span>Loading</span>
    </div>
</div>
<!-- / wpf loader Two -->

<header id="masthead" class="site-header">
    <div id="aa-header">
        <!-- start header top  -->
        <div class="aa-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-top-area">
                            <!-- start header top left -->
                            <div class="aa-header-top-left">
                                <!-- start language -->
                                <div class="aa-language">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/flag/english.jpg" alt="english flag">ENGLISH
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/flag/french.jpg" alt="">FRENCH</a></li>
                                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/flag/english.jpg" alt="">ENGLISH</a></li>
                                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/flag/vn.jpg" alt="">VIỆT NAM</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / language -->

                                <!-- start currency -->
                                <div class="aa-currency">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i class="fa fa-usd"></i>USD
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                                            <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                                            <li><a href="#"><i class="">đ</i>VNĐ</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / currency -->
                                <!-- start cellphone -->
                                <div class="cellphone hidden-xs">
                                    <p><span class="fa fa-phone"></span>113-114-115</p>
                                </div>
                                <!-- / cellphone -->
                            </div>
                            <!-- / header top left -->
                            <div class="aa-header-top-right">
                                <ul class="aa-head-top-nav-right">
                                    <li><a href="account.html">My Account</a></li>
                                    <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>
                                    <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                                    <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>
                                    <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start header bottom  -->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-small-center text-left"><?php newstore_get_contact_block(); ?></div>
                <div class="col-md-6 text-small-center text-right">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'top_nav',
                        'depth'          => 1,
                        'container'      => false,
                        'menu_class'     => 'topbar-menu',
                        'menu_id'        => 'topbar-menu',
                        'fallback_cb'    => false,
                    ));
                    ?>
                    <?php newstore_get_social_block(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <?php
            if (class_exists('WooCommerce')) {
                get_template_part('template-parts/header-middle', 'wc');
            } else {
                get_template_part('template-parts/header-middle', 'wp');
            }
            ?>
        </div>

    </div>
    <div class="header-main">
        <div class="container">
            <div class="primary-menu-container">
                <nav id="site-navigation" class="main-navigation navbar navbar-expand-md navbar-light row"
                     role="navigation">
                    <div class="navbar-header sm-order-2">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <!-- Left nav -->
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TRANG CHỦ</a></li>
                                <li><a href="http://www.dawp.xyz/index.php/shop/">CỬA HÀNG<span class="caret"></span></a> </li>
                                <li><a href="http://www.dawp.xyz/index.php/checkout/">THANH TOÁN <span class="caret"></span></a></li>
                                <li><a href="#">LIÊN HỆ <span class="caret"></span></a> </li>
                                <li><a href="#">GIỚI THIỆU</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                        </div>
                </nav><!-- #site-navigation -->
            </div>
        </div>
    </div>
    <?php if (get_theme_mod('newstore_sticky_header_enable', true)): ?>
        <div id="sticky-header-container"></div>
    <?php endif; ?>
</header><!-- #masthead -->
<!--header của họ-->
<!-- wpf loader Two -->

