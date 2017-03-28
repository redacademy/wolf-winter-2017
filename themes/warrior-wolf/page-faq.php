<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id='primary' class='content-area'>
		<main id='main' class='site-main' role='main'>

			<div class='hero-container'>
				<h2><?php echo get_the_title(); ?></h2>
			</div>

			<div class='faq-container'>
				<?php $faq_items = CFS()->get( 'faq_items' );
				if(!empty($faq_items)) { 
					foreach ( $faq_items as $item ) { ?>
    					<div class='question-wrapper'>
							<span>+</span>
							<p><?php echo $item['faq_question'];?></p>
						</div>
						<div class='answer-wrapper'>
							<p><?php echo $item['faq_answer'];?></p>
						</div>
					<?php } 
				} ?>
			</div>

			<div class='button-container'>
				<a href='<?php echo get_page_link(53); ?>'>View Programs</a>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
