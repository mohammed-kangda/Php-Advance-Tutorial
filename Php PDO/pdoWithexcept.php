<!-- 
 
    try/catch method doesnt work properly when we run sql queries,but work best with conn 
    process

    errorinfo() method solves our problem and used to show errors

-->

<?php 
    
    try {

        // creating a connection with database

        $db_name = "mysql:host=localhost;dbname=test";
        $username = "root";
        $password = "";
        
        // connection object

        $conn = new PDO($db_name, $username, $password);

        // running sql queries

        $sql = "SELECT * FROM testtbl";
        $result = $conn->prepare($sql);
        $result->execute();

    } catch (PDOException $th) {
        echo $th->getMessage();
    }

    $err = $result->errorInfo();
    echo "<pre>";
    print_r($err);
    echo "</pre>";

?>