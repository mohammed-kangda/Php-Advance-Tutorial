<!-- 

    count(arr_name,MOD 0,1),sizeof(arr_name,MOD 0,1) and array_count_values() functions are used to count the 
    elements of the array

    count(arr_name,MOD 0,1);   ->  count values
    sizeof(arr_name,MOD 0,1);  ->  count values
    array_count_values(arr_name);  -> returns an array by counting values

-->


<?php 
    
    $food = array('orange', 'banana', 'apple');

    echo count($food).'<br>'; /*  ----- IInd parameter is MODE (0 or 1) */
    
    # multidim associative array

    $food1 = [
        'fruits' => ['orange', 'banana', 'apple'],
        'veggie' => ['carrot', 'collard', 'pea']
    ];

    echo count($food1,1) . '<br>';  // 8
    echo sizeof($food1,1) . '<br>'; // 8
    echo "<pre>";
    print_r(array_count_values($food));
    echo "</pre>";

?>


<!-- 
   in_array(value,arr_name)  -> returns 0 / 1
   array_search(value,arr_name) -> returns index / key
-->


<?php 

    # in_array():

     
    $food2 = array('orange', 'banana', '55', 'grapes');
    echo in_array("lime", $food2); // 0
  
    /* ---- If Condition InArray------ */
    if (in_array(55, $food2)) {
        echo "Find Successfully.<br>";  //
    }else{
        echo "Can't Find.<br>";	
    }

    if (in_array(55, $food2, true)) {
        echo "Find Successfully.<br>";
    }else{
        echo "Can't Find.<br>";	// find exactly if used true -> strict mode
    }
    

    /* --------Multipledimensional Associative Array------------- */
    $a = array(array('p', 'h'), array('p', 'r'), 'o');

    if (in_array(array('p', 'h'), $a)){
        echo "Find Successfully.<br>";
    }else{
        echo "Can't Find.<br>";
    }
    

    # array_search()

    echo array_search("orange", $food2); // 0    if not then no output

    
    /* -----------Associative Array-------------- */
    $foodie = array('a' => 'orange', 'b' => 'banana', 'c' => 'apple', 'd' => 'grapes');

    echo array_search("apple", $foodie);  // c

    echo in_array("apple", $foodie);  // 1
    
?>



<!--

    array_replace(arr_name,rep_arr_name);
    array_replace_recursive();

    Both creates new array then replace

-->

<?php 
    
    # array_replace()

    $fru = ['orange', 'banana', 'apple', 'grapes'];
    $veg = ['carrot', 'pea','cabbage','onion'];
    
    $newArray = array_replace($fru, $veg); 
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    $color = ['red', 'green', 'blue'];

    $newArr = array_replace($fru, $veg, $color);
    echo "<pre>";
    print_r($newArr);  // red,green,blue,onion
    echo "</pre>";


    $fr = ['orange','banana','a'=>'apple','grapes'];
    $ve = ['a'=>'carrot', 0=>'pea'];
    $newArray = array_replace($fr, $ve);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";


    # array_replace_recursive();
    
    /* ---- array_replace_recursive----------- */

    $ar1 = ["a"=>["red"],"b"=>["green","pink"]];

    $ar2 = ["a"=>["yellow"],"b"=>["black"]];

    $newArrays = array_replace_recursive($ar1, $ar2);
    echo "<pre>";
    print_r($newArrays);
    echo "</pre>";

?>



<!-- 

    array_pop(array_name)  -> delete last value of the array
    array_push(array_name,val_name)

-->

<?php 
    
    /* --------- Delete from End------- */
    $ft = ["orange", "banana", "apple", "grapes"];

    array_pop($ft);

    echo "<pre>";
    print_r($ft);
    echo "</pre>";
    

    /* --------- Add on Ending on the Array---------- */
    $fts = ["orange", "banana", "grapes"];

    array_push($fts,"apple","guava","lemon");

    echo "<pre>";
    print_r($fts);
    echo "</pre>";

?>

<!-- 

    array_shift()  -> removes first element from the array
    array_unshift() -> adds value in the starting of the array 

