<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Write a function to sort an array
    function sortArray($array){
        sort($array);
        return $array;

    }
    $array = [3,11,9,5,10,50];
    $result = sortArray($array);
    echo("The sorted array is: ");
    foreach($result as $value){
        echo $value . " ";
    };
echo("<br>");
// Write a PHP function that checks whether a string is all lowercase.


    function is_lowercase($string){
        if($string == strtolower($string)){
            echo("The given string is in lowercase");
        }elseif($string == strtoupper($string)){
            echo("The given string is in uppercase");
        }else{
             echo("The given string is NOT all lowercase");
        }
    }
    $string = "heLlo";
    $result = is_lowercase($string);
    print_r($result);
    ?>
</body>
</html>