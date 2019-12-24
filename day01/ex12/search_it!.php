#!/usr/bin/php
<?php
	$tab = $argv;
	$key = array_shift($tab);
	$key = array_shift($tab);
	print_r($tab);
	$found = array_search($key, $tab);
	echo $found."\n";

?>
