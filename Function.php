<?php
    $title="Functions";
    include 'includes/header.php'

?>
    <?php
    /* Defingin Function */

    function writemessage(){
        echo "You are really nice person, Have a nice day <br/>";
    }

    /* Calling a function */
    writemessage();
    writemessage();
    writemessage();
    writemessage();
    writemessage();

    echo "<hr/>";
    writemessage();

    function addNumbers($num1,$num2){
        $sum=$num1+$num2;
        echo "The sum of $num1 and $num2 is equals to : $sum <br/>";

    }

    
    function changeNum(&$num){

        $num=$num+10;
        
    }

    function returnProduct($num1, $num2){
        $prod=$num1*$num2;
        return $prod;

    }
    addNumbers(10,5);
    $num=15;
    addNumbers(10,$num);
    changeNum($num);
    echo $num.'<br/> <hr/>';

    $returnPro=returnProduct(15,25);
    echo $returnPro."<br/>";
    ?>
<?php
    require 'includes/footer.php'

?>