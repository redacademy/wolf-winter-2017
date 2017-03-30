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
<section class="content-wrapper">
<div class="wolf-background">
  <div class="about-text-wrapper">
    <div class="overview-wrapper">
      <h2>Overview</h2>
      <?php echo CFS()->get('overview'); ?>
    </div>
    <div class="my-story-wrapper">
      <h2>My Story</h2>
      <div class="my-story-entry">
          <?php echo CFS()->get('my_story'); ?>
        </div>
        </div>
    </div>
    <div class='about-button-container'>
      <button href='<?php echo get_page_link(53); ?>'>view programs</button>
    </div>
  </div>
</section>
<?php get_footer(); ?>