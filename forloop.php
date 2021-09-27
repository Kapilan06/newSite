<?php
    $title="For loops";
    include 'includes/header.php'

?>
<h1>For Loop statements </h1>
    <?php

    for($count=0 ; $count < 10; $count++){
        echo 'Hello World <br/>';
    }

    for($count=0 ; $count < 10; $count++){
        echo "Value is $count<br/>";
    }
    
    ?>
<?php
    require 'includes/footer.php'

?>