<?php
class Deck {
	public $path = "C:/xampp/htdocs/OOP Projects/Tarot Reader/Deck";
	public $files; //need to define what this does, properties defined in functions as below
	
	public function getFiles(){
		return $this->files = array_diff(scandir($this->path), array(".", ".."));
	}
	
	public function selectRandcard(){
		$card = $this->getFiles();
		$rand = shuffle($card);
		//var_dump($card);
		print "Deck/". $card[0];

	}
	
		
}

$cards = new Deck();

?>
