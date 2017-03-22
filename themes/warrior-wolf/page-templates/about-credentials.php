<?php
    /**
    * Template Name: About Credentials Page
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
      <li class='tab'><a href="//localhost:3000/warrior-wolf/about-me/credentials">Credentials</a></li>
      <li class='tab'><a href="<?php echo get_template_directory_uri(); ?>/about-method.php">Method</a></li>
      <li class='tab'><a href="<?php echo get_template_directory_uri(); ?>/about-mission.php">Mission</a></li>
    </ul>
  </div>
</div>
<section class="content-wrapper">


  <?php
/*
    A loop field named "gallery" with sub-fields "slide_title" and "upload"
    Loop fields return an associative array containing *ALL* sub-fields and their values
    NOTE: Values of sub-loop fields are returned when using get() on the parent loop!
*/
$fields = CFS()->get( 'credential' );
foreach ( $fields as $field ) {?>
    <li>
    <?php echo $field['credential_title']; ?>
    <?php echo $field['credential_date']; ?>
          </li>
<?php } ?>


</section>
<?php get_footer(); ?>