<?php


// Writing to a file in PHP:

$fptr = fopen('myfile2.txt','w');
fwrite($fptr , 'First Line ');              // fwrite(in which file , what to write)
fwrite($fptr , 'Second Line ');
fwrite($fptr , 'Third Line ');
fclose($fptr);


// Appending to a file in PHP(overwrites):

$fptr = fopen('myfile2.txt','a');
fwrite($fptr , 'A1 line  ');
fwrite($fptr , 'A2 line  ');
fwrite($fptr , 'A3 line  ');
fwrite($fptr , 'A4 line  ');
fwrite($fptr , 'A5 line  ');
fclose($fptr);
?>