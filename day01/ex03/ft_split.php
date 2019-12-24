#!/usr/bin/php
<?php
function ft_split($line)
{
	$line = preg_replace("/\s+/"," ",$line);
	$line = explode(" ",$line);
	sort($line);
	return $line;
	
}
?>
