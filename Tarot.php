<?php
class Deck {
	public $path = "Deck/";
	public $files; //need to define what this does, properties defined in functions as below
	public $flip; 
	
	
	public function getFiles(){
		return $this->files = array_diff(scandir($this->path), array(".", ".."));
	}
	
	public function selectRandcard(){
		$card = $this->getFiles();
		$rand = shuffle($card);
		//var_dump($card);
		print $this->path . $card[0];

	}
	
	public function reverse(){
		$this->flip = rand(0,100);
		if ($this->flip % 2 == 0) { 
			return " .front {transform: rotate(0.5turn);}";
		}
		
	}
		
}

$cards = new Deck();

?>
