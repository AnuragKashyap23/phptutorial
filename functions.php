<h3>
<?php

// A function is a block of code that can be reuse multiple times.
// syntax:
// function function_name(){
//     code block
// }

function greet(){                   //function declaration
    echo "Welcome Deepak <br/>";
}

greet();                            // function call
greet();
greet();
echo "<br/> <hr>";

//functions with parameters
function sum($a, $b){              //here,$a, $b are parameters
    echo $a+$b, "<br>";
}

sum(10,20);                       //10, 20 are arguments that will be provided to $a and $b in sum().
sum(245,50);
sum(9999,10000);
echo "<br/> <hr>";

//return statement
function power($a, $b){
    return $a**$b;
}
// now if we call function power(), then nothing happens, because return statement store the value in power(),
// like a variable, so to display the value, we need to use echo.

echo power(2,5);
echo "<br/>";
// but why to write return, if above function can be achieved by using echo instead return inside function.
// The reason is what if we want to echo some statement with function in same line, then there will be two echo, 
// which will not work correctly. 

function name(){
    return "Gaurav";
}
echo "Hello ".name()." Welcome <br>"; 

function test(){           
    echo "Good morning <br>";
}

$test="test";  //we can also give reference to function, but use same variable name as function name.
test();
echo "<br> <br>";


// built-in functions

//strlen()  - returns length of string including spaces
$name="Gaurav Singh Sahu";
echo strlen($name), "<br>";

// date() - returns today date, give atleast one parameter enclodsed in quotes.
echo date("m");
echo "<br>";
echo date("d.m.y");
echo "<br> <br>";

// is_string() - to check if given parameter is string or not. returns 1 if it is or nothing if it is not string.
$a="Anime";
echo is_string($a);
echo "<br>";

$a=123;
echo is_string($a);
echo "<br>";

// rand() - generate random number.
echo rand(10,50);
echo "<br>";
echo rand();


?>
</h3>