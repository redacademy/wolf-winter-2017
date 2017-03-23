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
		<div class="full-program-container">
			<h2>Overview</h2>

			<div class="short-overview-container">
				<p>Duration: <?php echo CFS()->get('duration'); ?></p>
				<p>Location: <?php echo CFS()->get('location'); ?></p>
			</div>

			<div class="goals-container container">
				<h4>At the end of the course, students will be able to:</h4>
				<div class="goals-list-container">
					<ul>
						<?php $goals = CFS()->get( 'course_goals' );
						foreach ( $goals as $goal ) { ?>
    						<li> <?php echo $goal['goals'];?> </li>
						<?php } ?>
					</ul>
				</div>
			</div>

			<h2>required equipment</h2>

			<div class="equipment-container"></div>
		</div> <!-- .full-program-container -->

		<div class="full-important-container">
			<h2>important</h2>

			<div class="skills-container container">
				<div class="number-circle">
					<h3>1</h3>
				</div>
				<h4>skills requirements</h4>
				<p><?php echo CFS()->get('skill_requirements'); ?></p>
			</div>

			<div class="conditions-container container">
				<div class="number-circle">
					<h3>2</h3>
				</div>
				<h4>snow conditions</h4>
				<p><?php echo CFS()->get('conditions'); ?></p>
			</div>

			<div class="location-info-container container">
				<div class="number-circle">
					<h3>3</h3>
				</div>
				<h4>location</h4>
				<p><?php echo CFS()->get('location_info'); ?></p>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
