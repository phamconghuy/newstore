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
                                <li class="active"><a href="#men" data-toggle="tab">Men</a></li>
                                <li><a href="#women" data-toggle="tab">Women</a></li>
                                <li><a href="#sports" data-toggle="tab">Sports</a></li>
                                <li><a href="#electronics" data-toggle="tab">Electronics</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men product category -->
                                <div class="tab-pane fade in active" id="men">
                                    <ul class="aa-product-catg">


                                        <!--Bắt đầu một sản phẩm-->
                                        <?php
                                        $vnkings = new WP_Query(array(
                                            'post_type'      => 'product',
                                            'post_status'    => 'publish',
                                            'tax_query'      => array(
                                                array(
                                                    'taxonomy' => 'product_cat',
                                                    'field'    => 'id',
                                                    'terms'    => 'ID_Của_Danh_Mục_Sản_Phẩm'
                                                )
                                            ),
                                            'orderby'        => 'ID',
                                            'order'          => 'ASC',
                                            'posts_per_page' => '8'));
                                        ?>
                                        <?php while ($vnkings->have_posts()) :
                                            $vnkings->the_post(); ?>


                                            <li>
                                                <figure>
                                                    <a href="http://wordpress.local/DAWP/sản phẩm/<?php the_title() ?>"><?php the_post_thumbnail(); ?></a>
                                                    <a class="aa-add-card-btn " href="?add-to-cart=<?php the_ID(); ?>"><span class="fa fa-shopping-cart"></span>Mua Ngay

                                                    </a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                    href="http://wordpress.local/DAWP/sản phẩm/<?php the_title() ?>""> <?php the_title(); ?></a>
                                                        </h4>
                                                        <span class="aa-product-price"><?php $price = get_post_meta(get_the_ID(), "price", true) ?>></span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="http://wordpress.local/DAWP/single/"><span
                                                                class="fa fa-search">View</span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- Sản phẩm --><?php endwhile;
                                        wp_reset_query(); ?>


                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / men product category -->
                                <!-- start women product category -->
                                <div class="tab-pane fade" id="women">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-1.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-2.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-3.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-4.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-5.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>

                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-6.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-7.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-1.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / women product category -->
                                <!-- start sports product category -->
                                <div class="tab-pane fade" id="sports">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/sports/sport-1.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/sports/sport-2.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/sports/sport-3.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/sports/sport-4.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/sports/sport-5.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/sports/sport-6.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/sports/sport-7.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/sports/sport-8.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- / sports product category -->
                                <!-- start electronic product category -->
                                <div class="tab-pane fade" id="electronics">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                            src="img/electronics/electronic-1.png" alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                            src="img/electronics/electronic-2.png" alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                            src="img/electronics/electronic-3.png" alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                            src="img/electronics/electronic-4.png" alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                            src="img/electronics/electronic-5.png" alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                            src="img/electronics/electronic-6.png" alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                            src="img/electronics/electronic-7.png" alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                            src="img/electronics/electronic-8.png" alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / electronic product category -->
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