<?php

	const ROCK0 = [	['.','x','x','x','.'],
					['x','x','x','x','x'],
					['x','x','x','x','x'],
					['.','x','x','x','.']];

	const ROCK1 = [	['.','x','x','x','.'],
					['x','x','x','x','x'],
					['x','x','x','x','x'],
					['.','x','x','x','.'],
					['x','x','x','x','x'],
					['x','x','x','x','x']];
					

	function add_rocks($game)
		{

			$game->add_object(['x'=>50, 'y'=>10, 'shape'=>ROCK0]);
			$game->add_object(['x'=>30, 'y'=>70, 'shape'=>ROCK0]);
			$game->add_object(['x'=>50, 'y'=>30, 'shape'=>ROCK1]);
		}


	session_start();
	include_once("./refresh_map.php");
	include_once("./objects.php");

	if(!isset($_SESSION['game3']))
		$_SESSION['game3']= serialize(new Game());


	$game = unserialize($_SESSION['game3']);
	add_rocks($game);
	
	echo $game->intoHTML();	

?>
