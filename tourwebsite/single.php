<?php  get_header(); ?>

<?php  wp_head(); ?>

<?php while ( have_posts() ) : the_post(); ?>
          <div class="container-fluid">
            <div class = "Single-page-content">
                <h2>
                  <?php  the_title(); ?>
                </h2>
                <?php  the_post_thumbnail(); ?>
                <p>
                <?php  the_excerpt(); ?>
                </p>

                <p>
                <?php  the_content(); ?>
                </p>
            </div>
          </div>
        <?php endwhile; ?>


<?php  get_footer(); ?>