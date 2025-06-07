<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="side.php" method ="get">
        <h1> A basic calculator</h1>
        <p> please enter 2 numbers for computing </p>
        <label for="num"> number1</label>
        <input type="number" name="num1">
        <br> <br>
        <label for="num2">number2</label>
        <input type="number" name="num2">
        <br> <br>
        <input type="submit">
        <br><br>
</form>
<?php
    $firstnumber=$_GET["num1"];
    $secondnumber=$_GET["num2"];
    $answer = $firstnumber * $secondnumber;
    echo "The multiplication of $firstnumber and $secondnumber is $answer";
    echo $firstnumber * $secondnumber;


    ?>
    
</body>
</html>