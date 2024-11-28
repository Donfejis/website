<?php
echo "my website <br>";
//var_dump ("my website");
echo "my name is fejis <br>";

//print "my website";
$myName = "fejis";
var_dump ("$myName");
$yearsOfExperience = 5;

echo"<br>";
var_dump($yearsOfExperience);
$height = 6.1;
echo "<br>";

var_dump ($height);
$isMale = false;
echo "<br>";
var_dump ($isMale);

// array;
$fullName = "Oghenefejiro Ogba";
echo "<br>";
echo "my name is $fullName";

$fullNames = array ("oghenefejiro", "Ogba");
echo "<br>";
var_dump ($fullNames);
echo "<br>";

echo $fullNames[1];
echo "<br>";
echo " my first name is $fullNames[0]
and my surname is $fullNames[1]";

$nothing = null;
echo "<br>";
var_dump ($nothing);
echo "<br>";
define("pi", 3.142);
var_dump (pi);

const gravity = 10;
echo "<br>";
var_dump(gravity);
echo "<br>";

//operators
//arithmetic operators
$x = 10;
$y = 5;
echo "$x + $y";
echo "<br>";
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x*$y;
echo "<br>";

echo $x/$y;
echo "<br>";

// module
echo $x % $y;
echo "<br>";

echo $x ** $y;
echo "<br>";

$x++;
echo $x;
echo "<br>";

//Assignment operators

$a = 100;
$b = 50;

echo $a;
echo "<br>";


// addition assignment
$a += $b;
echo $a;

// subtraction assignment
$a -=$b;
echo "<br>";
echo $a;
echo "<br>";

// logical operators
// Examples of logical operators are: AND(&&), OR(||), XOR, NOT(!)

if ($a == 100 && $b == 50 ) {
     echo "we are good to go Fejis.";
}
echo "<br>";
if ($a == 100 || $b == 54 ) {
     echo "we are good to go Fejiro.";
}
echo "<br>";
if ($a == 100 xor $b == 51) {
     echo "we are good to go gal.";
}
echo "<br>";
if (!($a == 101)) {
     echo "we are good to go baby.";
}
echo "<br>";

// 4/11/24

// PHP Conditional Statements
// There are four notable conditional statement

// If statement 

// If else statement

// Esle if statement

// Switch statement

// IF STATEMENT
// __________

//The if statement is one of the most important statements in php

// Example:
//____________

if (7>3) {
     echo "<h1> Have a good day </h1>";
}

echo "<br>";

$my_name = "fejis";
$present_time = date (format: "H:i");
echo "present_time = $present_time ";
echo "<br>";



if ($present_time >= 00.00 && $present_time < 12.00) {
     echo "<h3> Good Morning, $my_name! </h3>";
} 

elseif ($present_time >= 12.00 && $present_time < 16.00) {
     echo "<h3> Good Afternoon, $my_name! </h3>";
}

elseif ($present_time >= 16.00 && $present_time < 23.56) {
     echo "<h3> Good Afternoon, $my_name! </h3>";
}

else {
     echo "<h3> Hello, $my_name! </h3>";
}

// switch statement
// ______________

$today = date (format: "D");
echo "today is: $today <br>";

switch ($today) {
     case "Mon":
          echo "Hello everybody, It's Monday. Have a great week!";
          break;
     case "Tue":
          echo "Hello everybody, it's Tuesday. Do have a slendid week!";
          break;

     case "Wed":
          echo "Hello everybody, it's Wednesday. Do have a miraculous week!";
          break;

     case "Thurs":
          echo "Hello everybody, it's Thursday. Do have a perfect week!";
          break;

     case "Fri":
          echo "Hello everybody, it's Friday. Do have a unique week!";
          break;
     case "Sat":
          echo "Hello everybody, it's Friday. Do have a freaky week!";
          break;
     case "Sun":
          echo "Hello everybody, it's Friday. Do have a fantastic week!";
          break;
     default:
          echo "Sorry this is not a day in the week!";
          break;
}

// Php loops
echo "<br>";
// --while loops

$j = 2;
while ($j < 8) {
     echo $j;
     $j++;
}
echo "<br>";
$j = 2;
while ($j <= 9) {
     echo $j;
     $j++;
}

// -- do...while loops

// --for -loops

for ($numbers = 1; $numbers <= 10; $numbers ++) {
     echo $numbers. "<br>";
}

// create an app dat print number 1-100,
// print fizz for multiples of 3 and buzz for multiples of 5
// print fizzbuzz for multiple of 15 


for ($numbers = 1; $numbers <=100 ; $numbers++)
    if($numbers % 15 == 0) {
        echo "fizzbuzz <br>";
    } elseif ($numbers % 5 == 0) {
        echo "buzz <br>";
    } elseif ($numbers % 3 == 0) {
        echo "fizz <br>";
    }
    else {
       echo $numbers."<br>";
    }
    

// for each loop
echo "<br>";
$cars = array("Benz", "BMW", "Lexus", "Toyota");

echo "i love $cars[0] <br>";
echo "i love $cars[1] <br>";
echo "i love $cars[2] <br>";
echo "i love $cars[3] <br>";

echo "<br>";
foreach ($cars as $car) {
     echo "i love $car <br>";
}

// ARRAYS 
$domesticAnimals = array ('Dog', 'Cat', 'Hamster', 'Goat', 'Cow');

$cities = ['Asaba', 'Warri', 'Ughelli', 'Ozoro', 'sapele', 'Agbor'];

echo "<br>". $domesticAnimals[0];

echo "<br> $cities[0]";

echo "<br>";

// array_push
array_push($cities, 'Agbor');

var_dump($cities);

echo "<br>";
//associative arrays

$phone = ['brand'=> 'Samsung', 'model'=> 'Galaxy', 'Series'=> 'A', 'colour'=> 'blue', 'ROM'=> '512'];

echo "<br>";
var_dump($phone);

$phone["Series"] = 'S';
echo "<br>";

var_dump($phone);



// www.github.com/elvincedik/backend-project.git

//associative array 
$fullname = array("firstname"=>"Oghenefejiro", "surname"=>"Ogba");
$fullname["firstname"];

//multi dimensional array
//$developer = [["Oghenefejiro","female"]]

//function
echo "<br> good baby gal";

function greetMe() {
     echo "<br> Digwo"; 
}

greetMe();

echo "<br>";
echo "<br>";

function StreetName ($sname) {
     echo "$sname Asaba. <br>";
}

StreetName("DLA");
StreetName("Ezenei");

echo "<br>";
echo "<br>";

function HomeAddress ($snumber, $name) {
     echo "$snumber street $
     
     name Asaba. <br>";
}

HomeAddress("5th" ,"DLA");
HomeAddress("9th" ,"Ezenei");
echo "<br>";
echo "<br>";

function StreetName ($sname) {
     echo "$sname Asaba. <br>";
}

StreetName("DLA");
StreetName("Ezenei");

echo "<br>";
echo "<br>";

function HomeAddress ($snumber, $name) {
     echo "$snumber street $
     
     name Asaba. <br>";
}

HomeAddress("5th" ,"DLA");
HomeAddress("9th" ,"Ezenei");

?>
