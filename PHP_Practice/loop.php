<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="name"><?= "Laiba Ijaz"?></div>
    <?php
    echo ("For Loop". "<br>");
    for($i=5; $i<=15;$i++){
        echo ($i. "<br>");
    };
 echo ("while Loop". "<br>");
 $i = 5;
 while($i<=15){
     echo ($i. "<br>");
     $i++;
 };
 echo ("do-while Loop". "<br>");
$j=5;
do{
    echo ($j . "<br>");
    $j++;
}while($j<=15);
echo "display count, from 1 to 5 <br>";
$i = 1;
do{
    echo ($i . "<br>");
    $i++;
}while($i<=5);

?>
</body>
</html>