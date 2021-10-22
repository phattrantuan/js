<?php
function __autoload($classname)
{
	$path = '/class/';//duong dan truy cap vao thu muc chua cac lass
	//require_once '/class/Cat.class.php';
	require_once $classname.'.class.php';
}


$cat= new Cat('mimi',2,"red");

$cat->showInfo();
$strCatA= serialize($cat);
echo '<br>';
echo $strCatA;
$strCatB= unserialize($strCatA);
echo '<br>';

echo '<pre>';
print_r($strCatB);
echo '<pre>';