<?php


// The only difference is — the include() statement will only generate a PHP warning 
// but allow script execution to continue if the file to be included can't be found, 
// whereas the require() statement will generate a fatal error and stops the script execution.


include '_dbconnect.php';

// require '_dbconnect.php';
echo "hello";

?>