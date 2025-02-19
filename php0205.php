<!DOCTYPE html>
<html>
<body>

<?php
$x = "Hello";
$y = "World";

var_dump($x);

$z1 = $x . $y;//HelloWorld
$z2 = "$x $y";//Hello World
echo $z1.PHP_EOL;

echo str_replace("World", "Dolly", $z1).PHP_EOL;

echo trim($z2).PHP_EOL;//delete the space before the string and behing the string
echo ltrim($z2,"Hd").PHP_EOL;//delete the character from left 

$z3=explode(" ", $z2);//convert string to array
print_r($z3).PHP_EOL;// can output arrays, objects, and other complex data structures.

echo substr($z2, 6, 5).PHP_EOL;//first is 0
echo substr($z2, -5, 3).PHP_EOL;//Use negative indexes to start the slice from the end of the string.last is -1

$z4 = "Hi, how are you?";
echo substr($z4, 4).PHP_EOL;//till the end
echo substr($z4, 5, -3).PHP_EOL;//5 to -3

$z5 = "We are the so-called \"Vikings\" from the north.";//use \ to be the escape character  \ooo for octal value \xhh for Hex value
echo $z5.PHP_EOL;

echo(rand(/*100,102*/)).PHP_EOL;//finding the RANDOM interger
echo(round(0.60)).PHP_EOL;//finding the nearest interger

define("GREETING", "Welcome to W3Schools.com!");//constant value in global and function not in class，array type also can be use. allow using dynamic naming
echo GREETING.PHP_EOL;

$greet = "GREETING";
//echo greet.PHP_EOL; output "GREETING"
echo constant($greet).PHP_EOL;

const MYCAR = "Volvo";//constant value in global and class not in function，array type also can not be use
echo MYCAR.PHP_EOL;

?>

</body>
</html>
