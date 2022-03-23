<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
$planetsx = []  ;
for($i = 0 ; $i < count($planets) ; $i++){
    if( $planets[$i] !==  "" && $planets[$i] !== null){
        array_push($planetsx,$planets[$i]);
    }
}

$planets = $planetsx;

// print_r($planetsx);

// print_r($planets);


// $output = array_rand($planets,2);

// foreach($output as $key => $value){
//     print_r ($planets[$output[$key]]."<br>");
// }


function rnd($number){
    global $planets;
    $output = array_rand($planets,$number);
    echo "<pre>";
    foreach($output as $key => $value){
        print_r ($key."=>".$planets[$output[$key]]."<br>");
    }
    
    // for($i=0; $i < $planets.count; i++){
    //     echo $output[$i];
    // }
}

rnd(4);
?>
