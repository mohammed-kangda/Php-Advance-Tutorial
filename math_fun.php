<!-- 
    
   max()
   min() 

-->

<?php 
    
    /*-------Math:Max Function------- */
    $val = max(22,14,68,18,15);
    echo $val . "<br>";
    

    /*-------Math:Min Function------- */
    $val = min(22,14,68,18,15);
    echo $val . "<br>";
    

    /*-------Math:Max single Array Function------- */
    $val = max(array(44,16,81,12));
    echo $val . "<br>";


    /*-------Math:Min single Array Function------- */
    $val = min(array(44,16,81,12));
    echo $val . "<br>";


    /*-------Math:Max Multiple Array Function------- */
    $val = max([2, 4, 8], [2, 5, 1]);

    echo "<pre>";
    print_r($val);
    echo "</pre>";


    /*-------Math:Min Multiple Array Function------- */
    $val = min(array(2, 4, 8), array(2, 5, 1));

    echo "<pre>";
    print_r($val);
    echo "</pre>";


    /*-------Math:Max Boolean Value Function------- */
    $val = max(TRUE,FALSE);
    echo $val . "<br>";


    $val = min(TRUE,FALSE);
    echo $val . "<br>";


    $val = max(TRUE,0);
    echo $val . "<br>";


    $val = min(TRUE,0);
    echo $val . "<br><br><br>";
    
?>

<!-- 

    ceil() -> +1 always for decimal only for '+' / -1 always for dec. for '-'
    floor() -> -1 always decimal only / +1 always for dec '+'
    round() -> roundfiger
    abs() -> positive intger only 

-->

<?php 
    
    /*-------Math:Ceil Function------- */
    echo(ceil(0.60) . "<br>");  // 1 
    echo(ceil(0.40) . "<br>");  // 1
    echo(ceil(5) . "<br>");     // 5
    echo(ceil(5.1) . "<br>");   // 6
    echo(ceil(-5.1) . "<br>");  // -5
    echo(ceil(-5.9). "<br><br>");  // -5


    /*-------Math:Floor Function------- */
    echo(floor(0.60) . "<br>");  // 0
    echo(floor(0.40) . "<br>");  // 0
    echo(floor(5) . "<br>");     // 5
    echo(floor(5.1) . "<br>");   // 5
    echo(floor(-5.1) . "<br>");  // -6
    echo(floor(-5.9). "<br><br>");   // -6


    /*-------Math:Round Function------- */
    echo(round(0.60) . "<br>");  // 1
    echo(round(0.40) . "<br>");  // 0
    echo(round(5) . "<br>");     // 5
    echo(round(5.1) . "<br>");   // 5
    echo(round(-5.1) . "<br>");  // -5
    echo(round(-5.9) . "<br><br>");  // -6

    /*-------Math:Abs Function------- */
    echo(abs(0.60) . "<br>");  // 0.6
    echo(abs(0.50) . "<br>");  // 0.5
    echo(abs(5) . "<br>");     // 5
    echo(abs(5.9) . "<br>");   // 5.9
    echo(abs(-5.1) . "<br>");  // 5.1
    echo(abs(-5.9). "<br><br>"); // 5.9
    
?>

<!-- 

    intdiv()
    sqrt()
    pow()

-->

<?php 
    
    /*-------intdiv() -- Integer division------- */
    echo intdiv(8, 4) . "<br>";    // 2
    echo intdiv(5, 2) . "<br>";    // 2
    echo intdiv(-5, -2) . "<br><br>";  // 2

    /*-------sqrt() -- Square root------- */
    echo(sqrt(9) . "<br>");
    echo(sqrt(4) . "<br>");
    echo(sqrt(0) . "<br>");
    echo(sqrt(1) . "<br>");
    echo(sqrt(5) . "<br><br>");

    /*-------pow() -- Exponential expression------- */
    echo(pow(2,4) . "<br>");
    echo(pow(2,2) . "<br>");
    echo(pow(-2,4) . "<br>");
    echo(pow(-2,-4) . "<br><br>");
    
?>

<!-- 

    rand(min,max)
    mt_rand() -> more accurate / speedy
    lcg_value() -> return betwn 0 & 1

-->

<?php 
    
    /*-----Random Number Functions------- */
    echo(rand() . "<br>");
    echo(rand() . "<br>");
    echo(rand(0,10) . "<br>");
    echo(rand(10,20) . "<br><br>");

    /*-----mt_rand() -- Mersenne Twister algorithm------- */
    echo(mt_rand() . "<br>");
    echo(mt_rand(10,20). "<br><br>");

    /*-----lcg_value() --- return float value betwn 0 & 1------- */
    echo (lcg_value(). "<br><br>"); 
    
?>