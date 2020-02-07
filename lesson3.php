<?php
//Php operators
//used to perform operation on variables and values
//php has the following operators
//1.Arithmetic operators
//2.Assignment ops
//3.Comparison ops
//4.Logical ops

//1.Arithmetic operators
//+; Addition
$x = 23;
$y = 234;
$sum = $x+$y;
echo $sum.'<br>';
echo 'The sum of variable 23 and variable 234 is '.$sum.'<br>';
echo 23+234;
echo '<br>';

//-; Subtraction
$x = 23;
$y = 234;
$sub = $y-$x;
echo $sub.'<br>';
echo 'The sub of variable 234 and variable 23 is '.$sub.'<br>';
echo 234-23;
echo '<br>';

//*; Multiplication
$x = 23;
$y = 234;
$mult = $x*$y;
echo $mult.'<br>';
echo 'The multiplication of variable 23 and variable 234 is '.$mult.'<br>';
echo 23*234;
echo '<br>';

//  /; Division(/)
$x = 23;
$y = 234;
$div = $y/$x;
echo $div.'<br>';
echo 'The sum of variable 234 and variable 23 is '.$div.'<br>';
echo 234/23;
echo '<br>';

//%; Modulus
$x = 23;
$y = 234;
$mod = $y%$x;
echo $mod.'<br>';
echo 'The modulus of variable 234 and variable 23 is '.$mod.'<br>';
echo 234%23;
echo '<br>';

//**; Exponential
echo 2**3;

//2.Assignment ops
//used to write a value to a variable
$car = 'Benz';
$i = 12;
$f = 12.12;
//Assignment ops with other arithmetic ops
$s = 30;
$sum = $i + $s;
$i= $i+$s;
echo '<br>';
$i += $s;
echo '<br>';
echo $i;
echo '<br>';
$a =100;
$b =200;
$a += 100;
echo $a;
echo '<br>';


//-; Subtraction
$s = 30;
$sum = $i - $s;
$i= $i-$s;
echo '<br>';
$i -= $s;
echo '<br>';
echo $i;
echo '<br>';
$a =100;
$b =200;
$a -= 100;
echo $a;
echo '<br>';

//*; Multiplication
$s = 30;
$sum = $i * $s;
$i= $i*$s;
echo '<br>';
$i *= $s;
echo '<br>';
echo $i;
echo '<br>';
$a =100;
$b =200;
$a *= 100;
echo $a;
echo '<br>';

//  /; Division(/)
$i = 30;
$sum = $s / $i;
$s= $s/$i;
echo '<br>';
$s /= $i;
echo '<br>';
echo $s;
echo '<br>';
$a =100;
$b =200;
$a /= 100;
echo $a;
echo '<br>';

//%; Modulus
$s = 30;
$sum = $i % $s;
$i= $i%$s;
echo '<br>';
$i %= $s;
echo '<br>';
echo $i;
echo '<br>';
$a =100;
$b =200;
$a %= 100;
echo $a;
echo '<br>';

//3.Comparison ops
//used to compare values
//comparison ops returns a boolean data types: true, false

//1.== (equal)
echo '<br>';
$d = 2;
$e = 3;
$f = 2;
$answer = $d == $e;
var_dump($answer);
echo '<br>';
//data from database
$db_username = 'MASOOD';
$db_password = 'ekapass';
//data from user
$user_username = 'maska';
$user_password = 'ekapass';

$check = $db_username== $user_username;
var_dump($check);
echo '<br>';
echo '<br>';

//2.===:identical:returns true if one variable is equal to another variable and these two variables are of the sme data type

$check = $db_password === $user_password;
var_dump($check);
echo '<br>';
echo '<br>';

//3. != : not equal to: returns true if two variables are not equal

$check = $db_username != $user_username;
var_dump($check);
echo '<br>';
echo '<br>';


//4.!== : not identical: returns true if the two variables are not identical
$check = $db_username != $user_username;
var_dump($check);
echo '<br>';
echo '<br>';


//5. > : greater than : returns true if a value is greater than the other value

$myname = 'Masca the web';
$yourname = 'Antony the Dev';

$result = strlen($myname) > strlen($yourname);
var_dump($result);
echo '<br>';
echo '<br>';

//6. < : lesser than : returns true if the value is lesser than the other value

$myname = 'Masca the web';
$yourname = 'Antony the Dev';

$result = strlen($myname) < strlen($yourname);
var_dump($result);
echo '<br>';
echo '<br>';

//7. >= : Greater than or equal to: returns true if the value is Greater than or equal to the other value

$myname = 'Masca the web';
$yourname = 'Antony the Dev';

$result = strlen($myname) >= strlen($yourname);
var_dump($result);
echo '<br>';
echo '<br>';


//7. <= : Lesser than or equal to: returns true if the value is lesser than or equal to the other value

$myname = 'Masca the web';
$yourname = 'Antony the Dev';

$result = strlen($myname) <= strlen($yourname);
var_dump($result);
echo '<br>';
echo '<br>';


//4.Logical ops
//Used to combine conditional statements
//1. and : returns true if two operations are true
$x = 100;
$y = 200;
if ($x == 100 and $y == 200){
    echo '<h1>it is true $x is equal to 100 and $y is equal to 200</h1>';
}

//2. or : returns true if either one of the two operations is true
$x = 100;
$y = 200;
if ($x == 300 or $y != $x){
    echo '<h1>it is true $x is equal to 100 and $y is not equal to $x</h1>';
}

//3 ! not : returns true if a variable is false
$check = !($x == 100 and $y == 200);
var_dump($check);













?>