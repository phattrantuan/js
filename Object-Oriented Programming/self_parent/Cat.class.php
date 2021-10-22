<?php

class Cat{
	public $name ;//property
	public $color;
	public $age;
	 public $maxspeed = "200km/h";
	
/*	public function __construct(){
		echo __METHOD__;//giá trị của php nóii đang ở method nào
		$this->name = 'kitty';
		$this->age=2;
		$this->color ='yellow';
	
	
	}
	*/// tham số và tham số mặc định
	
	public function __construct($name='argument_default_name',$age='argument_default_age',$color='argument_default_color'){
		echo '__construct param';//giá trị của php nóii đang ở method nào
		$this->name = $name;
		$this->age=$age;
		$this->color =$color;
		
		
	
	}
	
	
	
	/*trùng tên class
	 * public function Cat($name='argument_default_name',$age='argument_default_age',$color='argument_default_color'){
 echo '__construct param';//giá trị của php nóii đang ở method nào
 $this->name = $name;
 $this->age=$age;
 $this->color =$color;
 
 
 }*/
 
	
	//tham số là mảng
 /*public function __construct($arrInfo){
 	echo '__construct param';//giá trị của php nóii đang ở method nào
 	$this->name = $arrInfo['name'];
 	$this->age= $arrInfo['age'];
 	$this->color = $arrInfo['color'];
 	
 	
 }*/
	
	public function getColor(){
		return  $this->color;
	}
	
	public function getName(){
		return  $this->name;
	}
	public function getAge(){
		return  $this->age;
	}
	
	
	
	public function setName($value){
		
		$this->name=$value;
	}
	public function setAge($value){
		
		$this->age=$value;
	}
	public function setColor($value){
		
		$this->color=$value;
	}
	public function showInfo(){
		echo  '<br/>Name: '.$this->getName();
		echo  '<br/>age: '.$this->getAge();
		echo  '<br/>Color: '.$this->getColor();
		echo  '<br/>max speed: '.$this->maxspeed;
	//	echo  '<br/>max speed: '.self::$maxspeed;
		//echo  '<br/>max speed: '.Cat::$maxspeed;
		
		
	}
}