-->

<?php

    /*------ Delete from Start------ */
    $arrShift = ["orange", "banana", "grapes"];

    array_shift($arrShift);

    echo "<pre>";
    print_r($arrShift);
    echo "</pre>";


    /*------- Add on starting on the Array------ */
    $arrUnshift = ["orange", "banana", "grapes"];

    array_unshift($arrUnshift,"Apple", "guava", "lemon");

    echo "<pre>";
    print_r($arrUnshift);
    echo "</pre>";
    
?>


<!-- 
    # return new array

    array_merge()  -> used with index/assoc array (replace same key)
    array_merge_recursive() -> used with multidim assoc array.it works like
                               array_merge but makes internal assoc array of the 
                               same key
    array_combine() -> used with index array. It makes key of first array
                       and make value of 2nd array.must contain same values 
                       of 2 arrays 

-->

<?php 
    
    /* Multiple Array Merge - index*/
    $a1 = ["orange", "banana", "grapes"];
    $a2 = ['carrot', 'pea'];
    $a3 = ['blue','green'];

    $newArra = array_merge($a1,$a2,$a3);

    echo "<pre>";
    print_r($newArra);
    echo "</pre>";

    $x1 = ['a'=>'apple','b'=>'banana'];
    $x2 = ['watermelon']; // store index as key

    $new1 = array_merge($x1,$x2);

    echo "<pre>";
    print_r($new1);
    echo "</pre>";
    
    $y1 = ['a'=>'apple','b'=>'banana']; // replace b with water
    $y2 = ['b'=>'water','e'=>'mango'];

    $new1 = array_merge($y1,$y2);

    echo "<pre>";
    print_r($new1);
    echo "</pre>";

    
    /* ---------if u want the duplicate key entry of first array---------- */
    echo"some";
    $new1 = $y1 + $y2;  // ignore duplicate of 2nd key
    echo "<pre>";
    print_r($new1);
    echo "</pre>";

    /* ----------array_merge_recursive-------------- */
    $new1 = array_merge_recursive($y1,$y2);

    echo "<pre>";
    print_r($new1);
    echo "</pre>";

    /* ---- more complex multidim array ----*/
    $veggiesd = ['b' => ['color' => ['red','blue','green']],  
            'e' => 'pea',
            55,
            68
          ];

    $newArray = array_merge_recursive($y1,$veggiesd);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";


    $sk1 = ['Mohammed','Aamir'];
    $sk2 = ['Wordpress','Shopify'];
    
    $newArray = array_combine($sk1,$sk2);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
?>


<!-- 

    array_slice(arr_name,start_val,how_much)

-->

<?php 
    
    /*------ Array Slice ------*/
    $color=array("red","green","blue","yellow","brown");

    $newArray = array_slice($color, 1, 2);

    echo "<pre>";
    print_r($newArray);  // green,blue
    echo "</pre>";
    
    
    /* -------------with Negative Index---------- */
    echo "<pre>";
    print_r(array_slice($color,-2,1));  // yellow
    echo "</pre>";
    echo '<br>';
    
    /* ---------Preserve Parameter----------- */
    echo "<pre>";
    print_r(array_slice($color,1,2,true));  // show real index
    echo "</pre>";
    echo '<br>';

    /* ----------Preserve Parameter With Associative Array ------------ */
    $color = array('a'=>'red', 'b'=>'green', '42'=>'blue', 'd'=>'yellow');

    echo "<pre>";
    print_r(array_slice($color, 0, 3));
    echo "</pre>";
    echo '<br>';
    array_slice($color, 0, 3, true);
    echo '<br>';

    /* -------------Preserve Parameter - III-------------- */
    $a = array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"brown");
    echo "<pre>";
    print_r(array_slice($a,1,2));
    echo "<pre>";

?>


<!-- 

   array_splice(array,start,length,array2) -> adds new items to an array.

   It doesn't creates new array does changes in existing array only

-->

