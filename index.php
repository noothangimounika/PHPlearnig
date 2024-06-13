<?php
echo " <h2>My first PHP page</h2>"  ;
echo "Hello PHP <br> <br>"; 
ECHO "hello <br> <br> ";
Echo "hello world <br> <br> ";
ecHO "PHP Program <br> <br> ";

$number=32104;
$name="Mounika";
echo "Emp Id :  $number <br>";
echo "Emp Name : $name <br>  <br>";

$num1=20;
$num2=10;
$add=$num1+$num2;
$sub=$num1-$num2;
$mul=$num1*$num2;
$div=$num1/$num2;
$mod=$num1%$num2;

echo "Addtion of Numbers    : ".$add. "<br>";
echo "Subtration of Numbers     :  "  .$sub  ."<br>";
echo "Multification of Numbers  :  "  .$mul ."<br> ";
echo  "Multification of Numbers :  "  .$div ."<br>";
echo  "Multification of Numbers :  "  .$mod ."<br> <br>";

$a=10;
$b="Mounika";
$c=209.12;
$d=true;
$e='c';
$p=3.13;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($p);
echo "<br> <br>";

$x=$y=$z="PHP Program";

echo $z; echo "<br>";  echo $y;echo "<br>"; echo $x;



$number = 5; 
 
function myNum() {
    $num = 10;
  echo "<p>Variable number inside function is: $num </p>";
} 
myNum();

echo "<p>Variable x outside function is:$number  </p>";


$x=10;
$y=5;

function myfunction(){
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myfunction();
$GLOBALS['y'];


$value1=1;
$value2=&$value1;
$value1=3;
echo $value2;
echo "<br>";


function myfun(){
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myfun();


  echo "<br>";
  echo "<br>";
  
  print "<h3>Print text using  PRINT Statement</h3>";
  echo "<br>";
  
  print "Hello PHP <br> <br>"; 
  print "hello <br> <br> ";
  print "hello world <br> <br> ";
  print "PHP Program <br> <br> ";
  


  $colors=array("pink " ,"blue " ,"yellow " ,"green ", "<br>","red " );
  var_dump($colors);

?>