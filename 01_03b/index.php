<?php

function flip() {
	return ( 0 == rand(0,1) ) ? 'H' : 'T';
}

$H = 0;
$T = 0;

for ($i=0; $i<1000; $i++) {
	$flip = flip();
	$flip++;
}

echo 'Heads was flipped ' . $H / 10 . '% of the time. Tails, ' . $T / 10 . '%.';
?>