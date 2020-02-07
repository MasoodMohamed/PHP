<?php
//Introduction to php
//PHP is a widely-used, open source scripting language
//PHP scripts are executed on servers
//PHP files can contain texts, HTML, CSS, Javascript, and PHP Code
//PHP code is executed on the server, and the result is returned to the browser as plain HTML
//PHP files have extension ".php"

echo "Hello World";
echo "<h1>Hello World</h1>";
//echo: print content in browser
//Hello World: the content to be printed on the browser
//  ;: means end of php statement or instruction

//VARIABLES IN PHP
//a container for storing data
$myname ="MASOOD MOHAMED <br>";
echo "$myname";
$tech =" GOOGLE <br>";
$tech1 =" MICROSOFT <br>";
$tech2 =" AMAZON <br>";



echo "$tech";
echo "$tech1";
echo "$tech2";

//concatenation/join
//joining a variable and a variable: use the dot operator
echo $tech.$tech1;
$car1="BENZ";
$car2="TOYOTA";
echo $car1." ".$car2."<br>";

//joining a string and a variable
echo "I love $car1"."<br>";
echo "I love $car1 and $car2";




?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque aut blanditiis, debitis
    dolores est id labore magnam maiores modi numquam officiis perferendis perspiciatis possimus quasi
    sint, soluta, vero voluptate.</p>
