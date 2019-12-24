<?PHP
function ft_is_sort($tab)
{
	$tab2 = $tab;
	sort($tab);
	foreach($tab as $i=>$elem)
	{
		if ($tab[$i] != $tab2[$i])
			return (0);
	}
	return 1;
}
?>