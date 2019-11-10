<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NewSrore
 */
$layout_class = newstore_blog_layout();
get_header();
do_action( 'newstore_before_blog_post');
?>

<?php

get_template_part('/template-parts/content','carosel');

get_template_part('/template-parts/content','PromoSection');

get_template_part('/template-parts/content','Top');

get_template_part('/template-parts/content','Buttom');
?>


<?php
get_footer();