<?php 
    
    /*------ Array Splice ------*/
    $color =["red","green","blue","yellow","brown"]; 

    // echo "<pre>";
    // array_splice($color,1);
    // print_r($color);  // red
    // echo "</pre>";

    echo "<pre>";
    array_splice($color,1,-2); // red,yekllow,brown
    print_r($color);
    echo "</pre>";

    /*---------Adding Values------*/
    $color1 =["red","green","blue","yellow","brown"]; 
    $color2 =["orange","grey"];

    array_splice($color1,0,2,$color2);
    echo "<pre>";
    print_r($color1); // "orange","grey","blue","yellow","brown"
    echo "</pre>";

    
?>



<!-- 
    
    // returns new array

    array_keys();
    array_key_first();
    array_key_last();
    array_key_exists(keyname,arr_name);
    key_exists();
    
-->


<?php 
    
    /*-------- array_keys--------*/
    $color =["red","green","blue","yellow"];

    $newArray = array_keys($color);

    echo '<pre>';
    print_r($newArray);
    echo '</pre>';
    

    /* --------With Associative Array --------- */
    $color1 =[
            "first" =>"red",
            "second" =>"green",
            "third" =>"blue",
            "fourth" =>"yellow"
            ];
            
    $newArray1 = array_keys($color1);

    echo '<pre>';
    print_r($newArray1);
    echo '</pre>';

    /* ---------Comes in 7.3---------- */ 
    $newArray1 = array_key_first($color1);

    echo '<pre>';
    print_r($newArray1);
    echo '</pre>';


    /* ---------Comes in 7.3----------- */	
    $newArray1 = array_key_last($color1);

    echo '<pre>';
    print_r($newArray1);
    echo '</pre>';

    /* ------array_key_exists--------- */
    $newArray1 = array_key_exists("third", $color1);

    echo '<pre>';
    print_r($newArray1);  // returns 1 if found & empty if not found
    echo '</pre>';

    $newArray1 =  array_key_exists("six", $color);
    echo '<pre>';
    print_r($newArray1);
    echo '</pre>';

    /* -------array_key_exists short name key)exists-------- */
    $newArray1 = key_exists("second", $color1);

    echo '<pre>';
    print_r($newArray1);
    echo '</pre>';


    /* ---------check result with if condition----------- */
    if($newArray1){
       echo "Key exists!";
    }else{
       echo "Key does not exist!";
    }

?>


<!-- 
    
 
    array_values();
    array_unique();

-->
 
<?php 
    
    /* ------------Array Values------------ */
    $a1 = array("a"=>"red","b"=>"green","c"=>"red","d"=>"yellow");

    $newArray = array_values($a1);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
    

    /* ---------Array Unique---------*/
    $newArray1 = array_unique($a1);

    echo "<pre>";
    print_r($newArray1);
    echo "</pre>";

?>


<!-- 
  
    array_column(array,key_name) -> makes array of given key name from multidim array
    array_chunk(array,size); -> makes multidim assoc array from simple array

-->


<?php 
    
    /*------------Array_Column------------ */
    $array = array(
        array(
            'id' => 2201,
            'first_name' => 'Anil',
            'last_name' => 'Kapoor',
        ),
        array(
            'id' => 2202,
            'first_name' => 'Salman',
            'last_name' => 'Khan',
        ),
        array(
            'id' => 2203,
            'first_name' => 'John',
            'last_name' => 'Abraham',
        )
    );

    $newArray = array_column($array,'first_name');

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";


    /* ------With 3rd Parameter as a key & 2nd parameter as value------ */

    $newArray1 = array_column($array,'first_name','id');

    echo "<pre>";
    print_r($newArray1);
    echo "</pre>";


    $cars = ["Volvo","BMW","Toyota","Honda","Mercedes","Opel"];

    $newArray2 = array_chunk($cars,3);

    echo "<pre>";
    print_r($newArray2);
    echo "</pre>";


    $age = array(
        "Abc" => "35",
        "Xyz" => "37",
        "Oop" => "43",
        "Proc" => "25" );

    $newArray3 = array_chunk($age,1,true);

    echo "<pre>";
    print_r($newArray3);
    echo "</pre>";
    
