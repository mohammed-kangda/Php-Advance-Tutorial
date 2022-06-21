<!-- 
 
    check variable value or data type

    is_int()
    is_integer()
    is_long()
    is_float()
    is_double()
    is_real()
    is_numeric()
    is_string()
    is_bool()
    is_array()
    is_countable()
    is_null()
    is_callable()
    is_scalar()


    this functions will return boolean values

-->

<?php 
    
    /*-------is_int — Find whether the type of a variable is integer------- */
    $var = 850;
    //$var = 8.50;
    //$var = "850";
    //$var = NULL;
    //$var = true;

    echo is_int($var) ."<br><br>";  // 1

    var_dump(is_int($var))."<br><br>"; // bool(true)

    if(is_int($var)){
        echo "<br> $var is Integer. <br><br>";
    }else{
        echo "<br> $var is not an Integer. <br><br>"; // 850 is Integer
    }


    /*-------is_float — Finds whether the type of a variable is float------- */
    $var = 5.63;
    //$var = 563;
    //$var = '563';

    echo is_float($var) ."<br><br>";

    var_dump(is_float($var))."<br><br>";

    if(is_float($var)){
        echo "<br> $var is Float.<br><br>";
    }else{
        echo "<br> $var is not an Float.<br><br>";
    }


    /*-------is_double — Alias of is_float------- */
    $var = 5.00;
    //$var = 563;
    //$var = '563';

    echo is_double($var) ."<br><br>";

    var_dump(is_double($var))."<br><br>";

    if(is_double($var)){
        echo "<br> $var is double.<br><br>";
    }else{
        echo "<br> $var is not double.<br><br>";
    }


    /*-------is_real — Alias of is_float------- */
    $var = 5.63;
    //$var = 563;
    //$var = '563';

    echo is_real($var) ."<br><br>";

    var_dump(is_real($var))."<br><br>";

    if(is_real($var)){
        echo "<br> $var is real.<br><br>";
    }else{
        echo "<br> $var is not real.<br><br>";
    }


    /*-------is_numeric — Finds whether a variable is a number or a numeric string------- */
    // $var = 5.63;
    //$var = 563;
    $var = '563';
    //$var = NULL;
    //$var = true;
    //$var = 1;

    echo is_numeric($var) ."<br><br>";

    var_dump(is_numeric($var))."<br><br>";

    if(is_numeric($var)){
        echo "<br> $var is Numeric.<br><br>";
    }else{
        echo "<br> $var is not an Numeric.<br><br>";
    }

    /*-------is_string — Find whether the type of a variable is string------- */
    $var = "Wow";
    //$var = "Yahoo Baba";
    //$var = "555";
    //$var = 555;
    //$var = true;

    echo is_numeric($var) ."<br><br>";

    var_dump(is_string($var))."<br><br>";

    if(is_string($var)){
        echo "<br> $var is String.<br><br>";
    }else{
        echo "<br> $var is not an String.<br><br>";
    }

    /*-------is_bool — Finds out whether a variable is a boolean------- */
    $var = true;
    //$var = 'true';
    //$var = 1;

    echo is_bool($var) ."<br><br>";

    var_dump(is_bool($var))."<br><br>";

    if(is_bool($var)){
        echo "<br> $var is Boolean.<br><br>";
    }else{
        echo "<br> $var is not an Boolean.<br><br>";
    }

    /*-------is_null — Finds whether a variable is NULL------- */
    // $var = NULL;
    //$var = 55;
    $var = "";
    //$var = TRUE;

    echo is_null($var) ."<br><br>";

    var_dump(is_null($var))."<br><br>";

    if(is_null($var)){
        echo "<br> $var is NULL.<br><br>";
    }else{
        echo "<br> $var is not an NULL.<br><br>";
    }


    /*-------is_array — Finds whether a variable is an array------- */
    //$var = array('A','B','C');
    //$var = array(50,65,80.20);
    $var = 50;

    echo is_array($var) ."<br><br>";

    var_dump(is_array($var))."<br><br>";

    if(is_array($var)){
        echo "<br> $var is Array.<br><br>";
    }else{
        echo "<br> $var is not an Array.<br><br>";
    }


    /*-------is_countable — Verify that the contents of a variable is a countable value------- */
    $var = array(1,3,6);
    //$var = array("A","B","C");
    //$var = 56;

    echo is_countable($var) ."<br><br>";

    var_dump(is_countable($var))."<br><br>";

    if(is_countable($var)){
        echo "<br> $var is Countable.<br><br>";
    }else{
        echo "<br> $var is not an Countable.<br><br>";
    }


    /*-------is_scalar — Finds whether a variable is a scalar------- */
    $var = 45;
    //$var = 45.20;
    //$var = TRUE;
    //$var = array('A','B');

    echo is_scalar($var) ."<br><br>";

    var_dump(is_scalar($var))."<br><br>";

    if(is_scalar($var)){
        echo "<br> $var is Scalar.<br><br>";
    }else{
        echo "<br> $var is not an Scalar.<br><br>";
    }


    /*-------is_callable — Verify that the contents of a variable can be called as a function------- */
    function test(){

    }

    echo is_callable('test') . "<br><br>";
    var_dump(is_callable('test'));

    if(is_callable('test')){
        echo "<br> 'test' is Callable.<br><br>";
    }else{
        echo "<br> 'test' is not callable.<br><br>";
    }
?>