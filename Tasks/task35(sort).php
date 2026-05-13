<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sortArray($arr){
        sort($arr);
        return $arr;
    }
    $arr = [5,23,1,10,3,90];
    $result = sortArray($arr);
    foreach($result as $value){
        echo $value . " ";
    }

    
    
    
    ?>
</body>
</html>