<?php
define('CV_PATH', __FILE__);
function get_fonts(){
	$fonts = array(
		'Lato' 			=> "'Lato', sans-serif;",
		'Montserrat' 	=> "'Montserrat', sans-serif;",
		'Oswald' 	=> 	"'Oswald', sans-serif;",
		'Open_Sans' 	=> "'Open Sans', sans-serif;",
		'Poppins' 	=> "'Poppins', sans-serif;",
		'Raleway' 	=> "'Raleway', sans-serif;",
		'Roboto' 	=> "'Roboto', sans-serif;",
		'Roboto Condensed' 	=> "'Roboto Condensed', sans-serif;",
		'Rubik' 	=> "'Rubik', sans-serif;",

	);
	return $fonts;
}
function get_font_define($key){
	$fonts = get_fonts();
	return $fonts[$key];
}

function get_header(){
	require_once('header.php');
}
function get_footer($tool = 0){
	require_once('footer.php');
	if( isset($_SERVER['HTTP_USER_AGENT']) && $tool ){
 		require_once('tool.php');
 	}
}
function get_layout($default = 0){
	$layout = isset($_COOKIE['layout']) ? (int) $_COOKIE['layout']: 1;

	if($layout == 1 || $default){
		require_once('template/default.php');
	}else if( $layout == 2 ){
		require_once('template/2-columns.php');
	} else {
		require_once('template/1-column.php');
	}
}
function get_letter(){
	require_once('letter/content.php');
}
?>

