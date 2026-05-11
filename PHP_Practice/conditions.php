<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <p id="name"><?= "Laiba Ijaz"?></p>

    <?php 
    echo "current time";
    $current_time = date("H");
    if($current_time < 12){
    echo "Good Morning";
}elseif($current_time < 18){
    echo "Good Afternoon";
}else{
    echo "Good Evening";
}
    ?>

</body>
</html>