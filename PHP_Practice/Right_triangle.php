<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <p id="name" style="font-weight: bolder;"><?= "Right Triangle"?></p>
<?php
for($i=1; $i<=4;$i++){
    for($j=1; $j<=$i;$j++){
        echo ("* ");
    }
     echo ("<br> ");
}

?>
</body>
</html>