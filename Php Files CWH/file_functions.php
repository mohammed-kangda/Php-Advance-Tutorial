<?php


// fopen():  --> open & read the file

$fptr = fopen('mytext.txt', 'r');
echo $fptr. "<br>";
echo var_dump($fptr);
echo "<br>";

if(!$fptr){
    die("Unable to open this file.Please enter a valid filename <br>");
}


// fread():   --> read the content of an open file

$content = fread($fptr,filesize('mytext.txt'));
echo $content;
echo "<br>";
echo var_dump($content);
echo "<br>";


// fclose():  --> closes an open file

$clos = fclose($fptr);
echo $clos;
echo var_dump($clos);
echo "<br>";

?>