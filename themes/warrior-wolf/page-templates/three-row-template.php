<?php
/*
Template Name: Three Rows Page
Template Post Type: programs
*/
$allowed_html = array('br' => array());
get_header(); ?>
	<?php $programs = get_posts(array( 'post_type' => 'programs', 'order' => 'ASC', 'numberposts' => '-1')); ?>
        	<nav class="program-menu-container">
				<ul>
            	<?php foreach ( $programs as $program ): ?>
					<li class='desktop-program'>
						<a href='<?php echo get_permalink($program);?>'>
							<p><?php echo get_the_title($program); ?></p>
                    		<div class='desktop-program-icon'></div>
						</a>
                	</li>
            	<?php endforeach; ?>
				</ul>
        	</nav>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="hero-container">
			<div class="program-icon"></div>
			<h2><?php echo get_the_title(); ?></h2>
			<div class="loop-nav-container"><?php wolf_infinite_navigation(); ?></div>
		</div>
		<div class="full-program-container">
			<div class='desktop-left-panel'>
			<h2>Overview</h2>

			<?php $avalanche_duration_info = CFS()->get( 'avalanche_program_duration' );
				if(!empty($avalanche_duration_info)) { ?>
				<div class="short-overview-container">
					<p><span>Duration:</span> <?php echo wp_kses($avalanche_duration_info, $allowed_html); ?></p>
					<p><span>Location:</span> <?php echo CFS()->get('avalanche_program_location'); ?></p>
				</div>
			<?php } ?>

			<?php $hiking_duration_info = CFS()->get( 'hiking_duration' );
				if(!empty($hiking_duration_info)) { ?>
					<div class="short-overview-container">
					<p>Duration: <?php echo $hiking_duration_info; ?></p>
					<p>Location: <?php echo CFS()->get('hiking_location'); ?></p>
					</div>
				<?php } ?>

			<?php $goals = CFS()->get( 'course_goals' );
				if(!empty($goals)) { ?>
					<div class="goals-container container">
						<h4>At the end of the course, students will be able to:</h4>
						<div class="list-container">
							<ul>
								<?php foreach ( $goals as $goal ) { ?>
    								<li> <?php echo $goal['goals'];?> </li>
								<?php } ?>
							</ul>
						</div>
                		<p><span class='desktop-cost-title'>cost: </span><?php echo CFS()->get('avalanche_program_price'); ?></p>
					</div>
				<?php } ?>

			<?php $hiking_tips = CFS()->get( 'hiking_basic_guide' );
				if(!empty($hiking_tips)) { ?>
					<div class="hiking-tips-container container">
						<h4>Please note that the following equipment list is to be used as a basic guide. Keep gear as minimal as possible without sacrificing comfort:</h4>
						<div class="list-container">
							<ul>
								<?php foreach ( $hiking_tips as $tip ) { ?>
    								<li> <?php echo $tip['hiking_list'];?> </li>
								<?php } ?>
							</ul>
						</div>
					</div>
				<?php } ?>
			</div> <!-- .desktop-left-panel -->

			<div class='desktop-right-panel'>

			<?php $photos = CFS()->get( 'equipment' );
			if(!empty($photos)) { ?>
				<h2>required equipment</h2>
				<p class='desktop-tips'>(rental equipment not included)</p>

				<div class="equipment-container">
					<?php $count = count($photos);
					for($i = 0; $i < $count; $i++) {
						echo '<img src="' . $photos[$i]['equipment_photo'] . '">';
						if ($i < ($count - 1)) {
							echo '<p>+</p>';
						}
					} ?>
				</div>
			<?php } ?>

			<div class='photo-holder-right'></div>
			</div> <!-- .desktop-right-panel -->
		</div> <!-- .full-program-container -->

		<div class="full-important-container">
			<?php $skills_requirement_info = CFS()->get( 'skill_requirements' );
			if(!empty($skills_requirement_info)) { ?>
				<h2>important</h2>

				<div class="skills-container container">
					<div class="number-circle">
						<h3>1</h3>
					</div>
					<div class='container-right-content'>
						<h4>skills requirements</h4>
						<div class='container-content'><?php echo $skills_requirement_info; ?></div>
					</div>
				</div>

				<div class="conditions-container container">
					<div class="number-circle">
						<h3>2</h3>
					</div>
					<div class='container-right-content'>
					<h4>snow conditions</h4>
						<div class='container-content'><?php echo CFS()->get('avalanche_program_conditions'); ?></div>
					</div>
				</div>

				<div class="location-info-container container">
					<div class="number-circle">
						<h3>3</h3>
					</div>
					<div class='container-right-content'>
						<h4>location</h4>
						<div class='container-content'><?php echo CFS()->get('avalanche_location_info'); ?></div>
					</div>
				</div>
			<?php }?>
		</div>

		<div class="button-container">
			<a href="#openModal3">Register Here</a>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>