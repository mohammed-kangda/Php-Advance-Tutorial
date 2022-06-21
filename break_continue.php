<!-- 
    Continue: If we want to print 1...10 by skipping 3 then 
    continue statement is used.

    when loop sees continue word then it immediately reach loop starting by
    skiping rest part of loop 

    in short after reaching continue its skip rest part of the code & reach 
    starting of the code
    
    
    Break: when we want that when loop reaches 3 its stop the loop
    the break is used which skips code from running

    when loop reach break it immediately come out of the looop

-->

<?php 
    echo "<h2>Continue Statement</h2> <br>";

    for ($a = 1; $a < 10; $a++) {
        if ($a == 3){
           continue;   // skips rest of the code
        }
       
        echo "Number : " . $a . "<br>";
    }

    echo "<h2>Break Statement</h2><br>";

    for ($a = 1; $a < 10; $a++) {
        if ($a == 3){ 
           break;
        }
       
        echo "Number : " . $a . "<br>";
    }
    
?>