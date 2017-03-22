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
    <h1>Bruce Wilson</h1>
  </div>
</div>
<div class="bruce-feature">
</div>
</section>
<div id="tab-container" class="tab-container">
  <div class="about-nav-wrapper">
    <ul class='etabs'>
      <li class='tab'><a href="<?php echo get_template_directory_uri(); ?>/page-templates/about.php">Bio</a></li>
      <li class='tab'><a href="//localhost:3000/warrior-wolf/about/credentials">Credentials</a></li>
      <li class='tab'><a href="<?php echo get_template_directory_uri(); ?>/about-method.php">Method</a></li>
      <li class='tab'><a href="<?php echo get_template_directory_uri(); ?>/about-mission.php">Mission</a></li>
    </ul>
  </div>
</div>
<section class="content-wrapper">
<h2>Overview</h2>
<?php echo CFS()->get('overview'); ?>

<h2>My Story</h2>
<?php echo CFS()->get('my_story'); ?>
</section>
<?php get_footer(); ?>