<?php
date_default_timezone_set("Asia/Jakarta");
//set random name for the image, used time() for uniqueness

$filename =  time() . '.jpg';
$filepath = 'scripts/saved_images/';

//read the raw POST data and save the file with file_put_contents()
$result = file_put_contents( $filepath.$filename, file_get_contents('php://input') );
if (!$result) {
	print "ERROR: Failed to write data to $filename, check permissions\n";
	exit();
}

echo $filepath.$filename;
?>
