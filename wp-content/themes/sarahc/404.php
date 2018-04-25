<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">
			
				<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<p>
					<?php _e('It appears that this page does not exist! Please use the navigation above or '); ?><br /><a href="<?php echo home_url(); ?>"><?php _e( 'Return home', 'html5blank' ); ?></a>
				</p>
			
			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>

