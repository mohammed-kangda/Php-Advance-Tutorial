<!-- 
    
    MySQLi (object-oriented)
    MySQLi (procedural)
    PDO

    PHP Fetch Style: fetch()

    PDO::FETCH_ASSOC
    PDO::FETCH_NUM
    PDO::FETCH_BOTH
    PDO::FETCH_OBJ

    mysqli_fetch_assoc() is known fetch() in PDO


-->

<?php 
 
    // creating a connection with database

    $db_name = "mysql:host=localhost;dbname=test";
    $username = "root";
    $password = "";
    
    // connection object

    $conn = new PDO($db_name, $username, $password);

    // running sql query

    $sql = "SELECT * FROM testtbl";
    $result = $conn->query($sql);

    // Fetching styles

    // while($row = $result->fetch(PDO::FETCH_ASSOC)){
    //     echo "{$row['id']} - {$row['Name']} - {$row['Age']} - {$row['Gender']} <br>";
    //     echo "<pre>";
    //     print_r($row);
    //     echo "</pre>";
    // }
    
    // while($row1 = $result->fetch(PDO::FETCH_NUM)){
    //     echo "{$row1[0]} - {$row1[1]} - {$row1[2]} - {$row1[3]} <br>";
    //     echo "<pre>";
    //     print_r($row);
    //     echo "</pre>";
    // }
    
    // while($row2 = $result->fetch(PDO::FETCH_OBJ)){
    //     echo "{$row2->id} - {$row2->Name} - {$row2->Age} - {$row2->Gender} <br>";
    //     echo "<pre>";
    //     print_r($row);
    //     echo "</pre>";
    // }

    // fetching all results at once(index & name)

    $fetchAll = $result->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($fetchAll);
    echo "</pre>"; 


    if(count($fetchAll) > 0){
        foreach($fetchAll as $row){
            echo "{$row['Name']} - {$row['Age']} <br>" ;
        }
    }else{
        echo "No Record Found";
    }
    
?>