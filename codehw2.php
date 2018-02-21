<!DOCTYPE html>


<html>



<body> 



<h1>CHALLENGE: <span style="font-weight: normal;">ISBN VALIDATION</span></h1>


<?php
 

 

 
$isbn = '0306406152';

 
if (strlen($isbn) !== 10) {
    die('ISBN must be 10 digits.');
}
 
$summary = 0;

for ($counter = 1; $counter <= 10; $counter++) {
    $index = $counter - 1;
    $summary += ( $isbn[$index] * abs($index - 10) );
}
 

if ($summary % 11 == 0) {
    echo 'The ISBN ' . $isbn . ' is valid';
} else {
    echo 'The ISBN ' . $isbn . ' is NOT valid';
}



echo('<h1>COIN TOSS.</h1>');


 $flips = [1, 3, 5, 7, 9];
 
    foreach ($flips as $flip) {
        echo '<p>Flipping a coin ' . $flip . ' times...</p>';
 
        for ($counter = 1; $counter <= $flip; $counter++) {
            $random = mt_rand();
 
            $image = ($random % 2 == 0) ? 'head' : 'tail';
            echo '<img src="' . $image . '.png" width="50" height="50" alt="Head"> &nbsp; ';
        }
    }
    
    

echo('<h1>COIN TOSS 2 IN A ROW.</h1>');

 
$flips_counter = 1;
for ( ; ; ) {
    $random = mt_rand();
 
    $image = ($random % 2 == 0) ? 'head' : 'tail';
    echo '<img src="' . $image . '.png" width="50" height="50" alt="Head"> &nbsp; ';
 
    if ($flips_counter > 1) {
        if ( ($previous_random % 2 == 0) && ($random % 2 == 0)) {
            break;
        }
    }
 
    $previous_random = $random;
 
    $flips_counter++;
}
 
echo '<p>Flipped two heads in a row in ' . $flips_counter . ' flips!</p>';
 

?>


</body>


</html>