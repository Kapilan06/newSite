<?php
    $title="Arrays";
    include 'includes/header.php'

?>
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
<?php
    require 'includes/footer.php'

?>