<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - while and do while</title>
</head>
<body>
    <h1>While loop </h1>

    <?php
    $grade=0;

    while($grade < 10){

        $mod=$grade%2;
        if($mod >0){
        echo "<p>I am less than 10 and I'm $grade <p>";
        }
        $grade++;
    }
    echo "Exit loop";
    ?>

    <h1>Do While loop</h1>
    <?php
    $grade=0;

    do{

        if($grade<1){
            echo "Entered into Do While loop";
        }
        
        $grade++;
        echo "<p>I am less than 5 and I'm $grade <p>";
    }while($grade<5);
    ?>

</body>
</html>