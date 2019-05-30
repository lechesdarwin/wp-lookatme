<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo("name")?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/palette.css'?>">
    <link href="<?php echo get_option('lam_subtitle');?>" rel="stylesheet">
    <link href="<?php echo get_option('lam_text');?>" rel="stylesheet">
    <link href="<?php echo get_option('lam_title');?>" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri().'/manifest.js'?>" onload='initPath("<?php echo get_template_directory_uri()."/"?>")'></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/init.css'?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/style.php'?>">

    <?php wp_head()?>
    <link rel="stylesheet" href="<?php echo get_option('lam_title');?>">
    <link rel="stylesheet" href="<?php echo get_option('lam_subtitle');?>">
    <link rel="stylesheet" href="<?php echo get_option('lam_text');?>">
    <style>

</style>
 
</head>
<body style="overflow-x:hidden!important;">
    <div id="contenedor_carga" class="default-primary-color ">
        <div id="carga"></div>
    </div>
    <div class="aside2  light-primary-color" id="aside2">
        <span style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
            Pages
          </span>
          <ul>
            <?php wp_list_pages('title_li'); ?>
          </ul>
        </div>
      
    <?php include_once get_template_directory()."/inc/loop.php";include_once get_template_directory()."/inc/lib.php";
    /**
     * Aquel que este apunto de leer est codigo no valla a criticar que hay mucho codigo repetido de aqui pa adelante del toolbar
     * estaba apurado y de programar en php no me cae muy buen humor.
     */
    ?>
    <!-- desde aqui comienza lo intoncable del toolbar:->start
    ============================================================================================= -->
    <?php 
    
    if (has_custom_logo()) {
    $url=parse_url_logo(get_custom_logo());
    ?>
    <?php if (is_home() || is_front_page()) {?>
      
      <meod-toolbar id="puto" md-action-sd md-action-use-sd></meod-toolbar>
    <script>
    console.log(<?php echo $url?>)
    var a=<?php echo $url?>;
    console.log(a)
    document.getElementById("puto").setAttribute("md-logo",`(>${a})`);
    </script>
    
    <? } ?>
    <meod-toolbar md-action md-action-use="back" id="puto" md-action-sd md-action-use-sd></meod-toolbar>
    <script>
    console.log(<?php echo $url?>)
    var a=<?php echo $url?>;
    console.log(a)
    document.getElementById("puto").setAttribute("md-logo",`(>${a})`)
    </script>
    
    <?php } else {
    if( is_home() || is_front_page()){?>
      <meod-toolbar  md-title="#<?php bloginfo("name")?>" md-action-sd md-action-use-sd></meod-toolbar>
    <?php } else{?>
    <meod-toolbar  md-action md-action-use="back" md-title="#<?php bloginfo("name")?>" md-action-sd md-action-use-sd></meod-toolbar>
    
    <?php  } }
    ?>
    <!-- Ni se te ocurratocar esta parte ya esta ok:->end
    ========================================================================================== -->
    <div class="scrollmenu default-primary-color text-primary-color ">
    <ul>
            <?php wp_list_categories('title_li'); ?>
          </ul>
    </div>
       
  <aside class="aside ">
   <?php get_sidebar()?>
  </aside>
  <meod-button-float class="default-primary-color" md-cr-img="(><?php echo get_template_directory_uri().'/mipmap/icons8-menu-24.png'?>)" ></meod-button-float>
