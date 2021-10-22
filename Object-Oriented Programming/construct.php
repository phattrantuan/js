<?php
require_once 'Cat.class.php';

/*$catA= new Cat('kitty',2,'green');
$catB= new Cat();
$catB->showInfo();


*/

$arraycatA = array(
		'name' => 'mimi2',
		'age' => 2,
		'color' => 'pink',
		
);

$catC = new Cat($arraycatA);
$catC->showInfo();