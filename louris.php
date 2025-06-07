<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="louris.php" method="post">
        <label for="Fname">Fname:</label>
        <input type="text" name="fname"><br><br>
        <label for="Lname">Lname:</label>
        <input type="text" name="lname"><br><br>
        <input type="submit">
</form>
<?php
$fname=$_POST["fname"];
$Lname =$_POST["lname"];
echo "Hello my name is louris" .  $fname . $lname;

?>
    
</body>
</html>