<?php
require_once('define.php');
define('DOMPDF_ENABLE_CSS_FLOAT ', true);
require_once "vendor/autoload.php";
use Dompdf\Dompdf;

//if( isset($_REQUEST['submit_val']) ) {
if( 1 == 1 ){
	$dompdf = new Dompdf();
	$type= 1;
	$url = $site_url =  SITE_URL;

	if($type ==1 ){
		//$html 	= file_get_contents($url);
		// if(function_exists('curl_init')) {
		//     $content = http::fetch_content($url);
		// } else {
		//     $content = file_get_contents($url);
		// }
		//$content  = fetch_url($url);
		//$opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
	    //Basically adding headers to the request
	    //$context 	= stream_context_create($opts);
	    //$html 		= file_get_contents($site_url,false,$context);

	    $html 		= file_get_contents($site_url);
		$dompdf->loadHtml($html);
		$customPaper = array(0,0,650,860);
		$dompdf->set_paper($customPaper);

		$dompdf->render();
		$dompdf->stream("",array("Attachment" => false));
		exit(0);

	} else if($type == 2) {
		$opts = array(
		  	'http'=>array(
		    	'method'=>"GET",
		    	'header'=>"Accept-language: en\r\n" .
		              "Cookie: foo=bar\r\n"
		  	)
		);
		$context 	= stream_context_create($opts);
		$html 		= file_get_contents($url, false, $context);
	} else {

		$check = $dompdf->loadHtmlFile($url);

		//ob_start();
	    //be sure this file exists, and works outside of web context etc.)
	    //require("admin/store/orders/45/invoice/print");
	    //$dompdf = new DOMPDF();
	    //$dompdf->load_html(ob_get_clean());
	    $dompdf->render();
	}
	//$dompdf->load_html_file($url);

	//$dompdf->setPaper('legal', 'portrait');
	//* @param string $size 'letter', 'legal', 'A4', etc. {@link Dompdf\Adapter\CPDF::$PAPER_SIZES}
    // * @param string $orientation 'portrait' or 'landscape'

	$dompdf->render();
	$dompdf->stream("abc.pdf",array("Attachment" => true));
	exit(0);
}

?>