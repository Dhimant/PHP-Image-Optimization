# PHP-Image-Optimization  


Simple php scripts for image optimization. (Lossless Compression)


**optimize_img.php** 

This script would give you perfect 100 on GTmetrix.com for Optimize images.

Upload this script to root directory of your website and run it from URL  
or php command line (If you have thousands of images go with command line) . 

1. http://example.com/optimize_img.php

2. php optimize_img.php > /dev/null 2>/dev/null &  


* For jpeg optimization you would need jpegoptim installed on server.

* For png optimization you have 2 options.
 
  1. optipng ( You may need to install optipng on server if it is not installed on your server.)
  2. pngout ( pngout binary is included along with the script. You can download latest version for linux from [here.](http://www.jonof.id.au/kenutils )) Don't forget to chmod +x pngout

**optimize_img_resmush.php** 

This script uses online free image optimization service http://resmush.it/.

You do not need to install anything if you are going to use this script. Just change the  
$home_url = "http://www.example.com"; to your website url and you are good to go. 



