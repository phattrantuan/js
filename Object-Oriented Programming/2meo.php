<?php

require_once 'Cat.class.php';

//truy cap cac thuoc tinh private



$catA = new Cat();
echo '<pre>';
print_r($catA);
echo '<pre>';

$catA->setName('mimi');
$catA->setColor('red');
$catA->setAge(3);

echo  '<br/>Name: '.$catA->name;


/*
echo  '<br/>Name: '.$catA->name;
echo  '<br/>age: '.$catA->age;
echo  '<br/>Color: '.$catA->getColor();
*/
$catA->showInfo();