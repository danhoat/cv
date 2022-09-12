<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function getSiteUrl(){
    $protocol = 'http://';
    if (isset($_SERVER['HTTPS']) &&
        ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
      $protocol = 'https://';
    }
    $basic = $_SERVER['HTTP_HOST'];
    if($basic == "localhost"){
        $site_url = $protocol.$basic."/cv";
    } else {
        $site_url = $protocol.$basic."/";
    }
    return $site_url;
}

$site_url = getSiteUrl();

define('SITE_URL',$site_url);
define('IMG_URL',SITE_URL.'/img');
define('ICON_URL',SITE_URL.'/icons');

?>