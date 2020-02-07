<?php
//PHP data types
//Variables can store diff type of data, that do diff things
//Php supports the following datatypes
//1.String
//2.Integers
//3.Float
//4.Boolean
//5.Arrays
//6.Objects
//7.NULL
//8.Resources


//STRINGS
//A sequence of characters in double or single quotes
//e.g "hello world" 'hello world'
//Rules that govern names for variables
//
//A variable starts with a $ sign, followed by the name of the variable
//A variable name must start with a letter or the underscore
//A variable name cannot start with a number
//A variable name can only contain alpha-numeric characters and underscores(A-z, 0-9, _)
//A variable name are case-sensitive($age and $AGE are two different variables)


$x ="PHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHPPHP";
$y ="Kotlin";
$Y ="Android";
var_dump($x);
var_dump($y);
var_dump($Y);
echo "<br>";
//What if you want to know how many character makes a string?
//use: strlen() function
//function:code that helps you do repetitive tasks
echo strlen($x);
echo "<br>";
echo strlen('Masood Mohamed');
echo "<br>";
//count number of word in a string: str_word_count() function
echo  str_word_count('I love coding in PHP');
echo "<br>";
$num_words =str_word_count('Coding is awesome');
echo $num_words;
echo "<br>";
//Search for a text within a string: strpos()
$position_for_world =strpos('Hello world', 'world');
echo $position_for_world;
echo "<br>";
//Replace text within a string: use str_replace()
echo str_replace('world', 'Dunia', 'Hello world');

echo "<br>";
//INTEGERS
//Numbers that are non decimal
//Must at least have one digit
$age = 21;
var_dump($age);
echo "<br>";


//FLOAT
//Is a number with decimal point
$cup_volume=23.34;
var_dump($cup_volume);

echo "<br>";
//BOOLEAN
//oftenly used in conditional statements
$a=true;
$b=false;
echo 3<5;//returns 1:True
echo "<br>";
echo 3>5;//returns nothing on the browser , it means false







?>
