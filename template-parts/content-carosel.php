<!-- Start slider -->
<?php
$posts = get_posts()
?>
<section id="aa-slider">
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
                <ul class="seq-canvas">
                    <?php
                    foreach ($posts as $key => $post)
                    {
                        ?>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <a href="<?php the_permalink() ?>"><img data-seq src="<?php the_post_thumbnail(); ?>" alt="Men slide img" /></a>
                        </div>
                        <div class="seq-title">
                            <a href="<?php the_permalink() ?>"><h2 data-seq><?php echo wp_trim_words($post ->post_title, '5') ;   ?></h2></a>
                            <a href="<?php the_permalink() ?>"><p data-seq style="color: #000e14"><b><?php echo wp_trim_words($post ->post_excerpt, '15') ;   ?></b></p></a>
                            <a data-seq href="http://www.dawp.xyz/DAWP/index.php/shop/" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                        </div></a>
                    </li>
            <?php
            }
            ?>
                    <!-- single slide item -->
                </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
    </div>
</section>
<!-- / slider -->