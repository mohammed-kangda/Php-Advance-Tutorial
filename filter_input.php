<!-- 

    if we want that user should enter valid email and the same type 
    we also want that method of form should be POST or GET,
    so in this type of situation filter_inputfunction is used

    This method is used to prevent our site from hackers

    filter_type(type,variable/fieldName,filter,options)

    type:

    INPUT_GET
    INPUT_POST
    INPUT_COOKIE
    INPUT_SERVER
    INPUT_ENV

    filter:

    Validate Filters
    Sanitize Filters

-->

<html>
<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        E-mail: <input type="text" name="email" autocomplete="off">
        <input type="submit" name ="submit" value ="submit">
    </form>
    <br>
    <?php
        /*-------FILTER_INPUT------- */
        if(isset($_REQUEST["submit"])) {
            echo filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);

            if(filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)){
                echo "Email is valid";
            }else{
                echo "Email is not valid";
            }
        }
    ?>
    <br>


    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Marks: <input type="text" name="marks" autocomplete="off">
        <input type="submit" name ="sub" value ="submit">
    </form>
    <br>
    <?php
       /*-------FILTER_INPUT------- */
        if (isset($_REQUEST["sub"])){
            $options = array(
                "options" => array(
                    "min_range" => 1,
                    "max_range" => 100
                )
            );

            if (filter_input(INPUT_POST, "marks", FILTER_VALIDATE_INT,$options)){
                echo("Marks is valid.");
            }else{
                echo("Marks is not valid.");
            }
        }
    ?>
</body>
</html>