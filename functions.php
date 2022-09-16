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
function get_pos_layout($name = ''){

	$path = 'template/'.$name.'.php';
	require_once($path);

}
function get_letter(){
	require_once('letter/content.php');
}
?>

