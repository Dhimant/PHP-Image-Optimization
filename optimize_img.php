<?php

$jpg = shell_exec("find -L -type f -name \"*.jpg\" | tr '\n' ',' ");
$jpg = explode(',', $jpg);
//shuffle($jpg);
$png = shell_exec("find -L -type f -name \"*.png\" | tr '\n' ',' ");
$png = explode(',', $png);
//shuffle($png); // Randomize the array. 


echo "PNG: ".count($png).PHP_EOL;
echo "JPEG: ".count($png).PHP_EOL;

exec("find -L -type f -name \"*.jpg\" -exec jpegoptim --strip-all {} \; &");

/* Comment the following if you want to use pngout for png image compression */
exec("find -iname *.png -print0 |xargs -0 optipng -o7 -strip all");


/* Comment the following foreach loop, if you want to use optipng for png image compression */
foreach ($png as $key => $png_file_path) {
	shell_exec("./pngout ".$png_file_path);
}

?>