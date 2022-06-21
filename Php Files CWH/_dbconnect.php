<?php

  //connecting database :

  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'kangdadb';

  $connect = mysqli_connect($servername , $username , $password , $database);

  if (!$connect){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was successful<br>";
 }

?>