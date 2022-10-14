<?php
$array = array('ronaldo','messi','pogbaa');
var_dump($array);
// echo $array;
echo "<br>";
$text = "i love you";
echo "i have a " .$text. "cc";
echo "<br>";
$x = 10.365;
var_dump($x);
echo "<br>";
$x1 = 10;
var_dump($x1);
echo "<br>";
echo strlen("peter parker");
echo "<br>";
echo str_word_count("cristiano ronaldo");
echo "<br>";
echo strrev("don no 1");echo "<br>";

echo strpos("hello world","world");echo "<br>";
echo str_replace("world","don","hello world");
echo "<br>";
$x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} echo "<br>";
for($y= 5; $y <= 50; $y+=5)
{
	echo "The number is: $y <br>";
}
echo "<br>";
$clors = array('red','yellow','green');
foreach($clors as $value)
{
	echo "$value <br>";
}
echo "<br>";
$age = array("peter"=>25, "parker"=>30, "don"=>20);
print_r($age);
var_dump($age);


 ?>

