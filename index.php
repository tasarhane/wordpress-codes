<?php get_header(); ?>

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php the_category(', ') ?>
    <?php  the_author(); ?>
    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
    <?php edit_post_link('Edit', ' &#124; ', ''); ?>
  <?php endwhile; ?>
    <?php posts_nav_link(); ?>
  <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