?>


<!-- 

    array_flip(array,case); -> flip value to key / returns new array
    array_change_key_case(array,case); -> doesn't return new array

-->

<?php 
    
    /*--------Array Flip---------*/
    $a = array(
        "Bill" =>10,
        "Joe" => 20,
        "Peter" => 30
    );

    $newArray = array_flip($a);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    /* -----array_change_key_case----- */
    $newArray2 = array_change_key_case($a);

    echo "<pre>";
    print_r($newArray2);
    echo "</pre>";

    /* -----array_change_key_case----- */
    $newArray2 = array_change_key_case($a);

    echo "<pre>";
    print_r($newArray2);
    echo "</pre>";

    /* --------CASE_UPPER or CASE_LOWER-------- */
    $newArray3 = array_change_key_case($a, CASE_UPPER);

    echo "<pre>";
    print_r($newArray3);
    echo "</pre>";
    
?>


<!-- 

    array_sum();
    array_product();

-->

<?php 
    
    
    $a1 = array(2, 4, 6, 8);

    $a2 = array("a" => 1.2, "b" => 2.3, "c" => 3.4);

    /*------------Array Sum------------ */
    echo "Sum of a1 = " . array_sum($a1). '<br><br>';

    echo "Sum of a2 = " . array_sum($a2). '<br><br>';

    /*------------Array Product------------ */
    echo "Product of a1 = " . array_product($a1). '<br><br>';
    echo "Product of a2 = " . array_product($a2). '<br><br>';

?>


<!-- 
    // returns new array
    array_rand(array,number) -> return random default val from arrays
    array_shuffle() -> changes arrays values position

-->

<?php 
    
    /*------------Array Rand------------ */
    $color = array("red","green","blue","yellow","brown");

    $newArray = array_rand($color);

    echo "<pre>";
    print_r($newArray); // return index
    echo "</pre>";

    echo $color[$newArray]."<br><br>"; 
    
    /*------------ IInd Parameter -- as a Number------------ */

    $newArray1 = array_rand($color, 2);

    echo "<pre>";
    print_r($newArray1); // return index -> creates multidim asscoc arrays
    echo "</pre>";

    echo $color[$newArray1[0]]."<br>";
    echo $color[$newArray1[1]]."<br>";


    /*------------Use with Associative Array------------ */

    $color1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

    $newArray2 = array_rand($color1, 2);

    echo "<pre>";
    print_r($newArray2);
    echo "</pre>";

    echo $color1[$newArray2[0]]."<br>";
    echo $color1[$newArray2[1]]."<br>";


    /*------------Shuffle Array------------ */

    $color2 = array("red","green","blue","yellow","brown");

    shuffle($color2);

    echo "<pre>";
    print_r($color2);
    echo "</pre>";


    /*------------Shuffle Use With Associative Array------------ */

    $color3 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

    shuffle($color3);

    echo "<pre>";
    print_r($color3);
    echo "</pre>";
    
?>

<!-- 

    array_fill(index,number,value) -> helps to create an array with static val
    array_fill_keys(array,value) -> helps to convert index arr to multidim ass arr

-->

<?php 
    
    /* -----------Array Fill Keys----------- */
    $a = array("a","b","c","d",5);

    $newArray = array_fill_keys($a, "Testing");

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    /* -----------Array Fill----------- */
    $newArray1 = array_fill(0, 4, "Testing");

    echo "<pre>";
    print_r($newArray1);
    echo "</pre>";
    
?>


<!-- 

    array_walk(array,func,param) -> for every key-value when we want to run fun then this 
                                   func is used.This func doesn't work with multidim assoc 
                                   array.
    array_walk_recursive(array,func,param) -> specialiy for multidim assoc array

-->

