<?php


// *fgets():  --> Reading a file line by line


$fptr = fopen('mytext.txt','r');

//   echo fgets($fptr);
//   echo "<br>";
//   echo fgets($fptr);
//   echo "<br>";
//   echo fgets($fptr);

// using while loop:

// while($a=fgets($fptr)){
//     echo $a;
//     echo "<br>";
// } 
// echo("File Is Ended.");  


// *fgetc():  --> Reading a file character by character


//   echo fgetc($fptr);

// while($b=fgetc($fptr)){
//     echo $b;
//     echo '<br>';
// }

while ($b=fgetc($fptr)) {
    echo $b;
    echo '<br>';
   if($b == '.'){
       break;
   }
}

 fclose($fptr);
?>