<?php

class Sample {
	static $a= 1000;
	public static function showinfo()
	{
		echo '<h3>showinfor</h3>';
	}
}
/*
$sample = new Sample();
echo("sample_value".$sample::$a);
$sample->showinfo();
*/

echo Sample::$a;
echo Sample::showinfo();