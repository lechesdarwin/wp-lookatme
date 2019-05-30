<?php
if ( !function_exists('lam_custom_theme_options_menu') ):
  function lam_custom_theme_options_menu () {
    add_menu_page( 'Adjustments look at me', 'My lookatme', 'administrator', 'custom_theme_options', 'lam_custom_theme_options_form', 'dashicons-admin-generic', 3);
    add_submenu_page( 'custom_theme_options', 'My colors', 'Material app', 'administrator', 'contact_form_material', 'lam_material' );
    add_submenu_page( 'custom_theme_options', 'RSS', 'RSS', 'administrator', 'rss', 'lam_rss',"dashicons-rss" );
  }
endif;

add_action('admin_menu', 'lam_custom_theme_options_menu');

if ( !function_exists('lam_custom_theme_options_form') ):
  function lam_custom_theme_options_form () {
?>
    <div class="wrap">
      <h1><?php _e('Text styles', 'lam'); ?></h1>
      <p class="row-title">
hello, a lookatme likes to work with the fonts of google fonts, go select the text for their respective fields, and let lookatme do his thing.</p>
<img id="myImg" src="../wp-content/themes/lookatme/assets/help.png" alt="Snow" style="width:100%;max-width:300px">
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
      <form action="options.php" method="POST">
        <?php
          settings_fields('lam_options_group');
          do_settings_sections( 'lam_options_group' );
        ?>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Title url: </th>
            <td>
              <input type="text" id="id_title" name="lam_title" onclick="fntitle()" onpaste="fntitle()" onmouseover="fntitle()" onkeypress="fntitle()" value="<?php echo esc_attr(get_option('lam_title'));?>">
              <input type="text"  id="lam_title" name="lam_title_name" value style="display:none">
              <p row-title>Font name:<?php echo esc_attr(get_option('lam_title_name'));?></p>
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Subtitle url: </th>
            <td>
              <input type="text" id="id_subtitle" name="lam_subtitle" onclick="fnsubtitle()" onpaste="fnsubtitle()" onmouseover="fnsubtitle()" onkeypress="fnsubtitle()" value="<?php echo esc_attr(get_option('lam_subtitle'));?>">
              <input type="text" name="lam_subtitle_name" id="lam_subtitle" value style="display:none">
              <p row-title>Font name:<?php echo esc_attr(get_option('lam_subtitle_name'));?></p>
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Paragraaf url: </th>
            <td>
              <input type="text" id="id_text" name="lam_text" onclick="fntext()" onpaste="fntext()" onmouseover="fntext()" onkeypress="fntext()" value="<?php echo esc_attr(get_option('lam_text'));?>">
              <input type="text" name="lam_text_name" id="lam_text" value style="display:none">
              <p row-title>Font name:<?php echo esc_attr(get_option('lam_text_name'));?></p>
            </td>
          </tr>
        </table>
        <?php submit_button(); ?>
      </form>
    </div>
<?php
  }
endif;

if ( !function_exists('lam_rss') ):
  function lam_rss () {
?>
    <div class="wrap">
      <h1><?php _e('Social networks', 'lam'); ?></h1>
      <p class="row-title">paste the url of social networks where you want to share your website.</p>
      <form action="options.php" method="POST">
        <?php
          settings_fields('lam_options_group');
          do_settings_sections( 'lam_options_group' );
        ?>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Facebook: </th>
            <td>
              <input type="text" id="id_facebook" name="facebook" value="<?php echo esc_attr(get_option('facebook'));?>">
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Instagram: </th>
            <td>
              <input type="text" id="id_instagram" name="instagram"  value="<?php echo esc_attr(get_option('instagram'));?>">
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Twitter: </th>
            <td>
              <input type="text" id="id_twitter" name="twitter" value="<?php echo esc_attr(get_option('twitter'));?>">
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Youtube: </th>
            <td>
              <input type="text" id="id_youtube" name="youtube" value="<?php echo esc_attr(get_option('youtube'));?>">
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">WhatsApp: </th>
            <td>
              <input type="text" id="id_WhatsApp" name="WhatsApp" value="<?php echo esc_attr(get_option('WhatsApp'));?>">
            </td>
          </tr>
        </table>
        <?php submit_button(); ?>
      </form>
    </div>
<?php
  }
endif;

if(!function_exists('lam_material') ):
function lam_material(){
?>
<div class="wrap">

<form action="../wp-content/themes/lookatme/material.php" method="POST" enctype="multipart/form-data">
    <table class="form-table">
      <tr valign="top">
        <th scope="row">
        <h2>
help me have a good presentationgo to  <a href="https://www.materialpalette.com/" target="_blanck">here!</a> Download the file and upload it!</h2>
        </th>
        <td>
        </td>
      </tr>
      <tr valign="top">
        <th scope="row">Material App:</th>
        <td>
          <input type="file" name="material">
        </td>
      </tr>
    </table>
    <?php submit_button();?>
  </form>
</div>

<?php
}
endif;

if ( !function_exists('lam_custom_theme_options_register') ):
  function lam_custom_theme_options_register () {
    register_setting('lam_options_group', 'lam_title' );
    register_setting('lam_options_group', 'lam_title_name' );
    register_setting('lam_options_group', 'lam_subtitle' );
    register_setting('lam_options_group', 'lam_subtitle_name' );
    register_setting('lam_options_group', 'lam_text' );
    register_setting('lam_options_group', 'lam_text_name' );
/**RSS registro */
register_setting('lam_options_group', 'facebook' );
register_setting('lam_options_group', 'youtube' );
register_setting('lam_options_group', 'twitter' );
register_setting('lam_options_group', 'instagram' );
register_setting('lam_options_group', 'WhatsApp' );
}
endif;
add_action('admin_init', 'lam_custom_theme_options_register');
?>
