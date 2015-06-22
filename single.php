<?php
/**
 * The template for displaying all single posts.
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php tha_content_top(); ?>
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php tha_entry_before(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php tha_entry_after(); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					tha_comments_before();
					comments_template();
					tha_comments_after();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	<?php tha_content_after(); ?>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
