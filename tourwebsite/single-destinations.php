<?php  

get_header(); ?>


<?php  wp_head(); ?>

<?php while ( have_posts() ) : the_post(); ?>
            <div class="container">
                <div class = "Single-page-content">
                    <h2>
                    <?php  the_title(); ?>
                    </h2>


                    <a href="<?php  the_permalink(); ?>">
                    <?php  the_post_thumbnail(); ?>
                </a>
                    <p>
                    <?php  the_excerpt(); ?>
                    </p>

                    <div class="container">
                        <p>
                        <?php  the_content(); ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>


<?php  get_footer(); ?>