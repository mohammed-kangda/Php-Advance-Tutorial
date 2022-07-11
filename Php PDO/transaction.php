<!-- 

    when we use insert,update or delete queries then changes are saved permanentlt bcoz of 
    autocommit: on feature

    when we use autocommit: off changes are done temporarily with help of transaction feature

    beginTransaction() -> does autocommit: off
    commit() -> does autocommit: on & saved changes permanently
    rollback() -> revert the changes previously

    Eg: if we want that both queries runs then only commit(saved changes permanently)

    try{

       # creating connection
 
       $conn->beginTransaction();

       # insert query
       # update query 

       $conn->commit();

    }catch(){

        $conn->rollback();

    }

    PDO::setAttribute(int $attribute, mixed $value) -> used to show errors instead of
    using if/else & throw new...

    PDO::ATTR_ERRMODE -> Error reporting mode of PDO. Can take one of the following values:

        PDO::ERRMODE_SILENT -> Only sets error codes.
        PDO::ERRMODE_WARNING -> Raises E_WARNING diagnostics.
        PDO::ERRMODE_EXCEPTION -> Throws PDOExceptions.

    If we want to set mult. attribute then we have to use before $conn obj and passed it in $conn:
    $options =  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]    

-->

<?php 
    
    try {

        # creating a connection with database

        $db_name = "mysql:host=localhost;dbname=test";
        $username = "root";
        $password = "";
        
        # connection object

        $conn = new PDO($db_name, $username, $password);

        # setting attribute to visible errors in queries

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        # starting transaction process

        $conn->beginTransaction();

        # running sql queries

        $sql = "INSERT INTO testtbl(Name,Age,Gender)VALUES(?,?,?)";
        $sql2 = "UPDATE gendertbl SET Total = Total + 1 WHERE Gender = ?"; 

        $result = $conn->prepare($sql);
        $result2 = $conn->prepare($sql2);

        $result->execute(array('OOP',23,'Male'));

        // if(!$result->execute(array('OOP',23,'Male'))){
        //     throw new Exception("SQL 1 FAILED !!");  
        // }

        $result2->execute(array('Male'));

        // if(!$result2->execute(array('Male'))){
        //     throw new Exception("SQL 2 FAILED !!");
        // }

        # saving changes permanently

        $conn->commit();

        echo "All Data Saved";

    } catch (PDOException $th) {

        # removing last entry

        $conn->rollBack();
        echo $th->getMessage();
    }
    
?>