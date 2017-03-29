<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
$allowed_html = array('br' => array());
get_header(); ?>

	<div id='primary' class='content-area'>
		<main id='main' class='site-main' role='main'>

			<div class='hero-container'>
				<h2><?php echo get_the_title(); ?></h2>
			</div>

			<div class='faq-container'>
				<?php $faq_items = CFS()->get( 'faq_items' );
				if(!empty($faq_items)) : 
					foreach( $faq_items as $item ) : ?>
    					<div class='question-wrapper'>
							<span>+</span>
							<p><?php echo wp_kses($item['faq_question'], $allowed_html);?></p>
						</div>
						<div class='answer-wrapper'>
							<p><?php echo wp_kses($item['faq_answer'], $allowed_html);?></p>
						</div>
					<?php endforeach; 
				endif; ?>
			</div>

			<div class='button-container'>
				<a href='<?php echo get_page_link(53); ?>'>View Programs</a>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
