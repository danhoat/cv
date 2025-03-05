<?php

	$content_font 	= isset($_COOKIE['content_font']) ? $_COOKIE['content_font'] : 'Rubik';
	$label_font 	= isset($_COOKIE['label_font']) ? $_COOKIE['label_font'] : 'Rubik';
	$css= '';
	if($label_font){
		$label_css  = get_font_define($label_font);
		$css.=" .col-content .label{ font-family:{$label_css}; font-weight:400; margin-bottom:15px; }";
	}
	if($content_font){
		$font_css  = get_font_define($content_font);
		$css.=" .col-content{ font-family:{$font_css}; font-size:16px; } .col-content li span{font-size:16px;} ";
	}
 ?>
<style type="text/css"><?php echo $css;?></style>
</body>
</html>