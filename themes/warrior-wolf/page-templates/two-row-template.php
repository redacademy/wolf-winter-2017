<?php
/*
Template Name: Two Rows Page
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
				<div class="program-icon"></div>
				<h2><?php echo get_the_title(); ?></h2>
				<div class="loop-nav-container"><?php infinite_navigation(); ?></div>
			</div>

			<div class="full-program-container">
				<h2>Overview</h2>

            	<?php while ( have_posts() ) : the_post(); ?>
                	<div class="container">
                    	<?php the_content() ?>
						<?php $lifecoach_description = CFS()->get( 'lifecoach_description' );
						if(!empty($lifecoach_description)) { ?>
							<h4>What is life coaching anyway?</h4>
							<div><?php echo $lifecoach_description; ?></div>
						<?php } ?>

						<?php $lifecoach_approach = CFS()->get( 'warrior_wolf_approach' );
						if(!empty($lifecoach_approach)) { ?>
							<h4>The Warrior Wolf Approach</h4>
							<div><?php echo $lifecoach_approach; ?></div>
						<?php } ?>	
                	</div>
            	<?php endwhile; // End of the loop. ?>

				<?php $photos = CFS()->get( 'equipment' );
				if(!empty($photos)) { ?>
					<h2>required equipment</h2>

					<div class="equipment-container">
						<?php $count = count($photos);
						for($i = 0; $i < $count; $i++) {
							echo '<img src="' . $photos[$i]['equipment_photo'] . '">';
							if ($i < ($count - 1)) {
							echo '<p>+</p>';
							}
						}?>
					</div>
				<?php } ?>

				<?php $full_day = CFS()->get( 'full_day_title' );
				if(!empty($full_day)) { ?>
					<h2>Programs</h2>
					<div class="day-programs-container">
						<h3><?php echo $full_day; ?></h3>
                		<div class="full-day-info"><?php echo CFS()->get('full_day'); ?></div>
                		<p>cost: <?php echo CFS()->get('full_day_price'); ?></p>
            
						<?php $half_day = CFS()->get( 'half_day_title' );
						if(!empty($half_day)) { ?>
                			<h3><?php echo $half_day; ?></h3>
                			<div class="half-day-info"><?php echo CFS()->get('half_day'); ?></div>
                			<p>cost: <?php echo CFS()->get('half_day_price'); ?></p>
						<?php } ?>
					</div>
				<?php } ?>

				<?php $travel_expeditions = CFS()->get( 'expeditions' );
				if(!empty($travel_expeditions)) { ?>
					<h2><?php echo CFS()->get('yearly_travel_expedition'); ?></h2>

					<div class="program-info-container">
						<?php $count = count($travel_expeditions);
						for($i = 0; $i < $count; $i++) {
							echo '<div class="info-wrapper">';
							echo '<h3>' . $travel_expeditions[$i]['travel_location'] . '</h3>';
							echo '<div class="travel-info-wrapper"><h3>( ' . $travel_expeditions[$i]['travel_duration'] . ' )</h3><h3>' . $travel_expeditions[$i]['expedition_availability'] . '</h3></div>';
							echo '<h4>' . $travel_expeditions[$i]['travel_timeframe'] . '</h4>';
							echo '<div>' . $travel_expeditions[$i]['destination_info'] . '</div></div>';
							if ($i < ($count - 1)) {
								echo '<p class="container-separator">_________________</p>';
							}
						} ?>
					</div>
				<?php } ?>

				<?php $lifecoach_quests = CFS()->get( 'lifecoach_quests' );
				if(!empty($lifecoach_quests)) { ?>
					<h2>Life Coaching Programs</h2>

					<div class='program-info-container'>
						<?php $count = count($lifecoach_quests);
						for($i = 0; $i < $count; $i++) {
							echo '<div class="info-wrapper">';
							echo '<h3>' . $lifecoach_quests[$i]['lifecoach_quest_name'] . '</h3>';
							echo '<h3>( ' . $lifecoach_quests[$i]['quest_duration'] . ' )</h3>';
							echo '<div>' . $lifecoach_quests[$i]['quest_description'] . '</div></div>';
							if ($i < ($count - 1)) {
								echo '<p class="container-separator">_________________</p>';
							}
						} ?>
					</div>
				<?php } ?>

        	</div> <!-- .full-program-container -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>