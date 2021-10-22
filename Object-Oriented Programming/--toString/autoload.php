<?php
function __autoload($classname)
{
	$path = '/class/';//duong dan truy cap vao thu muc chua cac lass
	//require_once '/class/Cat.class.php';
	require_once $classname.'.class.php';
}


$cat= new Cat('mimi');
$cat->showInfo();
echo '</br>';
echo $cat;