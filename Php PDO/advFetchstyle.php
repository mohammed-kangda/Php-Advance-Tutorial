<!-- 

    Advance Fetch styles

    PDO::FETCH_COLUMN -> return first single column data(if colname given then it return specific cn) 
    PDO::FETCH_GROUP -> it creates group of an array
    PDO::FETCH_UNIQUE -> shows unique data only
    PDO::FETCH_KEY_PAIR -> only 2 col can be fetched in key => value pair
    PDO::FETCH_CLASS -> similar to PDO::FETCH_OBJ return as a obj of stdclass

    $result->fetchAll(PDO::FETCH_);


    PDO Methods:

    rowCount() -> returns how many rows are affected
    exec() -> short form of execute() method & used in insert, update and delete queries only
              by using this no need to write prepare()
    lastInsertid() -> return id of last record inserted 

-->

<?php 
    
    # creating a connection with database

    $db_name = "mysql:host=localhost;dbname=test";
    $username = "root";
    $password = "";
    
    # connection object

    $conn = new PDO($db_name, $username, $password);

    // running sql query

    $sql = "SELECT * FROM testtbl";
    $result = $conn->prepare($sql);  
    $result->execute();

    # using exec() method

    // $result = $conn->exec($sql);

    # getting id of total affected rows

    echo $result->rowCount();

    # fetching all records

    // $fetchAll = $result->fetchAll(PDO::FETCH_COLUMN,1);
    // $fetchAll = $result->fetchAll(PDO::FETCH_GROUP ||PDO::FETCH_ASSOC);
    // $fetchAll = $result->fetchAll(PDO::FETCH_UNIQUE ||PDO::FETCH_ASSOC);
    // $fetchAll = $result->fetchAll(PDO::FETCH_KEY_PAIR);
    
    $fetchAll = $result->fetchAll(PDO::FETCH_CLASS);
    echo "<pre>";
    print_r($fetchAll);
    echo "</pre>"; 


    # inserting records in the database using prepare() directly without using variable

    $sql =  "INSERT INTO testtbl(Name,Age,Gender)
             VALUES(?,?,?)";

    $result = $conn->prepare($sql);

    # shortcut method instead of bindParam()

    $result->execute(array('Inserted',21,'Male')); 

    # getting id of last inserted record

    echo $conn->lastInsertid($sql);  
?>