<?php echo "Hello  World<br> <br>";?> 

<?php 
$var_name ="Nada Sameeh <br><br>";
 echo $var_name;?>

 <?php   //"string"
 $name = "IT <br><br>";
 echo $name;   ?>
 
 <?php // "integer"   
 $age = 25;
 echo $age;  ?>

<br><br>

 <?php  //"Float"
 $price = 19.50;
 echo $price ;?>

<br><br>

 <?php   //"Boolean"
 $is_student = true;
 echo $is_student; // 1 ?>

<br><br>

<?php   //"array"
$colors = array ("red","green","blue");
echo  $colors[0]; //"red" ?>

<br><br>

<?php  // "Object"
 $email=null;
 var_dump($email);// "NULL" ?>

<br><br>

<?php // "Object"
class car{
public $model;
public function __construct($model){
    $this->model = $model;
}
}
$car = new car("Toyota");
echo $car->model; // "Toyota" ?>

<br><br>

<?php //"تغيير قيمة المتغير"
$number = 20 ;
echo $number;  // 20 ?>

<br><br>

<?php
$age = 20 ; // if شرطية 
if($age >= 18)
{echo "you are an adult";} ?>

<br><br>

<?php // if... else شرطية 
$age = 16 ;
if($age >= 18)
{echo "you are an adult";} 
else {echo " you are a minor";}?>

<br><br>

<?php  // for  الحلقة 
for($i = 0 ; $i < 5 ; $i++)
{ echo "The number is:$i<br>";} ?>

<br><br>

<?php  //  switch  التبديل 
$day = "Monday" ;
switch ($day)
{
    case "Monday":echo "Today is Monday";
    break;
    case "Tuesday":echo "Today is tuesday";
    break;
    default:echo "Todat is not Monday or Tuesday";
} ?>

<br><br>

<?php // while الحلقة
$n = 0 ;
while ($n < 8)
{echo "$n<br>";
$n++;} ?>

<br><br>

<?php // do ... while الحلقة
$A = 0 ;
do {echo "number is :$A<be><br>";
$A++;}
while ($A<5); ?>

<br><br>

<?php // معاملات المقارنة
$a = 5 ;
$b = 10;
if($a < $b)
{echo "$a is less than $b";}?>

<br><br>

<?php // العمليات الحسابية
$c = 12 ;
$d = 2 ;
$sum = $c + $d ;
$sub = $c - $d ;
$pro = $c * $d ;
$quot= $c / $d ;
echo "sum:$sum<br>";
echo "sub:$sub<br>";
echo "pro:$pro<br>";
echo "quot:$quot<br>"; ?>

<br><br>

<?php echo "Good Luck "; ?>

<hr>