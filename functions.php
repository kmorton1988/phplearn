<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php


$name = "Kyle";

function greeting($i){
    echo "Hello " . $i . ", welcome to the game. <br>"; 
}


greeting($name);

function calculate($i, $x) {
$sum = $i + $x;
echo "Here is your calculation: " . $i . " + " . $x . " = " . $sum . "!<br>";   
}
    

calculate(1,3);
calculate(4,78);

function addNumbers($x, $y){
    $sum = $x + $y;
    return $sum;
}

echo "the sum of 4 and 5 is " . addNumbers(4,5);

$answer = addNumbers(4,29);
echo "<br>";
echo 4 + $answer;

    
    
?>


    
</body>
</html>