<?php 
    
    /* -------Array Walk-------*/
    $fruits = array(
        "a" => "Lemon",
        "b" => "Orange",
        "c" => "Banana",
        "d" => "Apple"
    );

    array_walk($fruits, "myFunction","is a key of");

    function myFunction($value, $key, $param){
        echo "$key $param $value <br><br>"; // works for every key-value (foreach)
    }

    echo "<br><br>";

    /* -------array_walk_recursive-------*/

    $veggie = array( "1" => "Carrot", "2" => "Tomatoes");

    $fruits1 = array(
                $veggie,
                "a" => "Lemon",
                "b" => "Orange",
                "c" => "Banana",
                "d" => "Apple"
            );

    array_walk_recursive($fruits1, "myFunction1", "is a key of");

    function myFunction1($value, $key, $param){
        echo "$key $param $value <br><br>"; // works for every key-value (foreach)
    }

?>
    

<!-- 

    list() -> works only with index array and associative array with numeric key.
            we can store arrayvalue in variable in just 1 line using list()
 
-->

<?php 
    
    /*-------Array List Function------- */
    $color = array('red', 'green', 'blue');

    list($a , $b, $c) = $color;

    echo "Value of a : $a <br>";
    echo "Value of b : $b <br>";
    echo "Value of c : $c <br>";
    echo "<br><br>";

    /*-----using traditional method-----*/

    $x = $color[0];
    $y = $color[1];
    $z  = $color[2];

    echo "Value of x : $x <br>";
    echo "Value of y : $y <br>";
    echo "Value of z : $z <br>";
    echo "<br><br>";

    /*-------Array Numberic Value------- */
    $color1 = array(22,55,33);

    list($n1 , $n2, $n3) = $color1;

    echo "Value of n1 : $n1 <br>";
    echo "Value of n2 : $n2 <br>";
    echo "Value of n3 : $n3 <br>";
    echo "<br><br>";

    /*------- Remove Variable------- */

    list($a , , $c) = $color1;

    echo "Value of a : $a <br>";
    echo "Value of c : $c <br>";
    echo "<br><br>";

    /*-------Only works with Numeric Index------- */

    $color2 = array(0 => 'red', 1 => 'green', 2 => 'blue');

    list($a , $b , $c) = $color2;

    echo "Value of a : $a <br>";
    echo "Value of b : $b <br>";
    echo "Value of c : $c <br>";
    echo "<br><br>";

    /*-------All values in One Array------- */

    list($d[0], $d[1], $d[2]) = $color2;

    echo "Value of a : $d[0] <br>";
    echo "Value of b : $d[1] <br>";
    echo "Value of c : $d[2] <br>";
    echo "<br><br>";
    
?>

<!-- 

    explode(separtar, string, limit) -> converts string to array
    implode(separtar,array) -> convert array value to string / also known as join()

-->

<?php 
    
    /*-------Explode Function------- */

    $str = "Hello world. It's a beautiful day";

    $array = explode(" ",$str);

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    $array1 = explode(".",$str);

    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    /*-------Using Limit with explode ------- */

    $array2 = explode(" ",$str, 2);

    echo "<pre>";
    print_r($array2);
    echo "</pre>";


    $array3 = explode(" ",$str, 0); //-- Return in one Array Value

    echo "<pre>";
    print_r($array3);
    echo "</pre>";

    $array4 = explode(" ",$str, -2);

    echo "<pre>";
    print_r($array4);
    echo "</pre>";


    /*----------- Another example -----------*/

    //EXAMPLE I

    $str1 = 'red,green,blue,orange';

    $array5 = explode(",",$str1);

    echo "<pre>";
    print_r($array5);
    echo "</pre>";

    //EXAMPLE II

    $str2 = 'red,green-blue-orange';

    $array6 = explode(",",$str2);

    echo "<pre>";
    print_r($array6);
    echo "</pre>";

    //EXAMPLE III

    $array7 = explode("-",$str2);

    echo "<pre>";
    print_r($array7);
    echo "</pre>";


    /*-------Implode Function------- */

    $arr = array('Hello','World!','Beautiful','Day!');

    $strr = implode(" ",$arr);

    echo $strr;
    echo '<br><br>';

    
    //EMAXPLE 2

    $strr1 = implode("-",$arr);

    echo $strr1;
    echo '<br><br>';

    //EMAXPLE 3

    $strr2 = implode(",",$arr);

    echo $strr2;
    echo '<br><br>';

    //EMAXPLE 4

    $strr3 = implode("wow",$arr);

    echo $strr3;
    echo '<br><br>';

    //EMAXPLE 5

    //You can use (Join) function work same as Implode

    $strr5 = join("<br>",$arr);

    echo $strr5;
    echo '<br><br>';
   
