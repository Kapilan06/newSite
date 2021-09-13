<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
    <h1>Hello world!!!!</h1>
    <p>this my first php trial page created using Udemy course</p>

    <?php
        echo "Hello PHP!!!";
        echo '<br/>';
        echo "next line ";
        echo "next line continue";
    ?>
    <?php
        $name = "Kirubanandan kapilan";
        echo $name;
        $age = "21";
        echo '<h1> my Name is : '.$name. ' </h1>';
        echo '<h1> Age is : '.$age. ' </h1>';
        echo "<h1> my name is : $name </h1>"
    ?>
</body>
</html>