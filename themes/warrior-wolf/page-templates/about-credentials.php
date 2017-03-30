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
	<div class='about-button-container'>
		<button href='<?php echo get_page_link(53); ?>'>view programs</button>
	</div>
  </div>
</section>
<?php get_footer(); ?>