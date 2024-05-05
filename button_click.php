<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button</title>
</head>
<body>
    <form action="" method="POST">
        <button name="btn" value="day">Day</button>
        <br/>
        <br/>
        <button name="btn" value="month">Month</button>
        <br/>
        <br/>
        <button name="btn" value="year">Year</button>
    </form>
</body>
</html>
<h1>
<?php

if(isset($_POST['btn'])){           // this line checks if btn is set, means if btn has been clickd.
    if($_POST['btn']=='day'){       // now the value of button is checked. if button with value day is clicked then this block will be executed.
        echo date("D");
    }
    if($_POST['btn']=='month'){
        echo date("M");
    }
    if($_POST['btn']=='year'){
        echo date("y");
    }
}

?>
</h1>