<?php
require_once 'Cat.class.php';
class Lion extends Cat{
	public $maxspeed = "202km/h";
	public function getHeight(){
		return  $this->height;
	}
	public function showInfo(){
		
	
			echo  '<br/>Name: '.parent::getName();//tu` lion
			echo  '<br/>age: '.parent::getAge();
			echo  '<br/>Color: '.parent::getColor();
			echo  '<br/>max speed: '.$this->maxspeed;
	//	parent::showInfo();//truy caapj showinfo cua lop cha
	
		echo  '<br/>lion';
}
}