<?php

define('WEBSERVICE', 'http://api.resmush.it/ws.php?img=');

$jpg = shell_exec("find -L -type f -name \"*.jpg\" | tr '\n' ',' ");
$png = shell_exec("find -L -type f -name \"*.png\" | tr '\n' ',' ");

/* Change home_url to your website url */
$home_url = "http://www.aackrutiphotostory.com";

$png = explode(',', $png);
$jpg = explode(',', $jpg);

shuffle($png);
shuffle($jpg);

foreach ($png as $key => $png_file_path) {
	
	$png_url = $home_url.$png_file_path;
	$optimized_png_arr = json_decode(file_get_contents(WEBSERVICE . $png_url));
	$optimized_png_url = $optimized_png_arr->dest;
	
	if(isset($optimized_png_arr->dest))
	{
	file_put_contents($png_file_path, file_get_contents($optimized_png_url));
	}

}

foreach ($jpg as $key => $jpg_file_path) {

	$jpg_url = $home_url.$jpg_file_path;
	$optimized_jpg_arr = json_decode(file_get_contents(WEBSERVICE . $jpg_url));
	$optimized_jpg_url = $optimized_jpg_arr->dest;

	if(isset($optimized_jpg_arr->dest))
	{
	file_put_contents($jpg_file_path, file_get_contents($optimized_jpg_url));
	}
}

?>