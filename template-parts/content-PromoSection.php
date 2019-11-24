<!-- Start Promo section -->
<section id="aa-promo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-promo-area">
                    <div class="row">
                        <!-- promo left -->
                        <div class="col-md-5 no-padding">
                            <div class="aa-promo-left">
                                <?php
                                $args = array(
                                    'taxonomy' => 'product_cat',
                                    'orderby'  => 'id',
                                );
                                $categories = get_categories($args);
                                foreach ($categories as $key => $category) {
                                    $idd = mt_rand(0, 6);
                                    if ($key = $idd) {
                                        ?>
                                        <a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>">
                                            <div class="aa-promo-banner">
                                                <?php woocommerce_subcategory_thumbnail($category); ?>
                                                <div class="aa-prom-content">
                                                    <span><?php echo $category->name ?></span>
                                                    <h4>
                                                        <?php echo $category->name; ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <!-- promo right -->
                        <div class="col-md-7 no-padding">
                            <div class="aa-promo-right">
                                <?php
                                $args = array(
                                    'hide_empty' => 0,
                                    'taxonomy'   => 'product_cat',
                                    'orderby'    => 'id',
                                    'number'     => 4,
                                );
                                $categories = get_categories($args);
                                foreach ($categories as $category) { ?>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <?php woocommerce_subcategory_thumbnail($category); ?>
                                            <div class="aa-prom-content">
                                                <span><?php echo $category->name ?></span>
                                                <h4>
                                                    <a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name; ?></a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <?php

                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Promo section -->