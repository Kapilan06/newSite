<?php
    $title="index";
    include 'includes/header.php'

?>
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

        echo '<button type="button" class="btn btn-outline-primary">Primary</button>';
        
    ?>
<?php
    require 'includes/footer.php'

?>
