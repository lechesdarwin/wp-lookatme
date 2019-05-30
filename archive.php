
<?php get_header(); ?>
<div style="margin-top: 130px;" class="main light-primary-color">
  <main class="Cont">
    <div class="Search-results">
    <?php
      if ( is_category() ):
        $term_title = __('Results for the category: ', 'mawt');
      endif;

      if ( is_tag() ):
        $term_title = __('Results for the label : ', 'mawt');
      endif;
    ?>
      <h3><?php echo $term_title; ?><?php single_term_title(); ?></h3>

  </div>
    <?php
      if ( have_posts() ): while ( have_posts() ): the_post();
        get_template_part( 'template-parts/content-search' );
      endwhile; else:
        get_template_part( 'template-parts/content-none' );
      endif;
    ?>
  </main>
  <?php
    get_sidebar();
  ?>
</div>
<?php get_footer(); ?>


