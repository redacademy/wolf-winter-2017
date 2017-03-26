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
      <li class='tab'><a href="//localhost:3000/warrior-wolf/about">Bio</a></li>
      <li class='tab'><a href="//localhost:3000/warrior-wolf/about/credentials">Credentials</a></li>
      <li class='tab'><a href="//localhost:3000/warrior-wolf/about/method">Method</a></li>
      <li class='tab'><a href="//localhost:3000/warrior-wolf/about/mission">Mission</a></li>
    </ul>
  </div>
</div>
<section class="content-wrapper">
<div class="wolf-background">
  <div class="overview-wrapper">
  <h2>Overview</h2>
  <?php echo CFS()->get('overview'); ?>
  </div>
  <div class="my-story-wrapper">
  <h2>My Story</h2>
  <?php echo CFS()->get('my_story'); ?>
  </div>
	<div class="button-container">
		<a href="">view programs</a>
	</div>
  </div>
</section>
<?php get_footer(); ?>