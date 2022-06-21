<?php

    $marks = [
        "Krishna" => [
            "physics" => 85,
            "maths" => 78,
            "chemistry" => 89
        ],
        "Salman" => [
            "physics" => 68,
            "maths" => 73,
            "chemistry" => 79
        ],
        "Mohan" => [
            "physics" => 62,
            "maths" => 67,
            "chemistry" => 92
        ]
    ];

    echo "<pre>";
    print_r($marks);
    echo "</pre>";

    /* -------------Foreach Loop Array----------------- */

    foreach($marks as $key => $v1){
        echo $key;
        foreach($v1 as $v2){
           echo $v2 . " ";
        }
        echo "</br>";
    }

    /* ------------Print with Table tag-------------------- */

    echo "<table border='2px' cellpadding='5px' cellspacing='0'>
        <tr>
            <th>Student Name</th>
            <th>Physics</th>
            <th>Math</th>
            <th>Chemistry</th>
        </tr>";
    foreach($marks as $key => $v1){
    echo "<tr>
            <td>$key</td>";
            foreach($v1 as $v2){
                echo "<td> $v2 </td>";
            }
    echo "</tr>";
    }
    echo "</table>";

?>