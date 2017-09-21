<?php
/*
 * Template Name: Register - Responsive Test
 */
?>

<!-- start content container -->

                <?php // theloop
                if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <h1 class="page-header"><?php the_title() ;?></h1>
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                    <?php comments_template(); ?>

                <?php endwhile; ?>
                <?php else: ?>

                    <?php get_404_template(); ?>

                <?php endif; ?>


<!-- end content container -->


