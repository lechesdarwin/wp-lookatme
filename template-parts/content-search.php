
<div class="panel panel-default">
<h2>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>  
<div class="panel-body">
  <?php the_excerpt(); ?>
  </div>
  <div class="img-responsive">
    <?php the_post_thumbnail("small"); ?>
  </div>


</div>
