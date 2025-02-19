
<!doctype html>
<html>
<html>

<?php
//declare(strict_types= 1);//against to loosely type language ， the declaration only fit in php 
function add_five($i)
{
    $i+=5;
}
$a=1;
add_five($a);
echo $a.PHP_EOL;

$x = array("a" => "red", "b" => "green");  //associative array
$y = array("c" => "blue", "b" => "green");
$len=count($x);
echo $len.PHP_EOL;

function myFamily($lastname, ...$firstname)//variadic argument must be the last argument
 {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) 
    {
      $txt = $txt."Hi, $firstname[$i] $lastname".PHP_EOL;
    }
    return $txt;
  }
  
  $a = myFamily("Doe", "Jane", "John", "Joey");
  echo $a;

  $cars = array("Volvo", "BMW", "Toyota");//$cars = ["Volvo", "BMW", "Toyota"];
  array_push($cars, "Ford");
  echo $cars[3].PHP_EOL;
  
  foreach ($cars as &$x) 
  {
  $x = "Ford";
  }
unset($x);//the function is used to unset the $x to the $cars，if don't，modify $x will also change the value of last object of $cars because the $x still point to it.(data type is &string)
var_dump($cars).PHP_EOL;

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);//delete  unset($cars[1])=unset 
var_dump($cars).PHP_EOL;

$cars2 = array("brand2" => "Ford","brand" => "Ford", "model" => "Mustang", "year" => 1964, "year2" => 1965);

$newarray = array_diff($cars2, ["Mustang", 1964]);//remove the array with Mustang and 1964
var_dump($newarray).PHP_EOL;

array_pop($newarray);
array_shift($newarray);
var_dump($cars2).PHP_EOL;

?>

</html>
</body>
