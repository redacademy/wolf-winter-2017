<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="banner-container">
				<div class="intro-text-wrapper">
					<h2>Bruce Wilson</h2>
					<h3>Outdoor Adventure Guide &amp; Life Coach</h3>
				</div>
				<p>"fight within yourself to be the best person you can be."</p>
			</div>

			<!--INFO SECTION-->
			<h2>Warrior Wolf</h2>
			<div class="homepage-credentials-container">
				<div class="location-container credentials-container">
					<div class="avatar-picture"></div>
					<p>Bruce Wilson</p>
					<p>Squamish, BC, Canada</p>
				</div>
				<div class="short-info-container credentials-container">
					<p>As a certified outdoor specialist, I provide avalanche skills training, backcountry tours, sea kayaking trips, life coaching, and much more.</p>
				</div>
				<div class="credentials-widgets-container credentials-container">
					<?php get_sidebar(); ?>
				</div>
				<div class="button-container bio-button">
					<a href="<?php echo get_page_link(30); ?>">learn more</a>
				</div>
			</div>

			<div class="quote-container">
				<p>"Courage, above all things, is the first quality of a warrior"</p>
				<p>—  Sun</p>
			</div>

			<!-- PROGRAMS PANEL -->
        	<?php $programs = get_posts(array( 'post_type' => 'programs', 'order' => 'ASC', 'numberposts' => '-1')); ?>
			<h2>My Programs</h2>
        	<div class="programs-container">
            	<?php foreach ( $programs as $program ): ?>
					<div class="program-wrapper">
						<a href='<?php echo get_permalink($program);?>'>
                    		<div class="thumbnail-container">
                    			<p><?php echo get_the_title($program); ?></p>
							</div>
						</a>
                	</div>
            	<?php endforeach; ?>
        	</div>

			<div class="button-container programs-button">
					<a href="">view programs</a>
				</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
