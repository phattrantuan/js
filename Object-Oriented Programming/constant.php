<?php
class  Sample{
	const money = 1000;
	public  $money = "this is a text";
	public function showinFo(){
		echo("<h1>c1:sample showinfo".Sample::money."</h1>");
		echo("<h1>c2:sample showinfo".self::money."</h1>");
		echo("<h1>c2:sample showinfo".$this::money."</h1>");
		
	}
}

$sample = new Sample();
echo $sample->money;//access into property
echo $sample::money;
$sample->showinfo();