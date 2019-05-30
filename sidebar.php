<!-- Search form -->
<form class="form-inline md-form form-sm active-pink-2 mt-2" method="get"  action="<?php echo home_url( '/' ); ?>">
  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="&#x1f50d;" aria-label="Search" name="s">
  <input type="submit" value="&#x1f50d;" style="background: rgba(255, 255, 255, 0);">
</form>

<?php
      dynamic_sidebar( 'main_sidebar' );
  ?>
<?php 
     wp_nav_menu( array( 'theme_location' => 'menu' ) ); ?>