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
// The reason is what if we want to echo some statement and function in same line, then there will be two echo, 
// which will not work correctly. 

function name(){
    return "Gaurav";
}
echo "Hello ".name()." Welcome <br>"; 

//we can also refer a function to a variable.
function fname(){
    echo "Gaurav";
}
$fname="fname";
$fname;













?>
</h3>