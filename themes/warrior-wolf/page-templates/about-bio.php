    <?php
    /**
    * Template Name: About Bio Page
    *
    * @package Inhabitent Theme
    */
    get_header(); ?>
    <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <header class="entry-header">
        <div class="container">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div>
        </div>
    </header>

    <div class="container">
        <div class="inhabitent-about">
        <h2>Our Story</h2>
        <?php echo CFS()->get('overview'); ?>
        <h2>Our Team</h2>
        <?php echo CFS()->get('bio'); ?>
        </div>
    </div>



    </main>
    </div>
    <?php get_footer(); ?>