<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php 
            $loop = new WP_Query( array( 'post_type' => 'stores', 'posts_per_page' => -1 ) ); 

            while ( $loop->have_posts() ) : $loop->the_post();

            the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); 
            ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
