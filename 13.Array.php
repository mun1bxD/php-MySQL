<?php
    //array declaration
    $Student=array("steve","jerry","harry");

    for($i=0;$i<sizeof($Student);$i++){
        echo "Student Name: ".$Student[$i]."<br>";
    }

    //hash maps or associative array
    $std_id=array("steve"=>234332,"jerry"=>253667,"harry"=>165446);

    echo "ID of jerry ".$std_id["jerry"]."<br>";


    //2 dimensional array
    
    $employees = array(
        array("John", "Doe", 28),
        array("Jane", "Doe", 25),
        array("James", "Smith", 30)
    );

    echo "Value at index [2][1]".$employees[2][1]."<br>";

    //mixed array
    $Array=array(
        "Name"=>23,
        23=>"this is number 23",
        "Number"=>10,
        "Correct"=>true
    );

    echo "Array index 1 value ".$Array[23]."<br>";
    echo "Array index 3 value ".$Array["Correct"]."<br>";

?>