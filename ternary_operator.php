<?php 
    
    # shorter version of if/else statement:

    $x = 18;

    ($x > 18) ? $z="Eligible" : $z="Not Eligible";

    echo $z . '<br>';

    $y = 100;

    $c = "Value is " . (($y > 18) ? "Greater" : "Smaller");
    echo $c . '<br>';     // Value is Greater
    
?>