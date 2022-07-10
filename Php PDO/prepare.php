<!-- 
    
    prepare is secured method and prevent us from writing sql queries each time

    bindParam(1st placeholder,$var,validation);

    we can also give placeholder name in sql query

    
    bindparam() & bindValue method are same

    shortcut method instead of bindParam method (without name placeholder):

    $result->execute(array(1st placeholder,2nd placeholder));

    shortcut method instead of bindParam method (name placeholder):

    $result->execute(array(':placeholder' => $var,':placeholder' => $var));

    same method for all queries
    Data Types in bindParam

    PDO::PARAM_INT
    PDO::PARAM_STR
    PDO::PARAM_LOB
    PDO::PARAM_BOOL
    PDO::PARAM_NULL

    prepare doesnt run without exexute method

-->

<?php 
    
    # creating a connection with database

    $db_name = "mysql:host=localhost;dbname=test";
    $username = "root";
    $password = "";
    
    # connection object

    $conn = new PDO($db_name, $username, $password);

    # running sql queries

    $id = 1;
    $name = "Mohammed";

    // $sql = "SELECT * FROM testtbl WHERE Name = ? AND id = ?";
    // $result = $conn->prepare($sql);

    // $result->bindParam(1,$name,PDO::PARAM_STR);
    // $result->bindParam(2,$id,PDO::PARAM_INT);
    // $result->execute();

    # shortcut method instead of bindParam()

    // $result->execute(array($city,$id));


    # providing placeholder name

    $sql = "SELECT * FROM testtbl WHERE Name = :name AND id = :id";
    $result = $conn->prepare($sql);

    // $result->bindParam(':name',$name,PDO::PARAM_STR);
    // $result->bindParam(':id',$id,PDO::PARAM_INT);
    // $result->execute();

    $result->execute(array(':name' => $name , ':id' => $id));
    $fetchAll = $result->fetchAll(PDO::FETCH_ASSOC);

    if(count($fetchAll) > 0){
        foreach($fetchAll as $row){
            echo "{$row['Name']} - {$row['Age']} <br>" ;
        }
    }else{
        echo "No Record Found";
    }

    
?>