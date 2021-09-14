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

    <ul>
    <li><a href="array.php"> Simple array and printout</a></li>
    <li><a href="forloop.php"> Simple loop</a></li>
    <li><a href="dowhileWhileloop.php"> Simple do while</a></li>
    <li><a href="ifstatement.php"> Simple if statements</a></li>
    <li><a href="switchstatement.php"> Simple swictch statement</a></li>
    <li><a href="stringmanip.php"> String manipulation </a></li>
    </ul>
    <?php
        echo "<b>PHP is a general-purpose scripting language geared towards web development.";
        echo "</b>It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. ";
        echo '<br/>';
        
    ?>
    <?php
        $name = "Kirubanandan kapilan";
        echo $name;
        $from = "Colombo";
        echo '<h3> I am '.$name. ' </h1>';
        echo '<h3> From '.$from. ' </h1>';
        
    ?>
</body>
</html>