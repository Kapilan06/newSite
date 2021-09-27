<?php
    $title="Switch statements";
    include 'includes/header.php'

?>
    <h1>time for switch statements </h1>
    <?php

    $grade='D';
    switch($grade){
        case 'A':
            echo "<h3 style='color: green;'> You are a superstar</h3>";
            break;
        
        case 'B':
            echo "<h3 style='color: blue;'> You are a constant performer</h3>";
            break;
        case 'C':
            echo "<h3 style='color: yellow;'> You did well</h3>";
            break;
        default:
        echo "<h3 style='color: red;'> You have failed</h3>";
        break;
        
    }
    ?>
<?php
    require 'includes/footer.php'

?>