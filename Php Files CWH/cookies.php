<?php

    //What Is Cookies?

    // A cookie is a small file that the server embeds on the 
    // user's computer to identify him next time whenever we visit the website.


    // Cookies Syntax :
    
    // setcookie ( name , value ,expiration time , path = "") :

    setcookie('category' , 'book' , time() + 86400 , '/');
    echo "The cookie is set";
?>