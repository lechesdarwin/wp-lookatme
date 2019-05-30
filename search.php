<?php get_header(); ?>
<div style="margin-top: 130px;" class="main light-primary-color">
  <main class="Cont">
    <div class="Search-results">
      <h3><?php  _e( 'Search results : ', 'lam' ); ?><?php echo get_search_query(); ?></h3>
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
