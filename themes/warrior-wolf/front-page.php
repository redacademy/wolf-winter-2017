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

			<!-- PROGRAMS PANEL -->
        	<?php $programs = get_posts(array( 'post_type' => 'programs', 'order' => 'ASC', 'numberposts' => '-1')); ?>
        	<div class="programs-container">
				<h2>My Programs</h2>
            	<?php foreach ( $programs as $program ): ?>
                	<div class="program-wrapper">
                    	<img src="<?php echo get_the_post_thumbnail_url($program); ?>">
                    	<a href='<?php echo get_permalink($program);?>'><?php echo get_the_title($program); ?></a>
                	</div>
            	<?php endforeach; ?>
        	</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
