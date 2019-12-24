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

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	exit;	
}
	$line = preg_replace("/\s+/","",$argv[1]);
	preg_match("/^((\d+())|(\d+(\.\d+)?))([+%*\/\-])((\d+())|(\d+(\.\d+)?))$/", $line, $table);
	if ($table[0])
	{
	$table_op = array("+" => "add", "-" => "diff", "*" => "mult", "/" => "div", "%" => "mod");
	$a = $table[1];
	$operator = $table_op[$table[6]];
	$b = $table[7];
	echo $operator($a,$b)."\n";
	}
	else
	{
		echo "Incorrect Parameters\n";
	}
	
?>
