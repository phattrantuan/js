<?php

class Cat{
    var $name = 'kitty';//property
    var $color;
    var $age;
    
}


class Cat1{
	public $name = 'kitty';//property
	private $color = 'pink';
	protected $age =  14;
	
	public function getColor(){
		//echo '<pre>';
	//	print_r($this);//this la duoi tuong con m3o`
	//	echo '<pre>';
		return  $this->color;
	}
	
	
}

//truy cap cac thuoc tinh private



$catA = new Cat();
echo '<pre>';
print_r($catA);
echo '<pre>';
echo  '<br/>Name: '.$catA->name;





$catB = new Cat1();
echo '<pre>';
print_r($catB);
echo '<pre>';


echo  '<br/>Name: '.$catB->name;
echo  '<br/>color: '.$catB->getColor();
echo  '<br/>Name: '.$catA->name;
