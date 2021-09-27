<?php
    $title="if statements";
    include 'includes/header.php'

?>
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
<?php
    require 'includes/footer.php'

?>