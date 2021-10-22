<?php
require_once 'Cat.class.php';
class Lion extends Cat{
	public $height= 55;
	public function getHeight(){
		return  $this->height;
	}
	
	public function showInfo(){
		echo  '<br/>Name: '.$this->getName();
		echo  '<br/>age: '.$this->getAge();
		echo  '<br/>Color: '.$this->getColor();
		echo  '<br/>Height: '.$this->getHeight();
		
		
	}
	
}