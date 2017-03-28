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
<div id='tab-container' class='tab-container'>
  <div class='about-nav-wrapper'>
    <ul class='etabs'>
      <li class='tab'><a href='//localhost:3000/warrior-wolf/about/bio'>Bio</a></li>
      <li class='tab'><a href='//localhost:3000/warrior-wolf/about/credentials'>Credentials</a></li>
      <li class='tab'><a href='//localhost:3000/warrior-wolf/about/method'>Method</a></li>
      <li class='tab'><a href='//localhost:3000/warrior-wolf/about/mission'>Mission</a></li>
    </ul>
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
		<button href=''>view programs</button>
	</div>
  </div>
</section>
<?php get_footer(); ?>