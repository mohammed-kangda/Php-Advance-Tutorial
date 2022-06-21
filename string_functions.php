<!-- 

    strtolower($str)
    strtoupper($str)
    lcfirst($str)
    ucfirst($str)
    ucwords($str);

-->

<?php 
    
    /*-------converts a string to Lowercase------- */
    $str = "MOHAMMED KANGDA";

    $newStr = strtolower($str);

    echo $newStr;
    echo '<br><br>';


    /*-------converts a string to Uppercase------- */

    $newStr1 = strtoupper($str);

    echo $newStr1;
    echo '<br><br>';


    /*-------Convert the first character of a string to lowercase: ------- */

    $newStr2 = lcfirst($str);

    echo $newStr2;
    echo '<br><br>';


    /*-------Converts the first character of a string to uppercase------- */

    $newStr3 = ucfirst($str);

    echo $newStr3;
    echo '<br><br>';


    /*-------Converts the first character of each word in a string to uppercase------- */

    $newStr4 = ucwords($str);

    echo $newStr4;
    echo '<br><br>';

?>

<!-- 

    strlen() -> counts string length (1..4.....10)

    str_word_count(str,return) -> return 0,1 or 2
    if 0 -> count word
    if 1 -> gives an array of words 
    if 2 -> return array with starting key 

    substr_count(str,search,start,end)

-->

<?php 
    
    /*-------String Length Function------- */
    $str = "Yahoo Baba";

    $newStr = strlen($str);

    echo '<pre>';
    print_r($newStr);
    echo '</pre>';

    /* -------- str_word_count -------- */
    $newStr = str_word_count($str);

    echo '<pre>';
    print_r($newStr);
    echo '</pre>';


    /* --------Return Array-------- */
    str_word_count($str,0);

    $array =  str_word_count($str,1);

    echo "<pre>";
    print_r($array);
    echo "</pre>";


    /* ---- Returns an array where the key is the position of the word in the string ---- */
    $array =  str_word_count($str,2);

    echo "<pre>";
    print_r($array);
    echo "</pre>";


    /*-------String Count Function------- */
    $count = substr_count("Hello world. The world is nice","world");

    echo "<pre>";
    print_r($count);
    echo "</pre>";


    $count = substr_count("Hello world. The world is nice","world",10);

    echo "<pre>";
    print_r($count);
    echo "</pre>";


    $count = substr_count("Hello world. The world is nice","world",1,20);

    echo "<pre>";
    print_r($count);
    echo "</pre>";


    $count = substr_count("Hello world. The world is nice","world",1,5); 

    echo "<pre>";
    print_r($count);
    echo "</pre>";
    
?>

<!-- 

    String Find Pos  -> start with 0

    # case-sensitive

    strpos(string,find,start) -> serach pos from starting
    strrpos(string,find,start) -> serach pos from ending

    # case-insensitive (PHP or php = same)

    stripos(string,find,start) -> serach pos from starting
    strripos(string,find,start) -> serach pos from ending

-->

<?php 
    
    /*-------strpos --- Find the position of the first occurrence------- */
    $str = "Hello world. The world is nice";

    $newStr = strpos($str, "world");

    echo '<pre>';
    print_r($newStr);
    echo '</pre>';
    
    $newStr = strpos($str, "world", 10);

    echo '<pre>';
    print_r($newStr);
    echo '</pre>';

    $newStr = strpos($str, "world", -20); //--- use negative start value (-1,-2,-3)

    echo '<pre>';
    print_r($newStr);
    echo '</pre>';

    /*------- strrpos --- Finds the position of the last occurrence------- */
    $newStr = "strrpos :" . strrpos($str, "world");

    echo '<pre>';
    print_r($newStr);
    echo '</pre>';

    /*------- stripos --- Find the position of the first occurrence------- */
    $newStr = "stripos :" . stripos($str, "WORLD");

    echo '<pre>';
    print_r($newStr);
    echo '</pre>';

    $newStr = "stripos :" . stripos($str, "WORLD", 5);

    echo '<pre>';
    print_r($newStr);
    echo '</pre>';

    /*------- strripos --- Finds the position of the last occurrence------- */
    $newStr = "strripos :" . strripos($str, "WORLD");

    echo '<pre>';
    print_r($newStr);
    echo '</pre>';

?>


<!-- 

    substr(string,start,length) -> used to extract some part from the string
    end not included

-->

<?php 
    
    /*-------String:Substring Function------- */
    $str = "Hello world. The world is nice";

    $newstr = substr($str, 5);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = substr($str, 22);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = substr($str, -10);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';
    
    $newstr =  substr($str, 0, 10);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr =  substr($str, 4, -2); // from front remove 4 & from back remove 2

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr =  substr($str, 10, -10);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';


    $newstr =  substr($str, -10, -3);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

?>

<!-- 

    chr(ASCII val) -> return Charcter of ASCII value
    ord(string) -> return ASCII value of 1st character

-->

