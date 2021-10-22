<?php

class Cat{
	private $name ;//property
	private $color;
	private $age;
	
	 public function Cat($name='argument_default_name',$age='argument_default_age',$color='argument_default_color'){
	 echo '__construct param';//giá trị của php nóii đang ở method nào
	 $this->name = $name;
	 $this->age=$age;
	 $this->color =$color;
	 
	 
	 }
	
	 public function __set($name,$value){//name and value of property
	 	return  $this->$name = $value;//this tro den name mang gia tri la value
	 }
	 public function __get($name){//name and value of property
	 	return  $this->$name;//this tro den name mang gia tri la value
	 }
	 
	
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
		
	}
}
