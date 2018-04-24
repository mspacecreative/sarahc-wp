<?php
/* Template Name: CV Page */

 get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="cv">

			<!--<h1><?php the_title(); ?></h1>-->
			
		<div class="contact-info">
			<p>
				<?php if( get_field('city', 'options') ): ?>
					<p><?php the_field('city', 'options'); ?></p>
				<?php endif; ?>
				<?php if( get_field('phone_number', 'options') ): ?>
					<p><?php the_field('phone_number', 'options'); ?></p>
				<?php endif; ?>
				<?php if( get_field('email_address', 'options') ): ?>
					<p><a href="mailto:<?php the_field('email_address', 'options'); ?>"><?php the_field('email_address', 'options'); ?></a></p>
				<?php endif; ?>
			</p>
		</div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
