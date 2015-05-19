<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$x = "outside";

function convert() {
global $x; //global scope, functions can change this.
$x = "inside"; //local, only available to the function.
    
}
echo $x;

echo "<br>";

convert();

echo $x;




?>
   
    
</body>
</html>