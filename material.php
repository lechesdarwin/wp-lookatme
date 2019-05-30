<?php
include __DIR__."/values.php";
function update_material(){
    $material=fopen("assets/palette.css","r+");
    $material_js=fopen("values/color.js","w");
    $b=fread($material,filesize("assets/palette.css"));
    $b=str_replace(";"," ",$b);
    $a=explode("#",$b);
    fwrite($material_js,"var colorSettings={
        colorPrimaryDark:'#".substr($a[1], 0,6)."',
        colorPrimary:'#".substr($a[2],0,6)."',
        colorBackground:'#".substr($a[3], 0,6)."',
        colorText:'#".substr($a[4],0,6)."',
        colorAccent:'#".substr($a[5],0,6)."',
        colorSecondText:'#".substr($a[6], 0,6)."',
        colorThirdText:'#".substr($a[7], 0,6)."',
        colorDivider:'#".substr($a[8], 0,6)."',}".PHP_EOL);

    fclose($material_js);
    fclose($material);
    unset($material,$material_js,$a,$b);
    }

try {
exec("chmod -R 777 ".__DIR__);
if (copy($_FILES["material"]["tmp_name"],"assets/".$_FILES["material"]["name"])) {
    echo "work";
update_material();
echo "redirect..";
header("Location: http://localhost/wordpress/wp-admin");
    } else {
        echo "
        could not update palette.css";
        echo ERROR_LAM_PERMISOS;
        echo "email: ".SUPPORT_EMAIL_LAM;
        echo "Phone: ".SUPPORT_PHONE_LAM;
        sleep(60);
        header("Location: http://localhost/wordpress/wp-admin");
    }
} catch (\Throwable $th) {
    echo ERROR_LAM_PERMISOS;
    echo "email: ".SUPPORT_EMAIL_LAM;
    echo "Phone: ".SUPPORT_PHONE_LAM;
    sleep(60);
}
    //header("Location: http://localhost/wordpress/wp-admin/admin.php?page=contact_form_material");
