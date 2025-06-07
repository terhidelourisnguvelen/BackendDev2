<?php
$_SERVERname= "localhost";
$_username= "root";
$_password= "admin22";
$database= "tecnovice travel";

$conn= new mystqli($_SERVERname, $_username, $_password, $_database);

if ($_sconn->connect_error) {
    die ("connect failed: " . $_sconn->connect_error);
}
echo "connected successfully";
?>