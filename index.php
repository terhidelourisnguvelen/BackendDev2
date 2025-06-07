<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> the sum of 3 and 5 can be below</p>

    <form action="index.php" method ="get">
        <h1> A basic calculator</h1>
        <p> please enter 2 numbers for computing </p>
        <label for="num"> number1</label>
        <input type="number" name="num1">
        <br> <br>
        <label for="num2">number2</label>
        <input type="number" name="num2">
        <br> <br>
        <input type="submit">
        <br> <br>


</form>
    <?php
    $firstnumber=$_GET['num1'];
    $secondnumber=$_GET['num2'];
    echo "The answer of $firstnumber and secondnumber is";
    echo $firstnumber+$secondnumber;

    $userage = "20";
    $username = "philemon";
    echo " <h1> There was a man named $username</h1>";
    echo " <p> he is $userage yrs old</p>";
    echo " He really likes nickel <br>";
    echo " But didnt like being $userage yrs";
// MATHEMATICAL OPERATION
    echo  3.6 + 1.4 ;
    echo " <br>";
    echo 3.6 * 1.4;
    echo " <br>";
     echo 3.6 / 1.4;
    echo " <br>";
    echo 3.6 - 1.4;
    echo "<br>";
    echo (2+3)*3;
    echo "<br>";
    echo pow (3,2);
    echo "<br>";
    echo 10 % 3;
    echo "<br>";
    echo abs(-78);
    echo "<br>";
    echo max ( 13, 10);
    echo "<br>";
    echo ceil(56.984);

// A BASIC CALCULATOR WITH TECHNOVICE
    ?> 
</body>
</html>
