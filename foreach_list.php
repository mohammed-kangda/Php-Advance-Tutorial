<!-- 
  
    list() prevents us from using nested loop in printing 
    multidimensional array.



-->

<?php

    # Index Array

    $arr = [
        [1,2],
        [3,4]
    ];

    // variable are taken as per the values in array
    // $a -> works for left value
    // $b -> works for right value
    foreach($arr as list($a,$b)){
        echo $a . $b  . '<br>';
    }



    $skill = [
        [1 , 'XYZ' , 'Wordpress'],
        [2 , 'Abc' , 'Laravel'],
        [3 , 'Oop' , 'Node Js']
    ];


    echo '<table border="1px" cellpadding="5px" cellspacing="2px">
             <tr>
                 <th>Id</th>
                 <th>Name</th>
                 <th>Skill</th>
             </tr>';

    foreach($skill as list($a,$b,$c)){
        echo "<tr>
                 <td>$a</td>
                 <td>$b</td>
                 <td>$c</td>
              </tr>";
    }

    echo '</table>';

    // using nested loop

    echo "<h2>Nested Loop</h2><br>";
    foreach($skill as $val){
        foreach($val as $inside){
            echo $inside . ' ';
        }
        echo '<br>';
    }


    # Associative Multi Dim Array
    echo "<h2>Associative Multi Dim Array</h2><br>";

    $emp = [
        ["id" => 1,"name" => "Abc","skill" => "Laravel","income" => 500000],
        ["id" => 2,"name" => "Xyz","skill" => "Wordpress","income" => 200000],
        ["id" => 3,"name" => "Oop","skill" => "Node Js","income" => 120000],
        ["id" => 4,"name" => "Mno","skill" => "Php","income" => 50000]
    ];


    echo '<table border="1px" cellpadding="5px" cellspacing="2px">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Skill</th>
                <th>Income</th>
           </tr>';

    foreach($emp as list("id" => $a, "name" => $b, "skill" => $c, "income" =>$d)){
        echo "<tr>
                <td>$a</td>
                <td>$b</td>
                <td>$c</td>
                <td>$d</td>
             </tr>";
    }
    echo '</table>';


    # using foreach loop
    
    echo "<h2>Using Foreach Loop</h2><br>";
    echo '<table border="1px" cellpadding="5px" cellspacing="2px">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Skill</th>
                <th>Income</th>
           </tr>';
    foreach($emp as $val){
        echo "<tr>";
        foreach($val as $value){
            echo "<td>$value</td>";          
        }
        echo "</tr>";
    }
    echo '</table>';

?>