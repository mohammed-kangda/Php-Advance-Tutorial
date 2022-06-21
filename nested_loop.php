<!-- 
    // COLUMNS

    1    2    3    4    5    6    7    8    9    10     // ROWS

    11   12   13   14   15   16   17   18   19   20

    21    .    .   .     .   .    .    .    .    30

    .    .    .   .     .   .    .    .    .     .

    41    .    .   .     .   .    .    .    .    50


    Outer Loop Works for rows. -> R  -> increment by 10

    Inner Loop Works for columns -> C  -> increment by 1

-->

<?php 
    
    for($r=1 ; $r<=50 ; $r = $r + 10){

        for($c=$r ; $c < $r + 10 ; $c++){

            echo $c . ' ' ;
            
        }

        echo '<br>';
    }
    
?>