<?php 
    
    /*-------decimal value------- */
    $str = chr(65); //---> 66 , 97
    echo $str. "<br><br>";

    /*-------Hexadecimal value------- */
    $str = chr(0x48);
    echo $str. "<br><br>";

    /*-------Octal value ------- */
    $str = chr(0120);
    echo $str. "<br><br>";

    /*-------ord Function------- */
    $str = ord("A");
    echo $str. "<br><br>";

    $str = ord("Apple");
    echo $str. "<br><br>";

    $str = ord("Hello");
    echo $str. "<br><br>";
    
?>

<!-- 

    strip_tags(string,allow) -> used to remove tags
    wordwrap(string,width,break,cut) -> used to break string , if cut->TRUE not given then
                                        it will break after space

-->

<?php 
    
    /*-------strip_tags Function------- */
    $str = "Hello <b>World</b>, Hello <i>Earth</i>";

    $newstr = strip_tags($str,'<b>');

    echo '<pre>';
    echo($newstr);
    echo '</pre>';

    /*------- Remove All Tags -------*/
    $newstr = strip_tags($str);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';


    /*-------Wordwrap Function------- */
    $str = "This world is beautiful.";

    $newstr = wordwrap($str,4);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';
    
    $newstr = wordwrap($str,5,"<br>",TRUE);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

?>

<!-- 

   strrev(string);
   str_shuffle(string);

-->

<?php 
    
    /*-------String Reverse Function------- */
    $newstr =  strrev("Wordpress");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------String Shuffle Function------- */
    $newstr =  str_shuffle("Wordpress");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';
    
?>

<!-- 
 
    used mostly in form fields to remove unnesary char or spaces

    trim(string,charlist) -> removes char from first or last only
    rtrim(string,charlist)
    ltrim(string,charlist)
    chop(string,charlist)

-->

<?php 
    
    /*-------String Trim Function------- */
    $str = "Wordpress";

    echo '<pre>';
    print_r($str);
    echo '</pre>';

    $newstr = trim($str,"s");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = trim($str,"r"); //-- no effect

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = trim($str,"Wo");

    echo '<pre>';
    echo $newstr;
    echo '</pre>';
    

    /*-------String Left & Right Trim Function------- */
    $newstr = rtrim($str,"s");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    
    $newstr = ltrim($str,"Wr");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';
    
   /*-------String Remove Trim Function------- */
    $str = "   Wordpress   ";

    $newstr = trim($str);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = ltrim($str);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------String Chop Trim Function-- work same as rtrim------- */
    $str = "Wordpress";
    $newstr =  chop($str, "rss");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr =  chop($str, "pres");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';
   
?>

<!-- 

    addslashes(string) -> prevents hacking and destroy sql injection eg. \'Hello\' (use->DB)
    stripslashes(string) -> removes slashes(use->users)

    addcslashes(string,characters) -> used to add slash before single or multiple characters
    stripslashes(string) -> removes slashes

-->

<?php 
    
    /*-------String Addslashes Function------- */
    $str = "Hello I am 'Mohammed Kangda'";

    echo '<pre>';
    print_r($str);
    echo '</pre>';
    
    $newstr = addslashes($str); #db

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------Remove slashes which is added by addslashes function------- */
    $newstr = stripslashes($str); #users

    echo '<pre>';
    print_r($str);
    echo '</pre>';

    /*-------String Addcslashes Function------- */
    $str = "Hello World!";

    $newstr = addcslashes($str, "W");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------String Addcslashes Function------- */
    $newstr = addcslashes($str, "Wl"); # traget multiple string char

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------String Multiple Characters Addcslashes Function------- */
    $newstr =  addcslashes($str,'A..Z');

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------String stripcslashes Function------- */
    $newstr =  stripcslashes($newstr);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';
?>

<!-- 

    # string Relace functions:

    str_replace(find,replace,string) -> case-sensitive
    str_ireplace() -> case-insensitive
    strtr(str,from,to) -> used to replace characters / strtr(string, assoc.array)
    substr_replace(string,replacement,start,length) -> used when we want to replace words in que

-->

<?php 
    
    /*-------String:Replace Function------- */
    $str = "Hello world. The world is nice";

    $newstr = str_replace("world","earth",$str);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*------- Find Array------- */
    $find = ["Hello", "world"];
    $replace = ["Hi", "earth"];

    $newstr = str_replace($find,$replace,$str);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------Replace in array ------- */
    $color = ["blue","red","green","yellow"];

    echo "<pre>";
    print_r(str_replace("red","pink",$color));
    echo "</pre>";

    /*-------str_ireplace------- */
    $newstr = str_replace("WORLD","earth",$str);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------substr_replace ------- */
    $str = "Hello world. The world is nice";

    $newstr = substr_replace($str, "earth", 6);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr =  substr_replace($str, "earth", 6 , 10);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr =  substr_replace($str, "earth", 6 , -5);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = substr_replace($str, "earth ", 0 , 0); //--- add in starting

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';


    /*-------strtr ------- */
    $str = "Hello world. The world is nice";

    $newstr = strtr($str,"eo","ia");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------Multiple Replace Array------- */
    $array = array("Hello" => "Hi", "world" => "earth");

    $newstr = strtr($str,$array);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';
    
?>