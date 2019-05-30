<?php get_header(); ?>
<div  class=" light-primary-color">
  <div class="entradas">
<?php while ( have_posts() ) : the_post(); ?>
  <article>
    <?php the_post_thumbnail(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
</article>
</div>
  <?php endwhile; ?>
  <div class="antesdelfooter">
  <ol>
    <?php wp_list_comments()?>
  </ol>
  <?php comments_template(); ?>
  </div>

</div >
<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>
