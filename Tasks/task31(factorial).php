<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function factorial($num){
        $result = 1;
        for($i=1;$i<=$num;$i++){
            $result *=$i;
        };
        return $result;
    };
    $num = 5;
    $result = factorial($num);
echo("The factorial of given number " .  $num ."! = " .$result);

    ?>
</body>

</html>