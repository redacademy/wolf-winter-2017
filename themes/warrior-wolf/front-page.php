<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="desktop-parallax-container">
				<div class="banner-container">
					<div class="intro-text-wrapper">
						<h2>Bruce Wilson</h2>
						<h3>Outdoor Adventure Guide &amp; Life Coach</h3>
					</div>
					<p>"fight within yourself to be the best person you can be."</p>
					<a href="">Let's begin</a>
				</div>

				<!--INFO SECTION-->
				<div class="blah">
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
				</div>


			<div class="quote-container">
				<p>"Courage, above all things, is the first quality of a warrior"</p>
				<p>—  Sun</p>
			</div>
			</div> <!--desktop banner container -->
		
		<div class="testtest">

		<div class="mrpie">

			<div class="slice1">
				<div class="slice1-inside">
					<a href="">
						<div class="icon"></div>
						<p>Avalanche Skills Training (level 2)</p>
					</a>
				</div>
			</div>

			<div class="slice2">
				<div class="slice2-inside">
					<a href="">
						<div class="icon"></div>
						<p>Sea Kayaking</p>
					</a>
				</div>
			</div>

			<div class="slice3">
				<div class="slice3-inside">
					<a href="">
						<div class="icon"></div>
						<p>Paddleboarding</p>
					</a>
				</div>
			</div>

			<div class="slice4">
				<div class="slice4-inside">
					<a href="">
						<div class="icon"></div>
						<p>Life Coaching</p>
					</a>
				</div>
			</div>

			<div class="slice5">
				<div class="slice5-inside">
					<a href="">
						<div class="icon"></div>
						<p>Travel Expeditions (long-term)</p>
					</a>
				</div>
			</div>

			<div class="slice6">
				<div class="slice6-inside">
					<a href="">
						<div class="icon"></div>
						<p>Hiking</p>
					</a>
				</div>
			</div>

			<div class="slice7">
				<div class="slice7-inside">
					<a href="">
						<div class="icon"></div>
						<p>Backcountry Ski Tour</p>
					</a>
				</div>
			</div>

			<div class="slice8">
				<div class="slice8-inside">
					<a href="">
						<div class="icon"></div>
						<p>Avalanche Skills Training (level 1)</p>
					</a>
				</div>
			</div>
		</div>

		<div class="pie"></div>
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
