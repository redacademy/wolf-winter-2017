<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<?php $programs = get_posts(array( 'post_type' => 'programs', 'order' => 'ASC', 'numberposts' => '-1')); ?>
        	<div class="programs-container">
            	<?php foreach ( $programs as $program ): ?>
					<div>
						<a href='<?php echo get_permalink($program);?>'>
                    		<div>
                    			<p><?php echo get_the_title($program); ?></p>
							</div>
						</a>
                	</div>
            	<?php endforeach; ?>
        	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="hero-container">
			<?php echo get_the_post_thumbnail(); ?>
			<h2><?php echo get_the_title(); ?></h2>
			<?php the_post_navigation(); ?>
		</div>

		<h2>Overview</h2>
		<div class="short-overview-container">
			<p>Duration: <?php echo CFS()->get('duration'); ?></p>
			<p>Location: <?php echo CFS()->get('location'); ?></p>
		</div>
		<div class="goals-container">
			<p>At the end of the course, students will be able to:</p>
			<?php $goals = CFS()->get( 'course_goals' );
			foreach ( $goals as $goal ) { ?>
    			<p> <?php echo $goal['goals'];?> </p>
			<?php } ?>
		</div>
		<h2>required equipment</h2>
		<div class="equipment-container"></div>
		<h2>important</h2>
		<div class="skills-container">
			<h4>skills requirements</h4>
			<p><?php echo CFS()->get('skill_requirements'); ?></p>
		</div>
		<div class="conditions-container">
			<h4>snow conditions</h4>
			<p><?php echo CFS()->get('conditions'); ?></p>
		</div>
		<div class="location-container">
			<h4>location</h4>
			<p><?php echo CFS()->get('location_info'); ?></p>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
