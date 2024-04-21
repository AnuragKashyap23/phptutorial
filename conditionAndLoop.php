<h2>
<?php
//if_condition
$age=24;
$name="Deepak";
$location="Delhi";
if($age>=18){
    echo "qualified", "<br>";
}
//output- qualified
//we can use multiple if condition
if($name>="Deepak"){
    echo "qualified", "<br>";
}
if($location>="Delhi"){
    echo "qualified", "<br>";
}

// here every if condition is checked one by one.
// what if we want only one condition to be checked and if it true then others will not be checked.
// we use if else for two conditions and if elseif for multiple conditions

if($age>=18){
    echo "qualified", "<br>";
}
else{
    echo "disqualified", "<br/>";
}
// at below codes, only one condition will be executed
$marks=80;
if ($marks>=90){
    echo "Grade A","<br/>";
}
else if ($marks>=90){
    echo "Grade B","<br/>";
}
else if ($marks>=70){
    echo "Grade C","<br/>";
}
else{
    echo "Try Hard", "<br/>";
}

//we can also use switch statement instead of if-else
$name="Gaurav";
switch($name){
    case "Deepak":
        echo "You are not qualified", "<br>";
        break;       //break is used so that the other case statements will not be checked, if this block is executed.
    case "Gaurav":
        echo "You are qualified", "<br>";
        break;
    case "Anurag":
        echo "You are not qualified", "<br>";
        break;
    default:
    break;
}
echo "<br/>";
echo "<br/>";

//Loops - these are used to execute the same block of code again and again.
//for loop, syntax:
//for (initializatio; condition; increment/decrement) {
//  code block
//}
//initialisation is done only once at the start of the loop, then condtion is checked,
//and after each loop condition and increment/decrement is done.

for($i=1; $i<=10; $i++){
    echo $i,"<br/>";
}
echo "<br/>";

//while loop, syntax:
//while(condition){ 
//     block of code                  this code block will execute till condition is true.
// }
$num=5;
while($num<10){
    echo "Hello", "<br/>";
    $num++;    //num=num+1
}

echo "<br/>";

//do-while loop - similar to while only difference is that while loop execute if condition is true from start,
// but in do-while, even if the condition false, the code block will execute atleast oncde.
$num=1;
do{
    echo $num, "<br/>";
    $num++;
}while($num<10);

echo "<br/>";

//foreach loop - It loops through a block of code for each element in an array or each property in an object.
$colors = ["red", "green", "blue", "yellow"];

foreach ($colors as $a) {
  echo "$a <br>";            //$a is assigned each element of array after every loop.
}

//break - The break statement can be used to jump out of different kind of loops.
for ($i = 0; $i < 10; $i++) {
    if ($i == 3) {
      break;             // when i=3 then loop wil terminate.
    }
    echo "The number is: $i <br>";    //output: 0, 1, 2
}
echo "<br> <br>";

//continue - it can be used to jump out of the current iteration of a loop, and continue with the next.
for ($i = 0; $i < 10; $i++) {
    if ($i == 4) {
      continue;       //when x=4, it direct goes to x=5 without displayig 4
    }
    echo "The number is: $i <br>";  //output: 0, 1, 2, 3, 5, 6, 7, 8, 9
  }

?>
</h2>