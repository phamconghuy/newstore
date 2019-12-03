<?php
$layout_class = newstore_blog_layout();
get_header();
do_action( 'newstore_before_blog_post');
?>
    <section id="aa-catg-head-banner">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>GIỚI THIỆU</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a></li>
                        <li class="active">GIỚI THIỆU</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();

