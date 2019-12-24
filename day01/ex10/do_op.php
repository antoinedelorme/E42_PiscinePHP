#!/usr/bin/php
<?php
function add($a, $b)
{
	return $a + $b;
}

function diff($a, $b)
{
	return $a - $b;
}

function mult($a, $b)
{
	return $a * $b;
}

function div($a, $b)
{
	return $a / $b;
}

function mod($a, $b)
{
	return $a % $b;
}

if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	exit;	
}
	$table = array("+" => "add", "-" => "diff", "*" => "mult", "/" => "div", "%" => "mod");
	$a = preg_replace("/\s+/"," ",$argv[1]);
	$operator = preg_replace("/\s+/"," ",$argv[2]);
	$b = preg_replace("/\s+/"," ",$argv[3]);
	echo $table[$operator]($a,$b)."\n";
?>
