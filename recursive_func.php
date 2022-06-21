<!-- 
  
    Function which call itself is known as recursive function

    it works like loop
 
-->

<?php 

    echo "<h2>Display Numbers</h2><br>";

    function display($number){
        
        if($number <= 5){
            echo "$number <br>";
            display($number + 1);
        }
        
    }

    display(1);


    echo "<h2>Factorial</h2><br>";

    function factorial($n){

        if ($n < 0){
            return -1;
        }

        if ($n == 0){
            return 1;
        }else{
            return ($n * factorial ($n - 1));  // 4 x (4-1)  = 12  // 4 x (3-1) = 8
        }
    }

    echo factorial(4);
    
?>