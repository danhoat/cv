<?php

$response 	= array('success' => true,'msg' => 'DONE');
$action 	= isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
$font 		= isset($_REQUEST['font']) ? $_REQUEST['font']:'';
if($action == 'content_font'){
	setcookie("content_font", $font);
	echo json_encode($response);
} else if($action == 'label_font') {
	setcookie("label_font", $font);
	echo  json_encode($response);
} else if($action == 'set_layout') {
	$layout 		= $_REQUEST['layout'];
	setcookie("layout", $layout);
	echo  json_encode($response);
}
?>