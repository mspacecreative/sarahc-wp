<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			/post thumbnail -->
			
			<!-- Photo Gallery -->
			<?php 
			
			$images = get_field('photos');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			
			if( $images ): ?>
			    <ul class="gallery-photos">
			        <?php foreach( $images as $image ): ?>
			            <li>
			            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
			            </li>
			        <?php endforeach; ?>
			    </ul>
			<?php endif; ?>
			<!-- /Photo Gallery -->
			
			<!-- Vimeo video -->
			<?php 
			
			$video = get_field('video');
			
			if( $video ): ?>
			    <div class="video"><?php the_field('video'); ?></div>
			<?php endif;
			
			?>
			<!-- /Vimeo video -->
			
			<!-- post details -->
			<span class="date"><?php _e('Posted '); the_time('F j, Y'); ?></span>
			<!-- /post details -->
			
			<!-- post title -->
			<h1 class="single-title">
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->

			<div class="single-content">
				<?php the_content(); // Dynamic Content ?>
			</div>
			
			<div class="post-navigation clear">
				<div class="half prev-link">
					<?php previous_post_link('%link', 'Previous'); ?>
				</div>
				<div class="half next-link">
					<?php next_post_link('%link', 'Next'); ?>
				</div>
			</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
