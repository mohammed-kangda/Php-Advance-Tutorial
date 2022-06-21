<!-- 

    & is used to store the address. 
  
-->


<?php 
    
    echo "<h2>Passing Arguement By Value</h2><br>";
    
    function testing($string){
        $string .= 'and something extra.';
    }

    $str = 'This is a string, ';
    testing($str);
    echo $str;  // This is a string, 



    echo "<h2>Passing Arguement By Reference</h2><br>";

    function great(&$b){
      $b = 'hello';
    }

    $funct =  'hi';
    great($funct);
    echo $funct;   // hello


    echo "<h2>Passing Arguement By Reference</h2><br>";

    function first($num) {
        $num += 5;
    }
      
    function second(&$num) {
        $num += 6;
    }


    $number = 10;
    first( $number );
    echo "Original Value is $number<br>";  // 10

    second( $number );
    echo "Original Value is $number<br>";   // 16
   
?>