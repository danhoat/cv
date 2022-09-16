<?php
global $is_index;
$is_index = 1;
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('define.php');
require_once('functions.php');
?>
<?php get_header(); ?>
<?php //get_letter();?>
<?php

$pos = isset($_GET['pos']) ? $_GET['pos']:'fullstack';

get_pos_layout($pos);?>
<?php get_footer();?>
