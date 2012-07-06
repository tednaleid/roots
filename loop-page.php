<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
      <div class="page-header">
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      </div>
      <?php the_content(); ?>
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    <?php roots_post_inside_after(); ?>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>
<div class="pagination clearfix">
    <ul>
	<li class="prev"><?php next_posts_link('&laquo; '.__('Older','roots')) ?></li>
	<li class="next"><?php previous_posts_link(__('Newer','roots').' &raquo;') ?></li>
    </ul>
</div>
