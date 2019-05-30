<?php header("Content-type: text/css");?>

.text-subtitle{
    font-family: "<?php echo get_option('lam_subtitle_name');?>", sans-serif!important;
  }
  .text-title{
    font-family: "<?php echo get_option('lam_title_name');?>", sans-serif!important;
  }
  .text-text{
    font-family: "<?php echo get_option('lam_text_name');?>", sans-serif!important;
  }
  p,a{
    font-family: "<?php echo get_option('lam_text_name');?>"!important;
    word-wrap: break-word; 
    font-size:20px;
    text-decoration:none!important;
  }
  h1,h2,h3{
    font-family:"<?php echo get_option('lam_title_name');?>","Open sans" ,sans-serif!important;
    margin-bottom: 8px!important;
  }
  h4,h5,h6{
    font-family:  "<?php echo get_option('lam_subtitle_name');?>", sans-serif!important;
  
  }
  