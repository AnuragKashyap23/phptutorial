<?php
echo "Hello "; // echo is used to display output. it is a language construct not function().
               // Language constructs are keywords that the PHP parser already knows about. Some language 
               // constructs act like functions, while others are used to build control statements such as 
               // if and while .

Echo "Anurag <br/>" ;      // it is a case insensitive, echo, ECHO, Echo, ECho all are same.
echo "Welcome"; echo "Anurag"; echo "Kashyap";  // multiple echo can be used in the same line.
// but output will be like: WelcomeAnuragKashyap
// if we want a line break after welcome then we can use <br/>.

echo "<br/> Welcome <br/>"; echo "Anurag <br/>"; echo "Kashyap";  // multiple echo can be use in same line.

/*
Variables: Reference to a memory location.
Rules-
Always start with $ sign followed by underscore and letters but not digits.
It is comprised of alphanumeric data and underscore but no other special characters.
variables are case sensitive.
Eg: $name="Anurag";
we can also assign single  value to multiple variables.
$a=$b=10;
*/
?>

<?php
//using HTML INSIDE PHP
echo "<h1 style='color:red'>Hello</h1>"; // text will be display red
// remember to use single quotation inside double quotation to recognise.
$name="Änurag";
echo "<h2 style='color:blue'>Hello $name</h2>";
echo "<h2 style='color:blue'>Hello".$name."</h2>"; //both are correct, actually dot is used in earlier version.
//we can also use php inside html.
?>


<h1>My name is <?php echo $name; ?>
</h1>

