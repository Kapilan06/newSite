<?php
    $title="String Manipulation";
    include 'includes/header.php'

?>
    <h1>PHP String manipulation</h1>
    <?php
    // Concatenation of strings
    $phrase1= "Student who came late <br/>";
    $phrase2= "Stand with ROCK </br>";
    echo $phrase1."<br/>".$phrase2;

    echo "<hr/>";
    // String transforamation

    $name = "Andrew flintoff";
    echo "Upper case of first letter of first word your name: ".ucfirst($name)."<br/>";
    echo "Upper case of first letter of each word of your name: ".ucwords($name)."<br/>";
    echo "Upper case of all letters of your name: ".strtoupper($name)."<br/>";

    echo "<hr/>";

    echo "Repaeat String : ".strtoupper(str_repeat('a',5))."<br/>";
    echo "Get String : ".strtoupper(substr($name,3,12))."<br/>";
    echo 'Find Character "a" : '.strpos($name,'A').'<br/>';
    echo 'Find Character "w" : '.strpos($name,'w').'<br/>';
    echo "<hr/>";
    echo 'Find Character "o" : '.strchr($name,'o').'<br/>';
    echo 'Find Character "l" : '.strchr($name,'l').'<br/>';

    echo "<hr/>";

    echo 'Find length of string : '.strlen($name).'<br/>';

    echo 'without Trim: '."A"." B C D "."E".'<br/>';
    echo 'Trim spaces on both sides: : '."A".trim(" B C D ")."E".'<br/>';
    echo 'without Trim: '."A".ltrim(" B C D ")."E".'<br/>';
    echo 'without Trim: '."A".rtrim(" B C D ")."E".'<br/>';

    echo "<hr/>";

    echo 'Replace string with another: '.str_replace("Stand with","sit on",$phrase2).'<br/>';

    ?>
<?php
    require 'includes/footer.php'

?>