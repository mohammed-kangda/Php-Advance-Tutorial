<!-- 

    bindValue() -> binds user input value
    bindParam() -> binds user input value
    bindColumn() -> used to fetch single value & decrease code size

    $conn->prepare($sql);
    $result->execute();
    $result->bindColumn(Gender,$gender); // we can also give seq no as per sql
    echo $gender;

-->

<?php 
    
   # creating a connection with database

   $db_name = "mysql:host=localhost;dbname=test";
   $username = "root";
   $password = "";
   
   # connection object

   $conn = new PDO($db_name, $username, $password);
   
   # setting attribute to visible errors in queries

   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

   # running sql queries

   $sql = "SELECT * FROM testtbl";
   $result = $conn->prepare($sql);
   $result->execute();
   $result->bindColumn('Name',$name);

   while ($row = $result->fetch()) {
      echo "$name<br>";
   }
   
    
?>