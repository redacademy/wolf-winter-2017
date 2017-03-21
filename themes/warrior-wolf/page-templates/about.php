<?php
    /**
    * Template Name: About Page
    *
    * @package Warrior Wolf
    */
    get_header(); ?>
<section class="about-header-wrapper">
<div class="about-background-image">
  <div class="name-wrapper">
    <p>Bruce Wilson</p>
  </div>
</div>
<div class="bruce-feature">
</div>
</section>
<section>
<div id="tab-container" class="tab-container">
  <div class="about-nav-wrapper">
    <ul class='etabs'>
      <li class='tab'><a href="<?php echo get_template_directory_uri(); ?>/page-templates/about.php">Bio</a></li>
      <li class='tab'><a href="<?php echo get_template_directory_uri(); ?>/page-templates/about-credentials.php">Credentials</a></li>
      <li class='tab'><a href="<?php echo get_template_directory_uri(); ?>/about-method.php">Method</a></li>
      <li class='tab'><a href="<?php echo get_template_directory_uri(); ?>/about-mission.php">Mission</a></li>
    </ul>
  </div>
</div>
</section>
<section>
<h2>Overview</h2>
<?php echo CFS()->get('overview'); ?>

<h2>My Story</h2>
<?php echo CFS()->get('my_story'); ?>
</section>
<?php get_footer(); ?>