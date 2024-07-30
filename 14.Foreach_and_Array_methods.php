<?php
    $Array=array(2,3,5);

    echo "Array:";
    
    foreach($Array as $i){
        echo $i.", ";
    }
    echo "<br>";
    $Array2=array("Key1"=>23142,"Key2"=>23142,"Key3"=>23142);

    foreach($Array2 as $key=>$value){
        echo "Key {$key}, Value {$value}"."<br>";
    }

    array_push($Array,2);//adding 2
    array_push($Array,2,4,5,6);// adding 2 4 5 6

    array_unshift($Array,5); //adding 5 to start

    array_pop($Array);//remove from last
    array_shift($Array);//remove and retrn first element

    sort($Array);    //sort value in asending order
    rsort($Array); //sort element in  desending order

    ksort($Array2); //sort element by key

    // Reduce array to a single value using a callback function
    $sum = array_reduce([1, 2, 3, 4, 5], function($carry, $item) {
    return $carry + $item;
    }, 0);

    echo "Sum".$sum;


?>