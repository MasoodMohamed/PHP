<?php
//Conditional statements are used to perform different action based on different conditions.
//To allow you to perform diff actions based on diff variables.
//Php has the following if conditional statements
//
//
//1.if statement - executes some code if one condition is true
//2. if...else statement - executes some code if a condition is true and another code if that condition is false
//3.if...elseif..else statement - execute different codes for more than two conditions
//switch statement - select one of many blocks of code to be executed
//
//
//if (condition to examine){
//    code to be executed if condition is TRUE
//}
//
$db_first_name = 'Masood';
$user_first_name = 'Masood';
if ($user_first_name == $db_first_name){
    echo ' <p>Credentials matched. You can login...</p> ';
}

$age =20;
if ($age <18){
    echo "<h1>You cannot take alcohol. Go home and study</h1>";
}

//2.if...else : executed if condition is TRUE, and the other condition is false
if ($age <18){
    echo "<h1>You cannot take alcohol. Go home and study</h1>";
}else{
    echo "<h1>Hurray, you are old enough, grab a crate</h1>";
}

//3.if...elseif..else statement - execute different codes for more than two conditions

//if (condition to examine){
//    code to be executed if condition is TRUE
//}elseif(condition){
//    code to be executed if your 1st condition is false, and this condition is true
//}elseif(condition){
//    code to be executed if your 2nd condition is false, and this condition is true
//}else(condition){
//    code to be executed if all conditions are false.
//}

$age =15;
$kenyan = false;

if ($age <18){
    echo "<h1>You cannot take alcohol. Go home and study</h1>";
}elseif($kenyan== true){
    echo "<h1>Hurray, you are old enough, grab a crate</h1>";
}else{
     echo "<h3>You are underage and not Kenyan, you are kidding!!!</h3>";
}

//Assignment:
//Using a conditional statement , check if 100 is a multiple of 2:
//if true echo "100 is a multiple of 2"else echo "100 is not a multiple of 2"
//Write code that calculates volume of a cylinder of height 14 and diameter 14.
//echo"This is the cylinder to use if the volume is greater than 10"

$x =2;
$y = 100;
$multiple = $y%$x;
if ($multiple){
    echo "<h3>100 is a multiple of 2</h3>";
}elseif($y%48) {
    echo "100 is not a multiple of 2</h3>";
}
echo '<br>';


$pienumerator = 22;
$piedenomenator=7;
$h = 14;
$d = 14;
$r = $d/2;
$pie = $pienumerator/$piedenomenator;
$vol =$h*$r*$r*$pie;
if ($vol>10){
    echo "This is the cylinder to use because the volume is greater than 10";
}elseif($vol<10) {
    echo "<h3>This is not the cylinder required</h3>";
}


//siwtch statement - select one of many blocks of code to be executed
//switch syntax
//switch (n){
//    case label1:
//        code to execute if n = label1
//        break
//
//    case label2:
//        code to execute if n = label1
//        break
//
//    case label3:
//        code to execute if n = label1
//        break
//
//    case label4:
//        code to execute if n = label1
//        break
//
//     default:
//     Code to be executed
//
//
//
//}

$favteam ='Liverpool';
switch ($favteam){
    case'Man U';
       echo '<p>Man U at position 5</p>';
       break;

    case'Leicester';
        echo '<p>Leicester at position 3</p>';
        break;

    case'Man City';
        echo '<p>Man City at position 2</p>';
        break;

default:
    echo '<p style="color: red;">None of the Above is my favourite Team</p>';
}

$favteam ='Man City';
switch ($favteam){
    case'Liverpool';
        echo '<p style="color: red">Liverpool at position 1</p>';
        break;

    case'Leicester';
        echo '<p style="color: blue">Leicester at position 3</p>';
        break;

    case'Man City';
        echo '<p style="color: skyblue">Man City at position 2</p>';
        break;

    default:
        echo '<p style="color: red;">None of the Above is my favourite Team</p>';
}






?>
