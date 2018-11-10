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
 */

get_header();
?>

	<div id="primary">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( !is_front_page() ) :
				?>
				<div>
					<h1>Hello there!!!!</h1>
				</div>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

			endwhile;

            if (is_home() || is_front_page()) :
                get_template_part( 'template-parts/content', 'home' );
            endif;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();