<?php
class Element {
	 public $x;
	 public $y;
	 public $shape = array();
	 public $orientation;

	 public function __constructor($kwargs)
	 {
		$this->x = $kwargs['x'];
		$this->y = $kwargs['y'];
		$this->shape = $kwargs['shape'];
		if (isset($kwargs['orientation']))
			$this->orientation = $kwargs['orientation'];
		else
			$this->orientation = 0;
	 }
}

?>