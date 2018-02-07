<!DOCTYPE html>


<html>


<body>


<?php

for($count=99; $count<=600; --$count) {


if ( $count == 1 ) break;

echo "<ul>";
echo "<li>$count bottles of beer on the wall, $count bottles of beer.
Take one down, pass it around, ".(--$count)." bottles of beer on the wall.</li>";
echo "</ul>";

}


echo "Done\n";


?>


</body>


</html>

 
        
           