?>

<!-- 

    range(start,end,step) -> used to print numbers or alphabet in range

-->

<?php 
    
    /*-------Array Range Function------- */

    $newArray = range(0, 10);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    /*-------Using step------- */

    $newArray1 = range(0, 100, 10);

    echo "<pre>";
    print_r($newArray1);
    echo "</pre>";
    
    /*-------Using Alphabet------- */

    $newArray2 = range('a', 'h');

    echo "<pre>";
    print_r($newArray2);
    echo "</pre>";

    //OR

    $newArray3 = range('h', 'a');

    echo "<pre>";
    print_r($newArray3);
    echo "</pre>";

    /*-------Foreach Array Range Function------- */

    foreach (range('h', 'a') as $letter) {
        echo $letter . "<br>";
    }
?>


<!-- 

    extract(array,extract_rules,prefix) -> it is used to converts key into variable

    extract_rules:

    EXTR_OVERWRITE -> overwrite array key (by default & shows only arr keys)
    EXTR_SKIP  -> skips array value and keys
    EXTR_PREFIX_SAME -> extract(array,EXTR_PREFIX_SAME,'test') show arraykey
    EXTR_PREFIX_ALL -> for arr key compulsory we have to use prefix



    compact -> used to convert variables into assoc array
-->

<?php 


    /*-------Array Extract Function------- */

    $a = "orange";

    $color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');

    extract($color);

    echo "Value of a : $a <br>";
    echo "Value of b : $b <br>";
    echo "Value of c : $c <br>";
    echo '<br><br>';
        
    /*-------Extract_rules------- */


    //EXTR_OVERWRITE

    extract($color,EXTR_OVERWRITE);

    echo "Value of a : $a <br>";
    echo "Value of b : $b <br>";
    echo "Value of c : $c <br>";
    echo '<br><br>';


    //EXTR_SKIP

    $a1 = "orange";
    $color = array('a1' => 'red', 'b1' => 'green', 'c1' => 'blue');

    extract($color,EXTR_SKIP);

    echo "Value of a1 : $a1 <br>"; // orange
    echo "Value of b1 : $b1 <br>"; // green
    echo "Value of c1 : $c1 <br>"; // blue
    echo '<br><br>';


    //EXTR_PREFIX_SAME  ;

    extract($color,EXTR_PREFIX_SAME,"test");

    echo "Value of a1 : $a1 <br>";      // orange 
    echo "Value of a1 : $test_a1 <br>"; // red 
    echo "Value of b1 : $b1 <br>";      // green
    echo "Value of c1 : $c1 <br>";      // blue
    echo '<br><br>';

    //EXTR_PREFIX_ALL

    extract($color,EXTR_PREFIX_ALL,"test");

    echo "Value of a1 : $a1 <br>";
    echo "Value of a1 : $test_a1 <br>";
    echo "Value of b1 : $test_b1 <br>";
    echo "Value of c1 : $test_c1 <br>";
    echo '<br><br>';


    /*-------Compact Function------- */

    $firstname = "MK";
    $lastname = "Memon";
    $age = "20";
    $gender = "Male";
    $country = "India";

    $newArray = compact("firstname", "lastname", "age");

    echo '<pre>';
    print_r($newArray);
    echo '</pre>';


    /*-------Use extra array in compact function------- */

    $extra = ["gender" , "country"];

    $newArray1 = compact("firstname", "lastname", "age",$extra);

    echo '<pre>';
    print_r($newArray1);
    echo '</pre>';

?>


<!-- 

    Array Sorting Functions:

    sort
    rsort
    arsort
    asort
    krsort
    ksort
    natcasesort
    natsort
    array_multisort
    array_reverse

