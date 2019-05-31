<?php if (is_home() || is_front_page()) {?>
  <div class="pagrss" style="margin-top: 100px;">
<?php }?>
<div class="pagrss" style="margin-top: 20px;">
  <div class="rss">
  <!-- <span class="s1"> -->
  <a href="<?php echo esc_attr(get_option('twitter'));?>"><i class="fab fa-twitter" style='font-size:48px;color:#1da1f2;padding-top: 14px;'></i></a>
  <!-- </span> -->
  <!-- <span> -->
  <a href="<?php echo esc_attr(get_option('facebook'));?>"><i class="fab fa-facebook-f" style='font-size:48px;color:#1877F2'></i></a>
  <!-- </span> -->
  <!-- <span> -->
  <a href="<?php echo esc_attr(get_option('instagram'));?>"><i class="fab fa-instagram" style='font-size:48px;color:#cf1f28c2'></i></a>
  <!-- </span> -->
  <!-- <span> -->
  <a href="<?php echo esc_attr(get_option('youtube'));?>"><i class="fab fa-youtube" style='font-size:48px;color:#FF0000'></i></a>
  <!-- </span> -->
  <!-- <span> -->
  <a href="<?php echo esc_attr(get_option('WhatsApp'));?>"><i class="fab fa-whatsapp" style='font-size:48px;color:#58e870'></i></a>
  <!-- </span> -->
  </div>
  <div class="pagination rss">
  <?php previous_post_link();?>
  <?php next_post_link()?>
  </div>
  
</div>
<!-- Footer -->
<footer  style="background: white;margin-top: 3px;">

<div class="row">
  <div class="col-md-6">
    <div class="footer-r">
    <?php wp_nav_menu( array( 'theme_location' => 'footer-r' ) ); ?>
  </div>
</div>
<div class="col-md-6">
          <div class="footer-l">
          <?php wp_nav_menu( array( 'theme_location' => 'footer-l' ) ); ?>
          </div>
  </div>
  <div class="col-md-10">
    <div class="footer-b">
    <?php wp_nav_menu( array( 'theme_location' => 'footer-b' ) ); ?>
    </div>
  </div>
</div>
<p style="padding: 10px;">
    &copy;<?php echo date('Y') . __('all rights reserved', 'mawt'); ?>
    <a href="<?php echo get_site_url()?>" target="_blank"><?php bloginfo("name")?></a>.
  </p>
</footer>
<!-- Footer -->
</div>
<script>
window.onload=function(){
    var contenedor=document.getElementById("contenedor_carga");
    contenedor.style.visibility="hidden";
		contenedor.style.opacity="0";document.getElementById("carga").remove();
		
}

</script>
<?php wp_footer()?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style.css'?>">
<script src="<?php echo get_template_directory_uri().'/values/color.js'?>"></script>
<script src="<?php echo get_template_directory_uri().'/values/ux.js'?>"></script>
<script src="<?php echo get_template_directory_uri().'/values/icons.js'?>"></script>
<script src="<?php echo get_template_directory_uri().'/values/dimens.js'?>"></script>
<script src="<?php echo get_template_directory_uri().'/values/fonts.js'?>"></script>
<script src="<?php echo get_template_directory_uri().'/values/strings.js'?>"></script>
<script src="<?php echo get_template_directory_uri().'/values/ux.js'?>"></script>
<script src="<?php echo get_template_directory_uri().'/values/support.js'?>"></script>
<script src="<?php echo get_template_directory_uri().'/support.js'?>""></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
 <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script>
if (document.getElementById("wpadminbar")) {
  document.getElementById("wpadminbar").style.display="none";
} else {
  console.log("mierda")
}

toolbar.getElementById("img-menu").addEventListener("click",
function(){$("#aside2").toggle()});
document.getElementById("img-float").addEventListener("click",function(){$(".aside").toggle(400)});
toolbar.getElementById("toolbar-logo").addEventListener("click",function(){
	location.href=location.origin;
});

/**init test de lazi */
$(function() {
        $('.lazy').Lazy();
    });
                
toolbar.getElementById("container-toolbar").style.boxShadow="box-shadow: 10px 10px 19px -10px rgba(0,0,0,0.75);"

if (document.getElementById("submit")) {
  $("#submit").addClass("accent-color");document.getElementById("submit").style.borderRadius="5px";
  document.getElementById("submit").style.padding="5px";
} else {
  
}
</script>
</body>
</html>