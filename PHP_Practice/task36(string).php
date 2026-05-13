<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
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