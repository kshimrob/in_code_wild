<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="index-page">    
  <div class="main-content">
    <?php if ( have_posts() ): ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('content-blog', get_post_format()); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  
  <?php get_sidebar(); ?>
  
  <?php if ( have_posts() ): ?>
    <div id="navigation" class="container">
        <div class="left"><?php next_posts_link('<span>Older Posts</span>'); ?></div>
        <div class="right"><?php previous_posts_link('<span>Newer Posts</span>'); ?></div>
    </div>
  <?php endif; ?>
</section>
<?php get_footer(); ?>
