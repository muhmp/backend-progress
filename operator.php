<?php
//arithmatic
// +,-,*,/,%,**
$a = 10;
$b = 20;

$total = $a+$b;

echo $total;

//assignment
$c = 10;
$d = 20;

//calculating sum
//$sum = $sum + $a;
//other way to calculate
$sum += $a ;// same with sum = sum + a;
            // negative -= , multiply *=  , divide /=
        echo $sum;


//Comparing variable
$e = 4;
$f = 7;

$compare = $e == $f; // if e is equal with f
//$compare = $e != $f // if e is not equal with f (Check w3school php operators)
echo var_dump($compare);



//Increment and decrement
$inc = 10;
$inc++; // increment
//$inc-- // decrement
echo $inc;


//combining string variable
$hello = "Hello";
$world = "World";
echo $hello . $world;
?>