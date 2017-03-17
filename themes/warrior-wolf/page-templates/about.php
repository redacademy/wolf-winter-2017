<?php
    /**
    * Template Name: About Page
    *
    * @package Warrior Wolf
    */
    get_header(); ?>
        <main id="main" class="site-main" role="main">

<body>

<div id="tab-container" class="tab-container">
  <ul class='etabs'>
    <li class='tab'><a href="#tabs1-html">HTML Markup</a></li>
    <li class='tab'><a href="#tabs1-js">Required JS</a></li>
    <li class='tab'><a href="#tabs1-css">Example CSS</a></li>
  </ul>
  <div id="tabs1-html">
        <div class="inhabitent-about">
        <h2>Overview</h2>
        <?php echo CFS()->get('overview'); ?>
        <h2>My Story</h2>
        <?php echo CFS()->get('my_story'); ?>
        </div>
  </div>
  <div id="tabs1-js">
    <h2>JS for these tabs</h2>
    <!-- content -->
  </div>
  <div id="tabs1-css">
    <h2>CSS Styles for these tabs</h2>
    <!-- content -->
  </div>
</div>
</body>
</html>



    </main>
    <?php get_footer(); ?>