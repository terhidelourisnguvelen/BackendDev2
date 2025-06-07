<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>
<body>


<?php
$Boyname = "morata";
$Girlname = "christel";
$companyname="creative";
// the dot (full spot) is for concatination which is for joining
echo "There was a boy name " . $Boyname . " who met a fair girl <br>";
echo "At $companyname , her name was " . $Girlname . "<br>";
echo "At" . $companyname . "They spent the whole day mopping the company<br>";
echo strlen($companyname) . "<br>";
echo " This will give the last letter in company" . " " . $companyname[7];
?>

    
</body>
</html>