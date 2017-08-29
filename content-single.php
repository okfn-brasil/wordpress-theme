<?php
/**
 * @package OKFNWP
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post--single'); ?>>
  <p class="post__meta"><?php the_date(); ?>, <?php echo __('by', 'okfnwp'); ?>
    <?php
    // Check if the Co-authrors plugin is available
    if (function_exists('coauthors_posts_links')) {
      coauthors_posts_links();
    } else {
      the_author_posts_link();
    }
    ?></p>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
  <footer class="entry-footer">
    <span class="cat-links"><?php echo __('Posted in:', 'okfnwp') . ' ' . get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'okfnwp')); ?></span>
  </footer>
</article>