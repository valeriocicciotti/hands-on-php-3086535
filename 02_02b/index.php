<?php

function print_array($a) {
	echo '<pre>';
	var_dump( $a );
	echo '</pre>';
}

$dir = 'files';
$files = scandir($dir);

$extensions = array();

foreach ($files as $file) {
	$ext = pathinfo($file, PATHINFO_EXTENSION);
	if (! empty($ext)) {
		// $extensions[$ext] = ($extensions[$ext] ?? 0) + 1;
		if ($extensions[$ext]){
			$extensions[$ext] = $extensions[$ext] + 1;
		} else {
			$extensions[$ext] = 1;
		}
	}
}

print_array($extensions);

