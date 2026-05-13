<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $months = ["January","February","March","April","May","June"];
    $delete = "February";
    $newArray = [];
    foreach($months as $value){
        if($value != $delete){
            $newArray[] = $value;
        }
    }
    echo implode(", ", $newArray);

 
    ?>
</body>
</html>