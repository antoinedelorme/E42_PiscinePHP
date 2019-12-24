#!/usr/bin/php
<?php
	$line = $argv[1];
	$line = preg_replace("/\s+/"," ",$line);
	echo $line."\n";
?>
