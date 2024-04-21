<?php
//constants - declared by using keyword 'const'.
const data="apple";
//once declared cannot be changed later
echo data ,"<br>";
//data="orange"; this line will give error
//constants can also be declared using define()
define("name","Deepak");      //define(variable_name, value)
echo name,"<br/>";

// const are always case-sensitive
// define() has has a case-insensitive option.
// const cannot be created inside another block scope, like inside a function or inside an if statement.
// define can be created inside another block scope.

/* 
Data types:
String - "Apple" 
Integer - 20
Float   - 20.5
Boolean - True
Null
Array   - ["Apple, "Orange", 24 , 45.7, true]
Object
Recourse - ftp_connect(""127.0.0.1") or die("localhost not found")
*/
$str="Mango";
echo var_dump($str);  //The var_dump() function returns the data type and the value
echo "<br/>";

//Operators - Symbols that trigger some action to operands(constants or variables).
//Arithmetic - +, -, *, /, **(Exponential yields power), %(Modulus yields remainder).
//Comparison - Returns boolean value(true/false)
// <, >, <=, >=, != or <>(not equal to), ==(Equal to), ===(equal only if data types are also same), 
$num1=10;
$num2=20;
$num3=10;
$num4="10";  //string data type
var_dump($num1==$num3);  //output=true
var_dump($num1==$num4);  //output=true, vaues are same
var_dump($num1===$num4);    // output=false, values are same but data types are not same.
var_dump($num1!==$num4);    //true, !==(give true if values are same but data type are also not same)
var_dump($num1==$num2);    //false
// <=> (spaceship operator), it returns an integer value, 1 if first number is greater than second, 
// returns 0, if both numbers are equal, retrns -1, if first number is less than second.
echo $num1<=>$num2;   //output = -1

//Assignment - =, +=, -=, /=, *=, **=, %=.
//Logical
//increment/decrement 
// pre increment/decrement - first do the increment/decrement and then use it
echo "<br/>";
$a=10;
echo ++$a, "<br/>";  //11
//post increment/decrement - first use the value and then increment/decrement it
$b=20;
echo $b++,"<br/>";  //20
echo $b, "<br/>";    //21

//String operators
$name="Deepak";
echo "Hello ".$name;  // .(dot) is a concatenation operator, we can also use comma here
echo "<br/>";
$lastname="Sahu";
$fullname=$name." ".$lastname;  //here we cannot use comma as comma is not a concatenation operator, comma can only use in echo.
echo $fullname;
?>