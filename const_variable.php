<?php 
    # simple variable 

    $x = 100;
    $x = 25;

    echo $x . '<br>'; // 25

    $x = "text";
    echo $x . '<br>'; // text

    # const variable

    // define(name,value,case-sensitive);

    // name can be used like : name or _name, cant use $ sign or numeric val initialy

    // contsant variable are global variables

    // true destroys case-sensitive

    // by default false value

    define('num',500,true);

    // define('num',0,true); // cant redefine
    echo NUM; 

    // 500 bcoz true means it can be echo using any case but word should be same
    
?>