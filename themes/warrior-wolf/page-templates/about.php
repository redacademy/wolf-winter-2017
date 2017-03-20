<?php
    /**
    * Template Name: About Page
    *
    * @package Warrior Wolf
    */
    get_header(); ?>
<div id="tab-container" class="tab-container">
  <ul class='etabs'>
    <li class='tab'><a href="<?php echo get_template_directory_uri(); ?>/page-templates/about.php">Bio</a></li>
    <li class='tab'><a href="<?php echo get_template_directory_uri(); ?>/page-templates/about-credentials.php">Credentials</a></li>
    <li class='tab'><a href="<?php echo get_template_directory_uri(); ?>/about-method.php">Method</a></li>
    <li class='tab'><a href="<?php echo get_template_directory_uri(); ?>/about-mission.php">Mission</a></li>
  </ul>

<h2>Overview</h2>
<?php echo CFS()->get('overview'); ?>

<h2>My Story</h2>
<?php echo CFS()->get('my_story'); ?>

<?php get_footer(); ?>