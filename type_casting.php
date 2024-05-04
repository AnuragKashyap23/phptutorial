<h1>
<?php

//Type casting - converting data type of data
$a = 10;         //int
var_dump($a);
echo "<br>";

$b = (string) $a;   // the value of $a is converted to string and stores in b, Remember that $a is still of int type.
var_dump($b);       //here, b refers to string type.
echo "<br>";

$c = "300";
var_dump($c);       //string
echo "<br>";

$d = (int) $c;
var_dump($d);       // it becomes int.
echo "<br>";

$e = (boolean) $d;    // now, e stores boolean and returns true.
var_dump($e);       
echo "<br>";

$f= 30;
$g = (array) $f;
var_dump($g);  
echo "<br>";

// Note we cannot convert array to string using type casting.

//local and global variables

$name="Gaurav";

function greet(){
    $name="Deepak";     //local scope - meas if we echo $name out of greet() block then name = Gaurav will be display.
                        //beacuse loca variable is only accessible inside the block.
    echo $name;         // display Deepak because it is inside of block now.
}
greet();           
echo "<br>";

echo $name;           // here, Gaurav will be displayed, as Deepak stored in local variable.
echo "<br>";

// if we want to access Gaurav inside function block then we need to use global keyword.

function wish(){
    global $name;
    echo $name;
}

wish();
echo "<br>";


?>

</h1>