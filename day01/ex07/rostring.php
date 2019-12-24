#!/usr/bin/php
<?PHP
$line = preg_replace("/\s+/"," ",$argv[1]);
$tab = explode(" ",$line);
$first = array_shift($tab);
foreach ($tab as $elem)
	echo $elem." ";
echo $first."\n";
	?>