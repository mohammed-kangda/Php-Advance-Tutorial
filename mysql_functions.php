<!-- 
 
    [1.] mysqli_fetch_assoc(); -> returns associative array from db records

    [2.] mysqli_fetch_array(); -> returns as 1st & 3rd function type.If we
                                  passed 2nd para. MYSQLI_ASSOC then it will
                                  show records as mysqli_fetch_assoc().
                                  if we want value to be visible as 
                                  mysqli_fetch_row() then we have to add
                                  para. MYSQLI_NUM. Default 2nd para. is
                                  MYSQLI_BOTH.

    [3.] mysqli_fetch_row(); -> same as 1st but to see db value we have to 
                               right 'keyname' instead of 'colName'.

    [4.] mysqli_fetch_all(); -> it will create multidim assoc array & fetch all 
                                records from the database(colname will be ind
                                -ex array so if we use MYSQLI_ASSOC as 2nd para then
                                it will return colname as mysqli_fetch_assoc())

    [5.] mysqli_fetch_field(); -> it will return colname and info related to column
                                  name if we want value without array form then we have
                                  to fetch using object 

-->

<?php 
    
    $conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");
    
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
    
    
    $row = mysqli_fetch_assoc($result);
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    
    echo $row['first_name']." ".$row['last_name']. "<br><br>";
    
     /*------------Fetch Associative -------------- */
    while($row = mysqli_fetch_assoc($result)){
        echo $row['first_name']." ".$row['last_name'] . "<br><br>";
    }
    
    /* ------------Fetch ROW -------------- */
    $row = mysqli_fetch_row($result);
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    
    echo $row[1] . " " . $row[2]. "<br>";
    
    while($row = mysqli_fetch_row($result)){
        echo $row['1']." ".$row['2'] . "<br>";
    } 
    
    
    /* ------------Fetch Array -------------- */
    $row = mysqli_fetch_array($result);
    echo "<pre>";
    print_r($row);
    echo "</pre>";
     
    echo $row[1] . " " . $row[2]. "<br>";
    
    echo $row["first_name"] . " " . $row["last_name"]. "<br>";
    
    
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    
    
    $row = mysqli_fetch_array($result,MYSQLI_NUM);
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    
    
    $row = mysqli_fetch_array($result,MYSQLI_BOTH);
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    
    /* ------------ Fetch All-------------- */
    $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    
    $row = mysqli_fetch_all($result,MYSQLI_NUM);
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    
    
    $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    foreach($row as $data) {
       echo $data['id']. " " .$data['first_name'] . $data['last_name'] . " ". "<br>";
    }
    
    
    
    /* ------------See the Columns information of Database Tables -------------- */
    $row = mysqli_fetch_field($result);
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    
    
    while ($fieldinfo = mysqli_fetch_field($result)) {
        echo "<pre>";
        print_r($fieldinfo);
        echo "</pre>";
    }
    
    /* ------------Only Works with Object Method -------------- */
    while ($fieldinfo = mysqli_fetch_field($result)) {
      echo $fieldinfo->name . "-". $fieldinfo->max_length . "<br>";
    }
       
?>

<!--

    mysqli_affected_rows(); -> return how many rows are affected     

-->

<?php

    /* -------Affected Rows-------*/
    $conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

    $sql = "SELECT * FROM students";

    $sql = "SELECT * FROM students WHERE last_name = 'Khan'";

    $sql = "UPDATE students SET last_name = 'Malik' WHERE last_name = 'Kapoor'";

    $sql = "DELETE FROM students WHERE id > 2";

    $result = mysqli_query($conn, $sql) or die("Query Failed");

    echo "Total rows: " . mysqli_affected_rows($conn);

?>


<!--

    Mysqli Error Function:
    
    mysqli_connect_error() -> used for connection error (show msg)
    mysqli_connect_errno() -> used for connection error (show errorno)
    mysqli_error()  -> used for query error msg
    mysqli_error_list(); -> return array(errorno, sql state no, errormsg)

-->

<?php 

    $conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");
    
    /* -------Mysqli Connect Error Function-------*/
        $conn = mysqli_connect("localhost1","root","","test") or die("Connection Failed: " . mysqli_connect_error());
    
    
    /* -------Mysqli Connect Errorno Function-------*/
        $conn = mysqli_connect("localhost","root","","test1") or die("Connection Failed: " . mysqli_connect_errno());
    
    $sql = "SELECT * FROM students";
    
    /* -------Check SQL Command Error Function-------*/
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful : " . mysqli_error($conn));
    
    
    /* -------Check SQL Command error with ERROR Number etc-------*/
     $sql = "SELECT * FROM students";
    
    $result = mysqli_query($conn, $sql);
    print_r(mysqli_error_list($conn));
    die();
    
    
    $str = "";
    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
        echo $row['first_name']." ".$row['last_name'] . "<br>";
      }
    }

?>