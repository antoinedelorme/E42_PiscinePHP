#!/usr/bin/php
<?php
function ft_split($line)
{
	$line = preg_replace("/\s+/"," ",$line);
	$line = explode(" ",$line);
	sort($line);
	return $line;
	
}
$result = array();
foreach($argv as $i=>$elem)
{
	if ($i != '0'){
	$line = preg_replace("/\s+/"," ",$elem);
	$tab = explode(" ",$line);
	$result = array_merge($tab,$result);
	}
	

}
	sort($result);
	foreach($result as $elem)
		echo $elem."\n";
?>
