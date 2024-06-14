<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      form{
        padding: 10px;
        margin-top: 20px;
      }
      input{
        margin-top: 20px;
      }
    </style>
</head>
<body>
   <!--
    <form action="index.php" method="post">
        <label >username</label>
        <input type="text" name="username"><br>

        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Login"><br>
    </form>  -->
    <!--
    <form action="index.php" method="post">
        <label >quantity</label>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total"><br>
    </form> -->

    <!--
    <form action="index.php" method="post">
      <label >x</label>
      <input type="text" name="x"><br>
      
      <input type="submit" value="total">

    </form> -->
</body>
</html>
<?php
/*
$x=$_POST["x"];

$total=null;

#$total=abs($x);
#$total=round($x);
#$total=floor($x);
#$total=ceil($x);
#$total=pow($x,$y);
$total=rand(1,6);
*/
/*
echo $total;


 $price=10;
 $item="Chacolate";
 $quantity=$_POST["quantity"];
 $total=null;
 $total=$quantity*$price;
 echo "You have order $quantity  $item  <br> ";
 echo "Your total ₹₹ $total  ";
 */
/*
echo "{$_POST["username"]  }";
echo "<br>";
echo "{$_POST["password"] }";
*/
/*
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


 echo"<br>";

  $firstname="mounika";
  echo "hello $firstname ";

  #string datatypes

  $name="Mounika";
  $food="Pizza";
  $mail="noothangimounika@gmail.com";
  $total=null;

  echo "Hello  $name <br>";
  echo " i don't like  $food <br>";
  echo "your gmail is $mail <br>";


  #int datatypes
  $gae=24;
  $users=6;
  $quanty=6;


  echo " Your age is  $gae<br>";
  echo "In online  $users there<br>";
  echo " You purchase the $quanty items<br>";

  #float datatypes
  $gpa=6.6;
  $price=66.66;
  $tax_rate=23.65;

  echo "You got $gpa<br>";
  echo " Your total bill is : $price<br>";
  echo "Your home tax is :  $tax_rate<br>";

  #boolean datatypes
  $employeed=true;
  $online=true;
  $for_sale=false;  

  echo "is there employee availble : $employeed<br>";
  echo "is employees are online :  $online<br>";
  echo "is house is sale : $for_sale<br> <br> <br>";
 
echo "you ordered $quanty small $food <br> ";
$total=$quanty*$price;
echo "your total bill is : $total <br>  <br>  <br>";

//arithmetic operators

$a=10;
$b=5;
$z=$a+$b;
echo "addtion is : $z <br>";

$z=$a-$b;
echo "substration is : $z <br>";

$z=$a*$b;
echo "multification is : $z <br>";

$z=$a**$b;
echo "power of value is : $z <br>";

$z=$a/$b;
echo "divsion is : $z <br>";

$z=$a%$b;
echo "modulus is : $z <br> <br>  <br>";

//increment/decrement
$count=0;
//$count ++;
//echo "Increment value is : $count <br>";
$count--;
echo "decrement  value is : $count <br>";

$value=10;
//$value +=2;
$value -=2;
//echo  "Increment value is : $value <br>";
echo  "Increment value is : $value <br>";
*/

 $age=18;
 if($age >=18)
 {
   echo "you are eligible for vote ";
 }
 elseif($age <=100){
    echo "please enter valid age";
 }
else{
  echo "you are not eligible for vote you have 18+ must";
}
echo"<br>";

$temp=30;

if($temp<=0 && $temp>=30){
  echo "the weather is good";
}
else{
  echo "the weather is not good";
}

echo"<br>";
$temp1=40;

if($temp1<=0 || $temp1>=30){
  echo "the weather is good";
}
else{
  echo "the weather is not good";
}
echo"<br>";

echo"<br>";
$temp2=30;

if($temp2<=0 || $temp2>=30){
  echo "the weather is good";
}
else{
  echo "the weather is not good";
}
echo"<br>";

?>


