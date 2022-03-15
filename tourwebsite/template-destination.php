<?php
/**Template Name: destination
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Amplified_Antennas
 * @since 1.0
 * @version 1.0
 */
?>
<?php get_header(); ?>
<div class="row">
    <?php query_posts(array('post_type' => 'destinations')); ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="col-6 my-4 Destpost">
            <a href="<?php  the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
            <div class="mt-3">
                <h5 class=""><a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></h5>
                <?php the_excerpt(); ?>
            </div>
        </div>   
    <?php endwhile; ?>
</div>
<?php get_footer();?>