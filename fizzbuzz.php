<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

function fizzbuzz() {
    for($i = 1; $i <= 100; $i++) {
        if($i % 3 == 0 && $i % 5 == 0){
            echo "fizzbuzz" . "<br>";   
            }
        elseif($i % 3 == 0){
            echo "fizz" . "<br>";
            }
        elseif($i % 5 == 0){
            echo "buzz" . "<br>";    
            }
        else {
            echo $i . "<br>";
            }
        }
    }



fizzbuzz()

?>
   
    
</body>
</html>