<!DOCTYPE html>
<html>
<body>

<?php
echo __DIR__.PHP_EOL;//the directory of the file (also the filename)

$num1 = 3;  
$num2 = 3;

echo $num1 ** $num2.PHP_EOL;
var_dump($num1 == $num2).PHP_EOL;//equal 
var_dump($num1 === $num2).PHP_EOL;//not equal but identical

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "b" => "green");
  

$x_value=array_values($x);
$y_value=array_values($y);//array_values return all the value of an array numerically
var_dump($x === $y);//same name same value same order same type
var_dump($x_value[1] === $y_value[1]);

$x = 5;  
$y = 10;

echo ($x <=> $y).PHP_EOL; // returns -1 because $x is less than $y

$x = 10;  
$y = 10;

echo ($x <=> $y).PHP_EOL; // returns 0 because values are equal

$x = 15;  
$y = 10;

echo ($x <=> $y).PHP_EOL; // returns +1 because $x is greater than $y

$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1.PHP_EOL;

$abc=1;
echo $status = $abc ?"firstone":"secondone";//if $abc is true return firstone if false return secondone  empty()only for checking  
echo PHP_EOL;
echo $status = $abc ??"secondone";
echo PHP_EOL;

echo date ("H").PHP_EOL; //UTC time

?>

</body>
</html>