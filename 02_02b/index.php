<?php

function print_array($a) {
	echo '<pre>';
	var_dump( $a );
	echo '</pre>';
}

$dir = 'files';
$files = scandir($dir); //glob

$extensions = array();

foreach ($files as $file) {
	$ext = pathinfo($file, PATHINFO_EXTENSION);
	if (! empty($ext)) {
		//1a
		// $extensions[$ext] = (array_key_exists($ext, $extensions) ? ($extensions[$ext] + 1) : 1);

		//2a
		// if(!array_key_exists($ext, $extensions)){
		// 	$extensions[$ext] = 1;
		// } else{
		// 	$extensions[$ext] = $extensions[$ext] + 1;
		// }

		//2b
		if (!isset($extensions[$ext])) {
			$extensions[$ext] = 1;
		} else{
			$extensions[$ext] = $extensions[$ext] + 1;
		}

	}
}

print_array($extensions);

