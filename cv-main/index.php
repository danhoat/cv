<?php
global $is_index;
$is_index = 1;
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('define.php');
require_once('functions.php');
?>
<?php get_header(); ?>
<?php get_layout(1);?>
<?php get_footer();?>