-->


<?php 
    
    /*-------Array Sorting Function------- */
    $food = array('orange', 'banana', 'grapes', 'apple');

    sort($food); //Sorting 

    echo "<pre>";
    print_r($food);
    echo "</pre>";

    // Reverse
    rsort($food);  

    echo "<pre>";
    print_r($food);
    echo "</pre>";
    
    // Reversing ass array
    $food2 = array(
                   "d" => "lemon",
                   "a" => "orange",
                   "b" => "banana",
                   "c" => "apple"
                );

    asort($food2); //---- maintain also index 
    echo "<pre>";
    print_r($food2);
    echo "</pre>";

    arsort($food2);
    echo "<pre>";
    print_r($food2);
    echo "</pre>";

    sort($food2);
    echo "<pre>";
    print_r($food2);
    echo "</pre>";

    // key sorting

    ksort($food2);
    echo "<pre>";
    print_r($food2);
    echo "</pre>";

    krsort($food2); // Key Reverse Sort

    echo "<pre>";
    print_r($food2);
    echo "</pre>";


    /*--------- natsort --- Natural Order Sort --- algorithm ------- */

    $array1 = array("img12.png", "img10.png", "img2.png", "img1.png");

    natsort($array1);

    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    /*--------- natcasesort() - case incentive "natural order" algorithm ------- */
    $array2 = array("Img12.png", "Img10.png", "img2.png", "img1.png");

    natcasesort($array2);

    echo "<pre>";
    print_r($array2);
    echo "</pre>";


    /*-------array_multisort  --- not create new array------- */

    $foods = array("orange","banana");
    $veggie = array("lemon","carrot");

    array_multisort($foods,$veggie);

    echo "<pre>";
    print_r($foods);
    echo "</pre>";

    echo "<pre>";
    print_r($veggie);
    echo "</pre>";


    /*-------array_reverse------- */

    $foods1 = array("orange","banana","apple","grapes");

    $newArray = array_reverse($foods1);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

?>


<!-- 

    array_reduce() -> helps to convert diff array val into single string

-->

<?php 
    
    /* -------Array Reduce-------*/
    function myFunctions($n,$m){   
        return $n . "-" . $m;
    }
    
    $a = ['orange', 'banana', 'apple'];
    
    $newArray = array_reduce($a, 'myFunctions');
    
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
    
    
    /* -------Passing third parameter as a Initial Value -------*/
    
    $newArray1 = array_reduce($a, 'myFunctions', "lemon");
    
    echo "<pre>";
    print_r($newArray1);
    echo "</pre>";
    
    // OR
    
    $newArray2 = array_reduce($a, 'myFunctions', 20);
    
    echo "<pre>";
    print_r($newArray2);
    echo "</pre>";
  
    /* -------Use Numeric Index array-------*/

    $a1 = [1, 2, 3, 4, 5];

    $newArray3 = array_reduce($a1, 'myFunctions', 20);

    echo "<pre>";
    print_r($newArray3);
    echo "</pre>";

    // SUM

    function myFunc($n,$m){   
        return $n + $m;
    }

    $newArray4 = array_reduce($a1, 'myFunc');

    echo "<pre>";
    print_r($newArray4);
    echo "</pre>";

    //Multiplication 

    function myFunction2($n,$m){   
        return $n * $m;
    }
  
    $newArray5 = array_reduce($a1, 'myFunction2');
  
    echo "<pre>";
    print_r($newArray5);
    echo "</pre>";


    /* -------Pass third Initial Parameter-------*/

    $newArray6 = array_reduce($a1, 'myFunction2',10);

    echo "<pre>";
    print_r($newArray6);
    echo "</pre>";


    // Additon
    /* -------Can also right -------*/

    function myFunction3($n,$m){  
        //$n =$n + $m; 
        $n += $m;
        return $n;
    }

    $newArray7 = array_reduce($a1, 'myFunction3',10);

    echo "<pre>";
    print_r($newArray7);
    echo "</pre>";
    
?>