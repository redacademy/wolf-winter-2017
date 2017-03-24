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
      <li class='tab'><a href="//localhost:3000/warrior-wolf/about/bio">Bio</a></li>
      <li class='tab'><a href="//localhost:3000/warrior-wolf/about/credentials">Credentials</a></li>
      <li class='tab'><a href="//localhost:3000/warrior-wolf/about/method">Method</a></li>
      <li class='tab'><a href="//localhost:3000/warrior-wolf/about/mission">Mission</a></li>
    </ul>
  </div>
</div>
<section class="credential-wrapper">
<div class="wolf-background">
<ul>
<?php
$fields = CFS()->get( 'credential' );
foreach ( $fields as $field ) {?>
    <li>
      <div class="credential-title-wrapper">
        <?php echo $field['credential_info']; ?>
      </div>
      <div class="credential-date-wrapper">
        <?php echo $field['credential_date']; ?>
      </div>
    </li>
<?php } ?>
</ul>
	<div class="button-container">
		<a href="">view programs</a>
	</div>
  </div>
</section>
<?php get_footer(); ?>