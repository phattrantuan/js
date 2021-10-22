<?php
require_once 'Lion.class.php';

$arrInfo = array(
		
		'name' => 'biglion',
		'age' => 4,
		'color' => 'yellow',
);
$lionA = new Lion($arrInfo);

echo '<pre>';
print_r($lionA);
echo '<pre>';
$lionA->showInfo();