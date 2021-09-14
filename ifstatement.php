<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If statements</title>
</head>
<body>
    <h3 style="color: red;"></h3>
    <?php 
        echo '<h2> If statements </h2>';

        $grade = 80;
        if($grade >= 50){
            echo '<h3 style="color: green;"> You have passed !!! </h3>';
        }
        else{
            echo '<h3 style="color: red;"> You have Failed :( !!! </h3>';
        }
        
        if($grade >= 80){
            echo '<h4> You have passed with an Distinction</h4>';
        }
        elseif($grade>= 70){
            echo '<h4> You have passed with an Merit</h4>';
        }
        elseif($grade>=50){
            echo '<h4> You have passed with an normal pass</h4>';
        }
        else{
            echo '<h4> You can try it for the next time</h4>';
        }

    ?>
</body>
</html>