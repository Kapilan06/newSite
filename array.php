<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Array </title>
</head>
<body>
    <h1> Arrays </h1>
    <?php

    // This is a variable
    $num=3;
    // This is an array

    $numbers = array(1,2,3,4,5,6,7,8,9,10);

    for($valueNum= 0; $valueNum<10;$valueNum++){

        echo "The value of array in numbers array of index $valueNum index is $numbers[$valueNum] <br/>";
        
    }
    $size= count($numbers);
    echo "<p> array numbers is size : $size  </p>";


    ?>
</body>
</html>