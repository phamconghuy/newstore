<!-- popular section -->
<section id="aa-popular-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- start prduct navigation -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#sale" data-toggle="tab">KHUYẾN MÃI</a></li>
                            <li><a href="#banchay" data-toggle="tab">BÁN CHẠY</a></li>
                            <li><a href="#noibac" data-toggle="tab">NỔI BẬT</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- DANH MỤC SẢN PHẨM KHUYẾN MÃI -->
                            <div class="tab-pane fade in active" id="sale">
                                <ul class="aa-product-catg aa-featured-slider">
                                    <?php
                                    $product = new WP_Query(array(
                                        'post_type'      => 'product',
                                        'posts_per_page' => '8',
                                        'meta_query'     => array(
                                            'relation' => 'OR',
                                            array(
                                                'key'           => '_sale_price',
                                                'value'         => 0,
                                                'compare'       => '>',
                                                'type'          => 'numeric'
                                            ))));
                                    ?>
                                    <!-- start single product item -->
                                    <?php while ($product->have_posts()) : $product->the_post(); ?>
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                                            <a class="aa-add-card-btn" href="<?php the_permalink() ?>"><span class="fa fa-shopping-cart"></span>Mua Hàng</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a
                                                            href="#"> <?php the_title(); ?></a></h4>
                                                <span class="aa-product-price"> <del><?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?>vnđ</del></span>
                                                <span class="aa-product-price "> <?php echo get_post_meta(get_the_ID(), '_sale_price', true); ?>vnđ</span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="<?php the_permalink() ?>" data-toggle="tooltip" data-placement="top" title="Ưa thích"><span class="fa fa-heart-o"></span></a>
                                            <a href="<?php the_permalink() ?>" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                            <a href="<?php the_permalink() ?>" data-toggle2="tooltip" data-placement="top" title="Chi tiết" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                        </div>
                                        <span class="aa-badge aa-badge aa-sale" href="#">KHUYẾN MÃI</span>
                                    </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                            <!-- DANH MỤC SẢN PHẨM KHUẾN MÃI -->
                            <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
                            <div class="tab-pane fade" id="banchay">
                                <ul class="aa-product-catg aa-featured-slider">
                                    <?php
                                    $product = new WP_Query(array(
                                        'post_type'      => 'product',
                                        'posts_per_page' => '8',
                                        'meta_query'     => array(
                                            array(
                                                'meta_key'       => '_wc_average_rating',
                                                'orderby'        => 'meta_value_num',
                                                'order'          => 'ASC',
                                            ))));
                                    ?>
                                    <?php while ($product->have_posts()) : $product->the_post(); ?>
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                                                <a class="aa-add-card-btn" href="<?php the_permalink() ?>"><span class="fa fa-shopping-cart"></span>Mua Hàng</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a
                                                                href="#"> <?php the_title(); ?></a></h4>
                                                    <span class="aa-product-price"> <?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?>vnđ</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="<?php the_permalink() ?>" data-toggle="tooltip" data-placement="top" title="Ưa thích"><span class="fa fa-heart-o"></span></a>
                                                <a href="<?php the_permalink() ?>" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="<?php the_permalink() ?>" data-toggle2="tooltip" data-placement="top" title="Chi tiết" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">BÁN CHẠY</span>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                            <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
                            <!-- DANH MỤC SẢN PHẨM NỔI BẬC -->
                            <div class="tab-pane fade" id="noibac">
                                <ul class="aa-product-catg aa-latest-slider">
                                    <?php
                                    $tax_query[] = array(
                                        'taxonomy' => 'product_visibility',
                                        'field'    => 'name',
                                        'terms'    => 'featured',
                                        'operator' => 'IN',
                                    );
                                    ?>
                                    <?php $args = array( 'post_type' => 'product','posts_per_page' => 10,'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
                                    <?php $getposts = new WP_query( $args);?>
                                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                        <?php global $product; ?>
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                                                <a class="aa-add-card-btn" href="<?php the_permalink() ?>"><span class="fa fa-shopping-cart"></span>Mua Hàng</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a
                                                                href="#"> <?php the_title(); ?></a></h4>
                                                    <span class="aa-product-price"> <?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?>vnđ</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="<?php the_permalink() ?>" data-toggle="tooltip" data-placement="top" title="Ưa thích"><span class="fa fa-heart-o"></span></a>
                                                <a href="<?php the_permalink() ?>" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="<?php the_permalink() ?>" data-toggle2="tooltip" data-placement="top" title="Chi tiết" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">NỔI BẬT</span>
                                        </li>
                                    <?php endwhile; wp_reset_postdata(); ?>
                                </ul>
                            </div>
                            <!-- DANH MỤC SẢN PHẨM NỔI BẬC -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / popular section -->