<!-- Products section -->
<section id="aa-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-product-area">
                        <div class="aa-product-inner">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#dm1" data-toggle="tab">Danh mục 1</a></li>
                                <li><a href="#dm2" data-toggle="tab">Danh mục 2</a></li>
                                <li><a href="#dm3" data-toggle="tab">Danh mục 3</a></li>
                                <li><a href="#dm4" data-toggle="tab">Danh mục 4</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men product category -->
                                <div class="tab-pane fade in active" id="dm1">
                                    <ul class="aa-product-catg">
                                        <!--Bắt đầu một sản phẩm-->
                                        <?php
                                        $product = new WP_Query(array(
                                            'post_type'      => 'product',
                                            'post_status'    => 'publish',
                                            'tax_query'      => array(
                                                array(
                                                    'taxonomy' => 'product_cat',
                                                    'field'    => 'slug',
                                                    'terms'    => 'danh-muc-2'
                                                )
                                            ),
                                            // products orderby="date" order="desc"  lấy sản phẩm mới nhất
                                           'orderby'        => 'ID',
                                            'order'          => 'ASC',
                                            'posts_per_page' => '8'));

                                        ?>
                                        <?php while ($product->have_posts()) :
                                            $product->the_post(); ?>
                                            <li>
                                                <figure>
                                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                                                    <a class="aa-add-card-btn "
                                                       href="?add-to-cart=<?php the_ID(); ?>"><span
                                                                class="fa fa-shopping-cart"></span>Mua Ngay

                                                    </a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                    href="<?php the_permalink() ?>"
                                                                    rel="bookmark"> <?php the_title(); ?></a>
                                                        </h4>
                                                        <span class="aa-product-price">$<?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?></span>
                                                        <span class="aa-product-price"><del>$<?php echo get_post_meta(get_the_ID(), '_sale_price', true); ?></del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="<?php the_permalink() ?>"><span
                                                                class="fa fa-search">View</span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                <p><?php  ?></p>
                                            </li>
                                            <!-- Sản phẩm --><?php endwhile;
                                        wp_reset_query(); ?>
                                    </ul>

                                    <a class="aa-browse-btn" href="#">Xem tất cả sản phẩm<span
                                                class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / men product category -->
                                <!-- start women product category -->
                                <!--ĐÓNG DANH MỤC SẢN PHẨM THỨ 2-->
                                <div class="tab-pane fade" id="dm2">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        <!--Bắt đầu một sản phẩm-->
                                        <?php
                                        $product = new WP_Query(array(
                                            'post_type'      => 'product',
                                            'post_status'    => 'publish',
                                            'tax_query'      => array(
                                                array(
                                                    'taxonomy' => 'product_cat',
                                                    'field'    => 'slug',
                                                    'terms'    => 'danh-muc-2'
                                                )
                                            ),
                                            'orderby'        => 'ID',
                                            'order'          => 'ASC',
                                            'posts_per_page' => '8'));
                                        ?>
                                        <?php while ($product->have_posts()) : $product->the_post(); ?>
                                            <li>
                                                <figure>
                                                    <a href="#"><?php the_post_thumbnail(); ?></a>
                                                    <a class="aa-add-card-btn"
                                                       href="<?php the_permalink() ?>"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                    href="#"> <?php the_title(); ?></a></h4>
                                                        <span class="aa-product-price">$<?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?></span>
                                                        <span class="aa-product-price"><del>$<?php echo get_post_meta(get_the_ID(), '_sale_price', true); ?></del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="<?php the_permalink() ?>" data-toggle2="tooltip"
                                                       data-placement="top"
                                                       title="Quick View" data-toggle="modal"
                                                       data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- Sản phẩm --><?php endwhile;
                                        wp_reset_query(); ?>
                                        <!-- start single product item -->
                                    </ul>
                                </div>
                                <!--ĐÓNG DANH MỤC SẢN PHẨM THỨ 2-->

                                <!--ĐÓNG DANH MỤC SẢN PHẨM THỨ 3-->
                                <div class="tab-pane fade" id="dm3">
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->

                                        <!--Bắt đầu một sản phẩm-->
                                        <?php
                                        $product = new WP_Query(array(
                                            'post_type'      => 'product',
                                            'post_status'    => 'publish',
                                            'tax_query'      => array(
                                                array(
                                                    'taxonomy' => 'product_cat',
                                                    'field'    => 'id',
                                                    'terms'    => '22'
                                                )
                                            ),
                                            'orderby'        => 'ID',
                                            'order'          => 'ASC',
                                            'posts_per_page' => '8'));
                                        ?>
                                        <?php while ($product->have_posts()) : $product->the_post(); ?>


                                            <li>
                                                <figure>
                                                    <a href="#"><?php the_post_thumbnail(); ?></a>
                                                    <a class="aa-add-card-btn"
                                                       href="<?php the_permalink() ?>"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                    href="#"> <?php the_title(); ?></a></h4>
                                                        <span class="aa-product-price">$<?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?></span>
                                                        <span class="aa-product-price"><del>$<?php echo get_post_meta(get_the_ID(), '_sale_price', true); ?></del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="<?php the_permalink() ?>" data-toggle2="tooltip"
                                                       data-placement="top"
                                                       title="Quick View" data-toggle="modal"
                                                       data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">khuyến mãi!</span>
                                            </li>
                                            <!-- Sản phẩm --><?php endwhile;
                                        wp_reset_query(); ?>

                                        <!-- start single product item -->

                                    </ul>
                                </div>
                                <!--ĐÓNG DANH MỤC SẢN PHẨM THỨ 3-->

                                <!--ĐÓNG DANH MỤC SẢN PHẨM THỨ 4-->
                                <div class="tab-pane fade" id="dm4">
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->

                                        <!--Bắt đầu một sản phẩm-->
                                        <?php
                                        $product = new WP_Query(array(
                                            'post_type'      => 'product',
                                            'post_status'    => 'publish',
                                            'tax_query'      => array(
                                                array(
                                                    'taxonomy' => 'product_cat',
                                                    'field'    => 'id',
                                                    'terms'    => '21'
                                                )
                                            ),
                                            'orderby'        => 'ID',
                                            'order'          => 'ASC',
                                            'posts_per_page' => '8'));
                                        ?>
                                        <?php while ($product->have_posts()) : $product->the_post(); ?>


                                            <li>
                                                <figure>
                                                    <a href="#"><?php the_post_thumbnail(); ?></a>
                                                    <a class="aa-add-card-btn"
                                                       href="<?php the_permalink() ?>"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                    href="#"> <?php the_title(); ?></a></h4>
                                                        <span class="aa-product-price">$<?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?></span>
                                                        <span class="aa-product-price"><del>$<?php echo get_post_meta(get_the_ID(), '_sale_price', true); ?></del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="<?php the_permalink() ?>" data-toggle2="tooltip"
                                                       data-placement="top"
                                                       title="Quick View" data-toggle="modal"
                                                       data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- Sản phẩm --><?php endwhile;
                                        wp_reset_query(); ?>
                                        <!-- start single product item -->
                                    </ul>
                                </div>
                                <!--ĐÓNG DANH MỤC SẢN PHẨM THỨ 4-->
                            </div>
                            <!-- quick view modal -->
                            <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                            </div><!-- / quick view modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Products section -->