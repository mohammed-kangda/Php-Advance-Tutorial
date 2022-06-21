<?php 
    
    function wow($name){
       echo "Hello $name";
    }

    $fun = "wow";
    $fun('Mohammed');
    

    echo "<h2>Anonymous Function</h2><br>";
    

    $sayHello = function($name){
        echo "Hello $name";  
    };

    $sayHello('MK');
?>