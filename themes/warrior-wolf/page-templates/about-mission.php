<?php
    /**
    * Template Name: About Mission Page
    *
    * @package Warrior Wolf
    */
    get_header(); ?>
<section class='about-header-wrapper'>
<div class='about-background-image'>
  <div class='name-wrapper'>
    <h1>Bruce Wilson</h1>
  </div>
</div>
<div class='bruce-feature'>
</div>
</section>
<div id="tab-container" class="tab-container">
  <div class="about-nav-wrapper">
    <?php
if ( $post->post_parent ) {
    $children = wp_list_pages( array(
        'title_li' => '',
        'child_of' => $post->post_parent,
        'echo'     => 0
    ) );
} else {
    $children = wp_list_pages( array(
        'title_li' => '',
        'child_of' => $post->ID,
        'echo'     => 0
    ) );
}
if ( $children ) : ?>
    <ul class="etabs">
        <?php echo $children; ?>
    </ul>
<?php endif; ?>
  </div>
</div>
<section class='content-wrapper'>
  <div class='wolf-background'>
    <div class='featured-content'>
      <div class='featured-image'>
        <?php the_post_thumbnail(); ?>
      </div>
      <div class='featured-text'>
        <?php echo CFS()->get('featured_quote'); ?>
      </div>
    </div>
    <h2><?php echo CFS()->get('mission_title'); ?></h2>
      <div class='mission-statement'>
        <?php echo CFS()->get('mission_statement'); ?>
      </div>
    </div>
	<div class='about-button-container'>
		<a href='<?php echo home_url('/programs/avalanche-skills-training-level-1')?>'><button><span>view programs</span></button></a>
	</div>
  </div>
</section>
<?php get_footer(); ?>