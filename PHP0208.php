<!doctype html>
<html>
<body>

<?php

for($i=11;$i<25;$i+=5)
{
    if($i%2== 0)
    {continue;}
    echo $i.PHP_EOL;
}
$colors = array("red", "green", "blue", "yellow");

for ($i=0;$i<4;$i++)
{
  echo $colors[$i].PHP_EOL;
}
echo PHP_EOL;
foreach ($colors as $x) 
{
  echo $x.PHP_EOL;
}
echo PHP_EOL;

$score=array("aaron"=>"86","steven"=>"100","james"=>"99","jamesjr"=>"25");
foreach ($score as $x=>$v)
{
    if($v <= 60)
    {
        break;
    }
    echo "$x : $v".PHP_EOL;
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {//& will change the value of $x，else not.modify the value from the direction of memory，not modify from the copy 
  if ($x == "blue") $x = "pink";
}

var_dump($colors);

echo PHP_EOL;
?>
</body>
</html>