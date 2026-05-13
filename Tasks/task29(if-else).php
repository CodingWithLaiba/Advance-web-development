<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $time = date("H");
    if ($time < 12) {
        echo "Good Morning";
    } elseif ($time < 18) {
        echo "Good Aternoon";
    } else {
        echo "Good Evening";
    }
    ?>

</body>

</html>