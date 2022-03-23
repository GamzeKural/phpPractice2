<pre>
<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
unset($planets[8]);
unset($planets[9]);
unset($planets[10]);

// print_r($planets);


// $output = array_rand($planets,2);

// foreach($output as $key => $value){
//     print_r ($planets[$output[$key]]."<br>");
// }


function rnd($number){
    global $planets;
    $output = array_rand($planets,$number);
    foreach($output as $key => $value){
        print_r ($key."=>".$planets[$output[$key]]."<br>");
    }
    // for($i=0; $i < $planets.count; i++){
    //     echo $output[$i];
    // }
}

rnd(4);
?>
</pre>