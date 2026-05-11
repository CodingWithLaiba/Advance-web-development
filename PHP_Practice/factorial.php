<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?="Find a Factorial of a Number"?></p>
    <?php
   function factorial($number){
   $result = 1;
    for($i=1; $i<=$number; $i++){
       $result *= $i;
    }
    echo ("The factorial of ". $number . "! = ". $result);
   }
   factorial(5);
    ?>
</body>
</html>