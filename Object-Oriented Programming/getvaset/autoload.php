<?php
function __autoload($classname)
{
	$path = '/class/';//duong dan truy cap vao thu muc chua cac lass
	//require_once '/class/Cat.class.php';
	require_once $classname.'.class.php';
}


$cat = new Cat('a',2,'a');
echo $cat->name = "test";//call function set
echo $cat->name;//call function set


 $cat->showInfo();
 
 echo $cat->name;//call function set