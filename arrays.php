<h1>
<?php

// Arrays - Collection of data of different data types enclosed b/w square brackets and separated by commas.
$user= ["Gaurav", "Durg", 24, true];
echo $user[0];   //it will print Gaurav which is present at 0th index.
echo "<br>";

//to print all items of array, we can use foreach loop
$fruits = array("apple", "orange","mango", "kiwi");   //we can use also array() to declare array.
foreach ($fruits as $a) {
  echo "$a <br>";
}
echo "<br>";

array_push($fruits,"banana");  //Banana will be added at last of array.
array_push($fruits,"Grapes", "papaya", "guava"); // we can also add multiple items in sinle command.
print_r($fruits);         //print_r() - to display array. we can also use var_dump().
echo "<br>";

array_pop($fruits);        //it will remove the last item.
array_splice($fruits, 2,4);    //it will remove items from index 4 to 7
print_r($fruits);

echo "<br>";
echo "<br>";

//Types of Arrays
// Indexed Array - array where elements can be access by indexing. All aboce are indexed array.
// Assocative Array - here elements are in the form of key=>value pairs.
// Multidimensional Array - we can store another array in an array.

//Associative array, we can access any element by key instead index.
$user1=["name"=>"Gaurav","age"=>24, "city"=>"Durg"];
foreach( $user1 as $key=>$value){
    echo $key." - ".$value;
    echo "<br>";
}
//modify specific key
$user1["city"]="Bhilai";
var_dump($user1);

echo "<br>";
echo "<br>";

//Multidimensional arrays
$users=[["Deepak", 23, "Pune"], ["Sunidhi", 22, "Ahmedabad"], ["Gaurav", 23, "Durg"]];
foreach( $users as $a){     // $a refers to each element of users[]
    foreach( $a as $x){     // $x refers to each element of $a[] 
        echo $x, " ";
    }
    echo "<br>";
}

//we can also print above array without using loop
echo "<pre>";        //<pre> is an html tag
print_r($users);     
echo "</pre>";

// we can display the above in form of table
echo "<table border=1>";
    foreach( $users as $a){
    echo "<tr>";
    foreach ($a as $x){
        echo "<td>";
        echo $x;
        echo "</td>";
    }
    echo "</tr>";
    }

echo "</table>";



// by multidimension array, we also mean we can put an array in another aray which is already in another array as so on.
$multi_arr=[[["cat","dog"],["tiger", "lion"]], [["elephant","giraffe"]]];   //here, it is 3 dimension array.
echo $multi_arr[0][0][0];                     //first, we access 0th element of array, then 0th element of 0th array,
// then again 0th element that inner array.

?>
</h1>