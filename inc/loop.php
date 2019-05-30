<?php 
function loop_index(){
  $pib=1;
  $wp_query = new WP_Query( array(
    'posts_per_page' => 20,
  ) );

  if( $wp_query->have_posts() ):
    while ($wp_query->have_posts()):
       $wp_query->the_post();
  ?>
    <div class="col-md-6" style="background:white;">
    <div class="darwin-content" style="padding: 15px;">
      <img class="lazy fff09" data-src="<?php the_post_thumbnail_url() ?>" atl="<?php the_title() ?>" title="<?php the_title() ?>" style="border-radius: 15px;">
      <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 30px;" >
       <?php the_title();?> 
      </p>
      <?php 
      the_excerpt() ?>
  <?php the_category() ?>
  <?php the_time('F j, Y')?>
  <?php the_time()?>
  <a href="<?php the_permalink() ?>" class="btn-darwin-more accent-color">More...</a>  
</div>
    </div>
<?php 
    endwhile;
  endif;
  wp_reset_postdata();
  wp_reset_query();
}
?>