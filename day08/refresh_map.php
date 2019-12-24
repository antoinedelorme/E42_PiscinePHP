<?php

class Game{
	private $object_stack = Array();
	public $_map = Array(100,150);

	public function __constructor()
	{
		$this->_map = array_fill(100,150,0);
	}

	public function add_object($obj){
			array_push($this->object_stack, $obj);
	}


	public function intoHTML(){

		$this->_map = array_fill(100,150,0);
		foreach ($this->object_stack as $element)
		{
			foreach ($element['shape'] as $i=>$row)
				foreach ($row as $j=>$value)
					{
						$this->_map[$element['y'] + $i][$element['x'] + $j] = ($value == 'x' ? 1 : 0);
					}
		}

		$str = '<table class="map_table">';
		for ($i = 1; $i <= 100; $i++)
		{
			$str .='<tr>';
			for ($j = 1; $j <= 150; $j++)
				{
					switch ($this->_map[$i][$j])
					{
						case 0 : 	$str .='<td class ="sea_block"></td>';
									break;
						case 1 : 	$str .='<td class ="rock_block"></td>';
									break;
					}
					
				}
				
			$str .='</tr>';
		}
		$str .= "</table>";
		return $str;

	}

}



?>