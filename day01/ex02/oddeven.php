#!/usr/bin/php
<?php
echo "Entrez un nombre:";
$input = fopen("php://stdin", "r"); 
while ($line = fgets($input))
{
	$line = trim($line, "\n");
	if (is_numeric($line))
	{
		if ($line % 2 == 0)
			echo "Le chiffre $line est Pair\n";
		else
			echo "Le chiffre $line est Impair\n";
	}
else
echo "'$line' n'est pas un chiffre\n";
echo "Entrez un nombre:";
}
?>
