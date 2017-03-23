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
			<?php echo get_the_post_thumbnail(); ?>
			<img class="program-icon" src="<?php echo CFS()->get('program_icon'); ?>" alt="<?php echo get_the_title(); ?> icon">
			<h2><?php echo get_the_title(); ?></h2>
			<div class="loop-nav-container"><?php infinite_navigation(); ?></div>
		</div>
		<div class="full-program-container">
			<h2>Overview</h2>

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="container">
                    <?php the_content() ?>
                </div>
            <?php endwhile; // End of the loop. ?>

				<h2>Programs</h2>
				<div class="day-programs-container">
                    <h3><?php echo CFS()->get('full_day_title'); ?></h3>
                    <div class="full-day-info"><?php echo CFS()->get('full_day'); ?></div>
                    <p>cost: <?php echo CFS()->get('full_price'); ?></p>
                    <h3><?php echo CFS()->get('half_day_title'); ?></h3>
                    <div class="half-day-info"><?php echo CFS()->get('half_day'); ?></div>
                    <p>cost: <?php echo CFS()->get('half_price'); ?></p>
				</div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>