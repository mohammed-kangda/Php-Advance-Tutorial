<!-- 

    When we want reach some part of the code then goto statement is used

    we have to create label for that -> label;

    It skips rest of the code.

    can be used in loop also

-->

<?php 
    
    echo "Hello World<br>";  // print
    goto ABC;
    echo "Hello World<br>"; // ignored
    

    ABC: 
    echo "I am label<br>"; // print

    echo "Hello World After label<br>"; // print
?>