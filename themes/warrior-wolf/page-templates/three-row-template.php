<?php
/*
Template Name: Three Rows Page
Template Post Type: programs
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
			<div class="program-icon"></div>
			<h2><?php echo get_the_title(); ?></h2>
			<div class="loop-nav-container"><?php infinite_navigation(); ?></div>
		</div>
		<div class="full-program-container">
			<h2>Overview</h2>

			<div class="short-overview-container">
				<p>Duration: <?php echo CFS()->get('avalanche_program_duration'); ?></p>
				<p>Location: <?php echo CFS()->get('avalanche_program_location'); ?></p>
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
                <p><?php echo CFS()->get('avalanche_program_price'); ?></p>
			</div>

			<h2>required equipment</h2>

			<div class="equipment-container">
				<?php $photos = CFS()->get( 'equipment' );
					$count = count($photos);
					for($i = 0; $i < $count; $i++) {
						echo '<img src="' . $photos[$i]['equipment_photo'] . '">';
						if ($i < ($count - 1)) {
						echo '<p>+</p>';
						}
					} ?>
			</div>
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
				<p><?php echo CFS()->get('avalanche_program_conditions'); ?></p>
			</div>

			<div class="location-info-container container">
				<div class="number-circle">
					<h3>3</h3>
				</div>
				<h4>location</h4>
				<p><?php echo CFS()->get('avalanche_location_info'); ?></p>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>